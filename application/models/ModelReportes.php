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

   //$sql = "SELECT * FROM MAN_Solicitud INNER JOIN MAN_Seguimiento ON MAN_Solicitud.NroSolicitud = MAN_Seguimiento.NroSolicitud WHERE MAN_Solicitud.maquina='Otros' AND MAN_Solicitud.fechasolicitud BETWEEN '$desde' AND '$hasta'";
   $sql = "SELECT * FROM MAN_Solicitud WHERE maquina='$maquina' AND fechasolicitud BETWEEN '$desde' AND '$hasta'";
   $query = $this->db->query($sql);

   if ($query->num_rows() > 0) {
     return $query->result();
   }

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
   // $this->db->select('*');
   // $this->db->from('Seguimiento_Detalle as detalle');
   // $this->db->join('MAN_Seguimiento as MAN', 'MAN.idMan_Tecnico = detalle.id_detalle');
   // $this->db->join('Tecnico_Seguimiento as tecnico','tecnico.id_detalle = detalle.id_detalle');
   // $this->db->join('personal as p','p.Codigo= tecnico.id_tecnico');
   // $this->db->select('*');
   // $this->db->from('MAN_Seguimiento as MAN');
   // $this->db->join('Seguimiento_Detalle as detalle', 'detalle.id_man_tecnico = MAN.idMan_Tecnico');
   // $this->db->join('Tecnico_Seguimiento as tecnico','tecnico.id_detalle = detalle.id_detalle');
   // $this->db->join('personal as p','p.Codigo= tecnico.id_tecnico');

   $this->db->select('*');
   $this->db->from('MAN_Seguimiento as MAN');
   $this->db->join('Seguimiento_Detalle as detalle', 'detalle.id_man_tecnico = MAN.idMan_Tecnico');
   $this->db->join('Tecnico_Seguimiento as tecnico','tecnico.id_detalle = detalle.id_detalle');
   $this->db->join('personal as p','p.Codigo= tecnico.id_tecnico');
   $this->db->where('MAN.fecha >=',$minvalue);
   $this->db->where('MAN.fecha <=',$maxvalue);

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
   $this->db->select('t.id_tecnico,t.id_detalle,p.Nombre,s.idMan_Tecnico,s.fecha,s.NroSolicitud,d.horaInicio,d.horaTermino,d.Comentario,m.maquina');
   $this->db->from('Tecnico_Seguimiento as t');
   $this->db->join('personal as p','p.Codigo = t.id_tecnico');
   $this->db->join('Seguimiento_Detalle as d','d.id_detalle = t.id_detalle');
   $this->db->join('MAN_Seguimiento as s','s.idMan_Tecnico = d.id_man_tecnico');
   $this->db->join('MAN_Solicitud as m','m.NroSolicitud = s.NroSolicitud');
   $this->db->where('t.id_tecnico',$id);
   //$this->db->join('Seguimiento_Detalle as d','d.id_detalle = t.id_detalle');
   $this->db->where('s.fecha >=',$minvalue);
   $this->db->where('s.fecha <=',$maxvalue);
   $this->db->order_by('s.fecha', 'asc');
   //$this->db->where('s.fecha BETWEEN '.$minvalue.' AND '.$maxvalue.'');
   $query = $this->db->get();
   //return $query;

   if ($query->num_rows() > 0) {
     return $query->result();
   }
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
