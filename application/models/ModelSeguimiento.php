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

  public function getTecnicoSeguimiento()
  {
    $this->db->join('personal as p', 'p.Codigo = Tecnico_Seguimiento.id_tecnico');
    $this->db->order_by('id_detalle', 'desc');
    $query = $this->db->get('Tecnico_Seguimiento');

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
      $this->db->join('MAN_Solicitud as m','m.NroSolicitud = s.NroSolicitud');
      $query = $this->db->get_where('MAN_Seguimiento as s', array(
        's.estado' => $data
      ));
      if ($query->num_rows() > 0) {
        return $query->result();
      }
    }


    public function getDetalleById($id)
    {

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

    public function getDetallePorID($id)
    {

      $this->db->select('*');
      $this->db->from('MAN_Seguimiento as MAN');
      $this->db->join('Seguimiento_Detalle as detalle', 'detalle.id_man_tecnico = MAN.idMan_Tecnico');
      $this->db->join('MAN_Solicitud as s','s.NroSolicitud = MAN.NroSolicitud');
      $this->db->join('personal as p','p.Codigo = s.cod_detecta');
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

  public function get_search_date($minvalue,$maxvalue)
{
     $this->db->select('*');
     $this->db->from('MAN_Solicitud as MAN');
     $this->db->join('personal as p','p.Codigo = MAN.cod_detecta');
     $this->db->where('MAN.fechasolicitud >=',$minvalue);
     $this->db->where('MAN.fechasolicitud <=',$maxvalue);
     $query = $this->db->get();
  if ($query->num_rows() > 0) {
    return $query->result();
  }
}

}

?>
