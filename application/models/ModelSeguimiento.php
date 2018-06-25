<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ModelSeguimiento extends CI_Model
{



  public function getManSeguimiento()
  {
    $this->db->order_by('idMan_Tecnico', 'desc');
    $query = $this->db->get('MAN_Seguimiento');

    if ($query->num_rows() > 0) {
      return $query->result();
    } else { return false; }
  }
  public function getSeguimientoDetalle()
  {
    $this->db->order_by('id_detalle', 'desc');
    $query = $this->db->get('Seguimiento_Detalle');

    if ($query->num_rows() > 0) {
      return $query->result();
    } else { return false; }
  }

  public function getSeguimientoJoin()
  {
    $this->db->select('*');
    $this->db->from('Seguimiento_Detalle as detalle');
    $this->db->join('MAN_Seguimiento as MAN', 'MAN.idMan_Tecnico = detalle.id_detalle');
    $this->db->join('Tecnico_Seguimiento as tecnico','tecnico.id_detalle = detalle.id_detalle');


    $query = $this->db->get();
    // $this->db->order_by('id_detalle', 'desc');
    // $query = $this->db->get('Seguimiento_Detalle');

    if ($query->num_rows() > 0) {
      return $query->result();
    } else { return false; }
  }

  public function updateSeguimiento($data, $id)
  {
    return $this->db->where('idMan_Tecnico', $id)->update('MAN_Seguimiento', $data);
  }




  public function create($table,$data)
  {
    $query = $this->db->insert($table, $data);
     return $this->db->insert_id();
  }




    public function getWhereEstado($data)
    {
      $query = $this->db->get_where('MAN_Solicitud', array(
        'estado' => $data
      ));
      if ($query->num_rows() > 0) {
        return $query->result();
      }
    }
    public function getSeguimientoWhere($data)
    {
      $query = $this->db->get_where('MAN_Seguimiento', array(
        'estado' => $data
      ));
      if ($query->num_rows() > 0) {
        return $query->result();
      }
    }


    public function getDetalleById($id)
    {
      // $this->db->select('*');
      // $this->db->from('Seguimiento_Detalle as detalle');
      // $this->db->join('MAN_Seguimiento as MAN', 'MAN.idMan_Tecnico = detalle.id_detalle');
      // $this->db->join('Tecnico_Seguimiento as tecnico','tecnico.id_detalle = detalle.id_detalle');
      // $this->db->where('MAN.idMan_Tecnico',$id);
      $this->db->select('*');
      $this->db->from('MAN_Seguimiento as MAN');
      $this->db->join('Seguimiento_Detalle as detalle', 'detalle.id_man_tecnico = MAN.idMan_Tecnico');
      $this->db->join('Tecnico_Seguimiento as tecnico','tecnico.id_detalle = detalle.id_detalle');
      $this->db->where('MAN.idMan_Tecnico',$id);
      $query = $this->db->get();
  		if ($query->num_rows() > 0) {
  			return $query->row();
  		}

    }
    public function getTecnicos($id)
    {
      $query = $this->db->get_where('Tecnico_Seguimiento', array(
  			'id_detalle' => $id
  		));
  		if ($query->num_rows() > 0) {
  			return $query->row();
  		}

    }

    public function get_search_phone($phoneData)
	{
		// $this->db->select('*');
    // $this->db->from('Seguimiento_Detalle');
    // $this->db->join('Tecnico_Seguimiento as tecnico','tecnico.id_detalle = Seguimiento_Detalle.id_detalle');
		// $this->db->where('Seguimiento_Detalle.id_detalle',$phoneData);
    // $query = $this->db->get();
    $this->db->select('*');
    $this->db->from('MAN_Seguimiento');
    $this->db->join('Seguimiento_Detalle as detalle','detalle.id_detalle = MAN_Seguimiento.idMan_Tecnico');
    $this->db->where('NroSolicitud',$phoneData);
    $res2 = $this->db->get();
    return $res2;
    // if ($query->num_rows() > 0) {
    //   return $query->result();
    // }
	}

  public function get_search_date($start,$end)
{
  $sql = "SELECT * FROM MAN_Solicitud WHERE fechasolicitud BETWEEN '$end' AND '$start'";
  // $sql.= $this->db->or_like('estado', $estado);
  $query = $this->db->query($sql);
  if ($query->num_rows() > 0) {
    return $query->result();
  }
}

}

?>
