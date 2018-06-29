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
		$this->db->select_max('orden');
		$this->db->from('MAN_Solicitud');
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
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
    $query = $this->db->get_where('MAN_Solicitud', array(
			'NroSolicitud' => $id
		));
		if ($query->num_rows() > 0) {
			return $query->row();
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
    // $query = $this->db->from('MAN_IngresoSolicitud')->where('maquina', $maquina)->where("fechasolicitud BETWEEN '$mes' AND '$hoy'")->get();
    $sql = "SELECT * FROM MAN_Solicitud WHERE maquina='$var' AND fechasolicitud BETWEEN '$mes' AND '$hoy'";
    $query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			return $query->result();
		}
	}

  public function listByArea($area)
  {
    $query = $this->db->get_where('MAN_Solicitud', array(
      'CodArea' => 'PB'
    ));

    if ($query->num_rows() > 0) {
      return $query->result();
    }
  }

}

?>
