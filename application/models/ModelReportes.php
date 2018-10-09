<?php
class ModelReportes extends CI_Model {

 private $db_b;

 function __construct(){

 }


 public function getIngresos()
 {

   $sql ="SELECT `fechasolicitud`, count(*) as contador FROM `MAN_Solicitud` GROUP BY `fechasolicitud` HAVING count(*) > 0 ORDER BY `fechasolicitud` asc ";
   $query = $this->db->query($sql);
   if ($query->num_rows() > 0) {
     return $query->result();
   } else {
     return false;
   }
 }

 public function getBETWEEN()
 {
   $hoy = date('Y-m-d');
   $mes=date('Y-m-d',strtotime("-1 month"));
   $sql ="SELECT `fechasolicitud`, count(*) as contador FROM `MAN_Solicitud` WHERE fechasolicitud BETWEEN '$mes' AND '$hoy' GROUP BY `fechasolicitud` HAVING count(*) > 0 ORDER BY `fechasolicitud` asc ";

     //$sql = "SELECT * FROM MAN_Solicitud WHERE fechasolicitud BETWEEN '$end' AND '$start'";
   $query = $this->db->query($sql);
   if ($query->num_rows() > 0) {
     return $query->result();
   } else {
     return false;
   }
 }

 public function getEstados()
 {

   //$sql= "SELECT estado, count(*) from MAN_Solicitud WHERE estado = 'ABIERTA' UNION ALL SELECT estado, count(*) from MAN_Solicitud WHERE estado = 'CERRADA'";

    $sql = "SELECT estado, COUNT(*) as contador FROM MAN_Solicitud WHERE estado IN ('ABIERTA','CERRADA','TECNICA') GROUP BY estado";
   $query = $this->db->query($sql);
   if ($query->num_rows() > 0) {
     return $query->result();
   } else {
     return false;
   }
 }
 public function getHistorial($desde,$hasta,$maquina)
 {


   $sql = "SELECT distinct s.orden,s.NroSolicitud,s.maquina,s.fechasolicitud,s.detalle,s.horasolicitud,s.tipomantencion,c.fecha,c.hora,s.tipotrabajo FROM `MAN_Solicitud` as s LEFT JOIN MAN_Cierre as c ON c.NroSolicitud = s.NroSolicitud WHERE s.maquina='$maquina' AND  s.fechasolicitud BETWEEN '$desde' AND '$hasta'";
   // $this->db->distinct('MAN.orden');
   // $this->db->select('*');
   // $this->db->from('MAN_Solicitud as MAN');
   // $this->db->join('MAN_Cierre as s', 's.NroSolicitud = MAN.NroSolicitud');
   // $this->db->where('MAN.maquina',$maquina);
   // $this->db->where('MAN.fechasolicitud >=',$desde);
   // $this->db->where('MAN.fechasolicitud <=',$hasta);
   // $this->db->order_by('MAN.fechasolicitud', 'desc');
   // $query = $this->db->get();
      $query = $this->db->query($sql);

   if ($query->num_rows() > 0) {
     return $query->result();
   } else { return false; }

 }


 public function getSguimientos($id)
 {
   $query = $this->db->get_where('MAN_Seguimiento', array(
     'NroSolicitud' => $id
   ));

   if ($query->num_rows() > 0) {
     return $query->result();
   }

 }

 public function getSeguimientoJoin($minvalue,$maxvalue)
 {

   $this->db->select('*');
   $this->db->from('MAN_Seguimiento as MAN');
   $this->db->join('MAN_SeguimientoDetalle as detalle', 'detalle.id_man_tecnico = MAN.idMan_Tecnico');

   $this->db->where('MAN.fecha >=',$minvalue);
   $this->db->where('MAN.fecha <=',$maxvalue);

   $query = $this->db->get();

   if ($query->num_rows() > 0) {
     return $query->result();
   } else { return false; }
 }

 public function getTecnicosSeguimiento()
 {

   $this->db->select('*');
   $this->db->from('MAN_TecnicoSeguimiento as d');
   $this->db->join('personal as p','p.Codigo= d.id_tecnico');


   $query = $this->db->get();

   if ($query->num_rows() > 0) {
     return $query->result();
   } else { return false; }
 }

 public function getTecnicos()
 {
   $this->db->select('*');
   $this->db->from('personal');
   $this->db->where('Cargo','T');
   $this->db->where('Area','M');
   $this->db->or_where('Area','TA');
   $query = $this->db->get();

   if ($query->num_rows() > 0) {
     return $query->result();
   }
 }
 public function getSeguimientoTecnico($minvalue,$maxvalue,$id)
 {
   $this->db->distinct();
   $this->db->select('t.id_tecnico,t.id_detalle,p.Nombre,s.idMan_Tecnico,s.fecha,s.NroSolicitud,d.horaInicio,d.horaTermino,d.Comentario,m.maquina, d.total, d.fechaSeguimiento,d.HM');
   // $this->db->from('MAN_TecnicoSeguimiento as t');
   $this->db->from('MAN_SeguimientoDetalle as d');
   $this->db->join('MAN_TecnicoSeguimiento as t','t.id_detalle = d.id_detalle');
   $this->db->join('personal as p','p.Codigo = t.id_tecnico');

   // $this->db->join('MAN_SeguimientoDetalle as d','d.id_detalle = t.id_detalle');
   $this->db->join('MAN_Seguimiento as s','s.idMan_Tecnico = d.id_man_tecnico');
   $this->db->join('MAN_Solicitud as m','m.NroSolicitud = s.NroSolicitud');
   $this->db->where('t.id_tecnico',$id);
   $this->db->where('d.fechaSeguimiento >=',$minvalue);
   $this->db->where('d.fechaSeguimiento <=',$maxvalue);
   $this->db->order_by('s.fecha', 'asc');

   $query = $this->db->get();


   if ($query->num_rows() > 0) {
     return $query->result();
   }
 }

 public function getActividades($minvalue,$maxvalue,$id)
 {

 $sql ="SELECT *  FROM MAN_Actividades WHERE fecha BETWEEN '$minvalue' AND '$maxvalue' AND id_tecnico='$id'";
    $query = $this->db->query($sql);
   // $this->db->select('*');
   // $this->db->from('MAN_Actividades');
   // $this->db->where('fecha >=',$minvalue);
   // $this->db->where('fecha <=',$maxvalue);
   // $this->db->where('id_tecnico',$id);
   //
   // $query = $this->db->get();

   if ($query->num_rows() > 0) {
     return $query->result();
   } else { return false; }
 }




 public function getIndice($tipo,$min,$max){
    $this->db->select('*');
    $this->db->from('MAN_Solicitud');
    $this->db->where('tipomantencion',$tipo);
    $this->db->where('fechasolicitud >=',$min);
    $this->db->where('fechasolicitud <=',$max);
    $query = $this->db->get();
    //return $query;

    if ($query->num_rows() > 0) {
      return $query->result();
    }
 }

 public function landing_page_enc(){
   $hoy = date('Y-m-d');
   $mes=date('Y-m-d',strtotime("-1 month"));
   $sql = "SELECT estado, COUNT(*) as contador FROM MAN_Solicitud  WHERE estado IN ('ABIERTA','CERRADA') AND fechasolicitud BETWEEN '$mes' AND '$hoy' GROUP BY estado";

   $query = $this->db->query($sql);

   if ($query->num_rows() > 0) {
     return $query->result();
   }

 }



}
