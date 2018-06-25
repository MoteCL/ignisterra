<?php
class ModelAdempiere extends CI_Model {

 private $db_b;

 function __construct(){
  $this->db_b = $this->load->database('adempiere', TRUE);
 }


 public function getMaquina()
 {

   $this->db_b->order_by('ad_reference_id', 'asc');
   $query = $this->db_b->get('adempiere.a_ref_list');
   if ($query->num_rows() > 0) {
     return $query->result();
   } else {
     return false;
   }
 }
}
