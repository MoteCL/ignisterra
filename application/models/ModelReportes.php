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



}
