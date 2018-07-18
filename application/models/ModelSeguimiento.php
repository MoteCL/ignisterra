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
        } else {
            return false;
        }
    }
    public function getSeguimientoDetalle()
    {
        $this->db->order_by('id_detalle', 'desc');
        $query = $this->db->get('MAN_SeguimientoDetalle');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getTecnicoSeguimiento()
    {
        $this->db->join('personal as p', 'p.Codigo = MAN_TecnicoSeguimiento.id_tecnico');
        $this->db->order_by('id_detalle', 'desc');
        $query = $this->db->get('MAN_TecnicoSeguimiento');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getSeguimientoJoin()
    {
        $this->db->select('*');
        $this->db->from('MAN_SeguimientoDetalle as detalle');
        $this->db->join('MAN_Seguimiento as MAN', 'MAN.idMan_Tecnico = detalle.id_detalle');
        $this->db->join('MAN_TecnicoSeguimiento as tecnico', 'tecnico.id_detalle = detalle.id_detalle');


        $query = $this->db->get();


        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function updateSeguimiento($data, $id)
    {
        return $this->db->where('idMan_Tecnico', $id)->update('MAN_Seguimiento', $data);
    }




    public function create($table, $data)
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
        $this->db->join('MAN_Solicitud as m', 'm.NroSolicitud = s.NroSolicitud');
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
        $this->db->join('MAN_SeguimientoDetalle as detalle', 'detalle.id_man_tecnico = MAN.idMan_Tecnico');
        $this->db->join('MAN_TecnicoSeguimiento as tecnico', 'tecnico.id_detalle = detalle.id_detalle');

        $this->db->where('MAN.idMan_Tecnico', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        }

    }

    public function getDetallePorID($id)
    {

        $this->db->select('*');
        $this->db->from('MAN_Seguimiento as MAN');
        $this->db->join('MAN_Solicitud as s', 's.NroSolicitud = MAN.NroSolicitud');
        $this->db->join('MAN_SeguimientoDetalle as detalle', 'detalle.id_man_tecnico = MAN.idMan_Tecnico');
        $this->db->join('personal as p', 'p.Codigo = s.cod_detecta');
        $this->db->where('MAN.idMan_Tecnico', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        }

    }


    public function getTecnicos($id)
    {
        $query = $this->db->get_where('MAN_TecnicoSeguimiento', array(
            'id_detalle' => $id
        ));
        if ($query->num_rows() > 0) {
            return $query->row();
        }

    }

    public function get_search_phone($phoneData)
    {

        $this->db->select('*');
        $this->db->from('MAN_Seguimiento');
        $this->db->join('MAN_SeguimientoDetalle as detalle', 'detalle.id_detalle = MAN_Seguimiento.idMan_Tecnico');
        $this->db->where('NroSolicitud', $phoneData);
        $res2 = $this->db->get();
        return $res2;

    }

    public function get_search_date($minvalue, $maxvalue)
    {
        $this->db->select('*');
        $this->db->from('MAN_Solicitud as MAN');
        $this->db->join('personal as p', 'p.Codigo = MAN.cod_detecta');
        $this->db->where('MAN.fechasolicitud >=', $minvalue);
        $this->db->where('MAN.fechasolicitud <=', $maxvalue);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function getArea($area)
    {
        $query = $this->db->get_where('area', array(
            'DescArea' => $area
        ));
        if ($query->num_rows() > 0) {
            return $query->result();
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

    public function cambio($data)
    {
        return $this->db->insert('Cambio_Estado', $data);
    }
    public function cerrarSolicitud($data)
    {
        return $this->db->insert('MAN_Cierre', $data);
    }

    public function getCerradaPorArea($area)
    {
        $this->db->join('personal as p', 'p.Codigo = MAN_Solicitud.cod_detecta');
        $this->db->join('area as a', 'a.CodArea = p.Area');
        $query = $this->db->get_where('MAN_Solicitud', array(
            'MAN_Solicitud.CodArea' => $area,
            'MAN_Solicitud.estado' => 'CERRADA'
        ));

        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function addCambio($data)
    {
        return $this->db->insert('MAN_CambiaAbierta', $data);
    }

    public function updateSeguimientoDetalle($data, $id)
    {
        return $this->db->where('id_detalle', $id)->update('MAN_SeguimientoDetalle', $data);
    }

}

?>
