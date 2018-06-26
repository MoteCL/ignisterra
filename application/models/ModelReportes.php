<?php
class ModelReportes extends CI_Model {

 private $db_b;

 function __construct(){

 }


 public function getIngresos()
 {

   $sql ="SELECT `fechasolicitud`, count(*) as contador FROM `MAN_Solicitud` GROUP BY `fechasolicitud` HAVING count(*) > 0 ORDER BY `fechasolicitud` DESC ";
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
   $sql ="SELECT `fechasolicitud`, count(*) as contador FROM `MAN_Solicitud` WHERE fechasolicitud BETWEEN '$mes' AND '$hoy' GROUP BY `fechasolicitud` HAVING count(*) > 0 ORDER BY `fechasolicitud` DESC ";

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

   $sql="SELECT count(*) as abierta from MAN_Solicitud where estado = 'ABIERTA' union SELECT count(*) as cerrada from MAN_Solicitud where estado = 'CERRADA'";

     //$sql = "SELECT * FROM MAN_Solicitud WHERE fechasolicitud BETWEEN '$end' AND '$start'";
   $query = $this->db->query($sql);
   if ($query->num_rows() > 0) {
     return $query->result();
   } else {
     return false;
   }
 }



}
