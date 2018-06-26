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
}
