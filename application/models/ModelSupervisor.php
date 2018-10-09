<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ModelSupervisor extends CI_Model
{



  public function getManSeguimiento()
  {
      $this->db->order_by('idMan_Tecnico', 'desc');
      $query = $this->db->get('MAN_Seguimiento');

      if ($query->num_rows() > 0) {
          return $query->result();
      } else {
          return false;
      }
  }

  public function getDetalle($codigo)
  {
    $sql ="SELECT * FROM MAN_SeguimientoDetalle as d
    LEFT JOIN MAN_Seguimiento as s ON s.idMan_Tecnico = d.id_man_tecnico
    WHERE s.NroSolicitud = '$codigo'";
    $query = $this->db->query($sql);
    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }
  public function getMaquinabyArea($area)
  {
    $sql ="SELECT * FROM `Maestro_Maquinas` as maq
    LEFT JOIN Centro_Costo as cent ON cent.CodCC = maq.Centro_Costo
    WHERE cent.Area = '$area'";
    $query = $this->db->query($sql);
    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }
  public function getMaquinabyAreas($area)
  {
    $sql ="SELECT * FROM `Maestro_Maquinas` as maq
    LEFT JOIN Centro_Costo as cent ON cent.CodCC = maq.Centro_Costo
    WHERE cent.Area = '$area' OR cent.Area='F' OR cent.Area='BIO' OR cent.Area='STM'";
    $query = $this->db->query($sql);
    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }
  public function listByArea($area)
    {

      $this->db->join('personal as p', 'p.Codigo = MAN_Solicitud.cod_detecta');
      $this->db->join('area as a', 'a.CodArea = p.Area');
      $this->db->where('MAN_Solicitud.CodArea',$area);
      $this->db->or_where('MAN_Solicitud.CodArea','F');
      $this->db->or_where('MAN_Solicitud.CodArea','BIO');
      $this->db->or_where('MAN_Solicitud.CodArea','STM');
      $this->db->where('MAN_Solicitud.estado','ABIERTA');
      // $this->db->where('MAN_Solicitud.CodArea','BIO');
      $this->db->from('MAN_Solicitud');
      $query = $this->db->get();


      if ($query->num_rows() > 0) {
        return $query->result();
      }
    }

    public function getCerradaPorArea($area)
    {
        $this->db->join('personal as p', 'p.Codigo = MAN_Solicitud.cod_detecta');
        $this->db->join('area as a', 'a.CodArea = p.Area');
        $this->db->where('MAN_Solicitud.CodArea',$area);
        $this->db->or_where('MAN_Solicitud.CodArea','F');
        $this->db->or_where('MAN_Solicitud.CodArea','BIO');
        $this->db->or_where('MAN_Solicitud.CodArea','STM');
        $this->db->where('MAN_Solicitud.estado','CERRADA');
        $this->db->from('MAN_Solicitud');
        $query = $this->db->get();
        // $query = $this->db->get_where('MAN_Solicitud', array(
        //     'MAN_Solicitud.CodArea' => $area,
        //     'MAN_Solicitud.estado' => 'CERRADA'
        // ));

        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

}

?>
