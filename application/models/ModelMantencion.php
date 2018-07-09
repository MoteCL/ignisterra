<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ModelMantencion extends CI_Model
{

  public function getallPost()
	{
		$this->db->order_by('Codigo', 'desc');
		$query = $this->db->get('personal');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

  public function getallMaquinas()
	{
		$this->db->order_by('Maquina', 'asc');
		$query = $this->db->get('Maquinas');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

  public function getallArea()
	{
		$this->db->order_by('CodArea', 'asc');
		$query = $this->db->get('area');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

  public function getOrden()
	{

    $sql = "SELECT MAX(orden) as total FROM(SELECT  orden FROM MAN_Solicitud UNION ALL SELECT orden FROM Actividades) as foo";
    $query = $this->db->query($sql);

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}

	}

  public function addData($data)
	{
		return $this->db->insert('MAN_Solicitud', $data);
	}

  public function getallMantencion($data)
  {
    $query = $this->db->get_where('MAN_Solicitud', array(
      'estado' => $data
    ));
    if ($query->num_rows() > 0) {
      return $query->result();
    }

  }
  public function getTwoWhere($data,$estado)
  {

    $where = "estado ='$data' OR estado='$estado'";
    $this->db->where($where);
    $query=$this->db->get('MAN_Solicitud');

    if ($query->num_rows() > 0) {
      return $query->result();
    }
    }

  public function getMantencionbyId($id)
	{
    $this->db->join('area as a', 'a.CodArea = MAN_Solicitud.CodArea');
    $this->db->join('personal as p', 'p.Codigo = MAN_Solicitud.cod_detecta');
    $query = $this->db->get_where('MAN_Solicitud', array(
			'NroSolicitud' => $id
		));
		if ($query->num_rows() > 0) {
			return $query->row();
		}
	}
  public function getMantecionUrgente($id)
  {

    $query = $this->db->get_where('MAN_Solicitud', array(
      'NroSolicitud' => $id
    ));
    if ($query->num_rows() > 0) {
      return $query->result();
    }
  }

  public function updateMantencion($data, $id)
	{
		return $this->db->where('NroSolicitud', $id)->update('MAN_Solicitud', $data);
	}


  public function getMantenciones()
	{
    $this->db->order_by('NroSolicitud', 'asc');
		$query = $this->db->get('MAN_Solicitud');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
  public function gethistorialMaquina($maquina)
	{
    $hoy = date('Y-m-d');
    $mes=date('Y-m-d',strtotime("-2 month"));
    $var = urldecode($maquina);

    $sql = "SELECT * FROM MAN_Solicitud WHERE maquina='$var' AND fechasolicitud BETWEEN '$mes' AND '$hoy'";
    $query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			return $query->result();
		}
	}

  public function listByArea($area)
  {
    $this->db->join('personal as p', 'p.Codigo = MAN_Solicitud.cod_detecta');
    $query = $this->db->get_where('MAN_Solicitud', array(
      'CodArea' => $area
    ));

    if ($query->num_rows() > 0) {
      return $query->result();
    }
  }

  public function updateUrgente($id,$data)
  {
    $this->db->set('urgente', $data);
    $this->db->where('NroSolicitud',$id);
    $this->db->update('MAN_Solicitud');
  }

}

?>
