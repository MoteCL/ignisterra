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
		$this->db->order_by('CodArea', 'asc');
		$query = $this->db->get('area');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

  public function getAllCentroCosto()
	{
    $this->db->join('area as a', 'a.CodArea = Centro_Costo.Area');
		$this->db->order_by('CodCC', 'asc');
		$query = $this->db->get('Centro_Costo');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

  public function getOrden()
	{

    $sql = "SELECT MAX(orden) as total FROM(SELECT  orden FROM MAN_Solicitud UNION ALL SELECT orden FROM MAN_Actividades) as foo";
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
    $this->db->select('m.orden, m.NroSolicitud, m.cod_detecta, m.detalle, m.fechasolicitud, m.horasolicitud, m.tipomantencion, m.estado, m.maquina, m.urgente, m.tipotrabajo, m.CodArea, p.Nombre as username, p.Codigo, p.Area as areT,a.DescArea as area');
    $this->db->join('personal as p', 'p.Codigo = m.cod_detecta');
    $this->db->join('area as a', 'a.CodArea = p.Area');
    $query = $this->db->get_where('MAN_Solicitud as m', array(
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
    $this->db->join('area as a', 'a.CodArea = p.Area');
    $query = $this->db->get_where('MAN_Solicitud', array(
      'MAN_Solicitud.CodArea' => $area,
      'MAN_Solicitud.estado' => 'ABIERTA'
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
