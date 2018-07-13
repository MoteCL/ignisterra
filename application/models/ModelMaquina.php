<?php
class ModelMaquina extends CI_Model {


 function __construct(){

 }

 public function getallMaquinas()
 {

   $this->db->join('Centro_Costo as c', 'c.CodCC = Maestro_Maquinas.Centro_Costo');
   $this->db->join('area as a', 'a.CodArea = c.Area');
   $this->db->order_by('Maquina', 'asc');
   $query = $this->db->get('Maestro_Maquinas');
   if ($query->num_rows() > 0) {
     return $query->result();
   } else {
     return false;
   }
 }

 public function getallArea()
 {

   $this->db->order_by('DescArea', 'asc');
   $query = $this->db->get('area');
   if ($query->num_rows() > 0) {
     return $query->result();
   } else {
     return false;
   }
 }

 public function getSupervisor($supervisorArea)
 {

     $query = $this->db->get_where('personal', array(
         'Cargo' => 'S',
         'Area' => $supervisorArea
     ));
     if ($query->num_rows() > 0) {
         return $query->result();
     }
 }
 public function getArea($area)
 {

     $query = $this->db->get_where('area as a', array(
         'a.DescArea' => $area
     ));
     if ($query->num_rows() > 0) {
         return $query->result();
     }
 }


}
