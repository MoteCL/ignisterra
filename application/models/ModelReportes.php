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

   //$this->db->select('MAN.orden,MAN.NroSolicitud,MAN.cod_detecta,MAN.maquina,MAN.fechasolicitud,MAN.horasolicitud,MAN.tipomantencion,MAN.CodArea,s.fecha as fechaT');
   $this->db->distinct('MAN.orden');
   $this->db->select('*');
   $this->db->from('MAN_Solicitud as MAN');
  //$this->db->join('MAN_Seguimiento as s', 's.NroSolicitud = MAN.NroSolicitud');
   $this->db->join('MAN_Cierre as s', 's.NroSolicitud = MAN.NroSolicitud');
   $this->db->where('MAN.maquina',$maquina);
   $this->db->where('MAN.fechasolicitud >=',$desde);
   $this->db->where('MAN.fechasolicitud <=',$hasta);
   $this->db->order_by('MAN.fechasolicitud', 'desc');
   $query = $this->db->get();

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
   $query = $this->db->get_where('personal', array(
     'Cargo' => 'T',
     'Area' =>'M'
   ));
   if ($query->num_rows() > 0) {
     return $query->result();
   }
 }
 public function getSeguimientoTecnico($minvalue,$maxvalue,$id)
 {
   $this->db->select('t.id_tecnico,t.id_detalle,p.Nombre,s.idMan_Tecnico,s.fecha,s.NroSolicitud,d.horaInicio,d.horaTermino,d.Comentario,m.maquina, d.total');
   $this->db->from('MAN_TecnicoSeguimiento as t');
   $this->db->join('personal as p','p.Codigo = t.id_tecnico');
   $this->db->join('MAN_SeguimientoDetalle as d','d.id_detalle = t.id_detalle');
   $this->db->join('MAN_Seguimiento as s','s.idMan_Tecnico = d.id_man_tecnico');
   $this->db->join('MAN_Solicitud as m','m.NroSolicitud = s.NroSolicitud');
   $this->db->where('t.id_tecnico',$id);
   $this->db->where('s.fecha >=',$minvalue);
   $this->db->where('s.fecha <=',$maxvalue);
   $this->db->order_by('s.fecha', 'asc');
   // $query1 = $this->db->get_compiled_select();
   //
   //
   // $this->db->select('act.NroSolicitud as NroAct, act.fecha,act.actividad,act.Comentario, act.TotalHrs, act.orden, act.horaActividad, act.id_tecnico ');
   // $this->db->from('MAN_Actividades as act');
   // $this->db->where('act.fecha >=',$minvalue);
   // $this->db->where('act.fecha <=',$maxvalue);
   // $this->db->where('act.id_tecnico <=',$id);
   // $query2 = $this->db->get_compiled_select();
   // return $this->db->query($query1." UNION ".$query2)->result();
   $query = $this->db->get();


   if ($query->num_rows() > 0) {
     return $query->result();
   }
 }

 public function getActividades($minvalue,$maxvalue,$id)
 {

   $this->db->select('*');
   $this->db->from('MAN_Actividades');
   $this->db->where('fecha >=',$minvalue);
   $this->db->where('fecha <=',$maxvalue);
   $this->db->where('id_tecnico',$id);

   $query = $this->db->get();

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
