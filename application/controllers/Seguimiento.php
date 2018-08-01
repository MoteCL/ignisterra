<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seguimiento extends CI_Controller
{


    function __construct()
    {
        parent::__construct();

        $this->load->model('ModelMantencion', 'ma');
        $this->load->model('ModelMain', 'main');
        $this->load->model('ModelSeguimiento', 'seguimiento');

    }


    public function MAN_Seguimiento()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('main/login', 'refresh');
        }
        $estado           = 'TECNICA';
        $session_data     = $this->session->userdata('logged_in');
        $data['Codigo']   = $session_data['Codigo'];
        $data['Nombre']   = $session_data['Nombre'];
        $data['Tipo']     = $session_data['Tipo'];
        $data['tecnicos'] = $this->seguimiento->getSeguimientoWhere($estado);
        if ($session_data['Codigo']==999) {
            $this->session->set_flashdata('error_msg','PERMISO DENEGADO');
            redirect('mantencion/listado', 'refresh');
        }else {
            $this->load->view('list-tecnico', $data);
        }


    }
    public function verSeguimiento($id)
    {

        if (!$this->session->userdata('logged_in')) {
            redirect('main/login', 'refresh');
        }
        $estado = 'TECNICA';

        $data['data']     = $this->seguimiento->getDetallePorID($id);
        $data['seguimientos'] = $this->seguimiento->getManSeguimiento_where_id($id);
        $data['tecnicos'] = $this->seguimiento->getTecnicoSeguimiento();
        $session_data     = $this->session->userdata('logged_in');
        $data['Codigo']   = $session_data['Codigo'];
        $data['Nombre']   = $session_data['Nombre'];
        $data['Tipo']     = $session_data['Tipo'];
        //	print_r($data);
        $this->load->view('verManTecnico', $data);
    }

    public function save($id)
    {
        $update['estado'] = 'CERRADA';
        $id_seguimiento   = $this->input->post('id_seguimiento');
        $area             = $this->input->post('area');
        if ($this->ma->updateMantencion($update, $id)) {
            $insert['NroSolicitud'] = $id;
            $insert['fecha']        = date('Y-m-d');
            $insert['hora']         = date('H:i:s');
            $this->seguimiento->cerrarSolicitud($insert);
            $this->seguimiento->updateSeguimiento($update, $id_seguimiento);
            $message = 'Mantencion Ejecutada  ';

            $result = $this->main->getEmail();
            foreach ($result as $row) {

                $envia = $row->smtp_user;

                $config = Array(
                    'protocol' => $row->protocol,
                    'smtp_host' => $row->smtp_host,
                    'smtp_port' => $row->smtp_port,
                    'smtp_user' => $row->smtp_user,
                    'smtp_pass' => $row->smtp_pass,
                    'mailtype' => $row->mailtype,
                    'charset' => $row->charset
                );
            }
            $result3 = $this->seguimiento->getArea($area);
            foreach ($result3 as $row) {
                $areaSupervisor = $row->CodArea;
            }

            $result2 = $this->seguimiento->getSupervisor($areaSupervisor);
            foreach ($result2 as $row) {
                $recibe = $row->Correo;
            }
            $data['fecha']   = date('Y-m-d');
            $data['area']    = $this->input->post('area');
            $data['maquina'] = $this->input->post('maquina');
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $body = $this->load->view('email/supervisor.php', $data, TRUE);
            $this->email->from($envia, '');
            $this->email->to($recibe);
            $this->email->subject('Mantencion cerrada');
            $this->email->message($body);
            $this->email->set_mailtype("html");
            if ($this->email->send()) {
                $message .= 'Correo enviado';
                $this->session->set_flashdata('success_msg', $message);
            } else {
                $message = 'ERROR DB';
            }


        } else {
            $this->session->set_flashdata('error_msg', $message);
        }

        redirect('seguimiento/MAN_Seguimiento', 'refresh');
    }

    public function entreFechas()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('main/login', 'refresh');
        }
        $session_data   = $this->session->userdata('logged_in');
        $data['Codigo'] = $session_data['Codigo'];
        $data['Nombre'] = $session_data['Nombre'];
        $data['Tipo']   = $session_data['Tipo'];

        $this->load->view('entreFechas', $data);
    }

    public function get_phone_result()
    {
        $phoneData = $this->input->post('phoneData');
        $output    = '<h4 class="text-center">Seguimiento</h4><br>';
        if (isset($phoneData) and !empty($phoneData)) {
            $records = $this->seguimiento->get_search_phone($phoneData);

            foreach ($records->result_array() as $row) {
                $nestedData = date('j M Y', strtotime($row['fecha']));
                $output .= '

         <center><br><br>
				 <hr style="margin:0;">
         <div class="row">
				 <div class="col-4 col-md-2"><strong>Numero Solicitud</strong>
				 <p> ' . $row["NroSolicitud"] . '</p>
				 </div>
				 <div class="col-4 col-md-2"><strong>Fecha de seguiminento</strong>
				 <p> ' . $nestedData . '</p>
				 </div>
				 <div class="col-4 col-md-2"><strong>Clasificacion</strong>
				 <p> ' . $row["clasificacion"] . '</p>
				 </div>
				 <div class="col-4 col-md-2"><strong> Tipo Detencion</strong>
				 <p> ' . $row["tipo_detencion"] . '</p>
				 </div>
				 </div>
				 <div class="row">
				 <div class="col-4 col-md-2"><strong>Inicio</strong>
				  <p> ' . $row["horaInicio"] . '</p>
				 </div>
				 <div class="col-4 col-md-2"><strong>Termino</strong>
				  <p> ' . $row["horaTermino"] . '</p>
				 </div>
				 <div class="col-4 col-md-2"><strong>HH</strong>
				  <p> ' . $row["HH"] . '</p>
				 </div>
				 <div class="col-4 col-md-2"><strong>HM</strong>
				  <p> ' . $row["HM"] . '</p>
				 </div>
				 <div class="col-4 col-md-2"><strong>Detalle Tecnico</strong>
				 <p> ' . $row["Comentario"] . '</p>
				</div>
				 </div>';

            }
            echo $output;
        } else {
            echo $output .= 'No hay detalle ';
        }
    }

    public function get_fechas()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('main/login', 'refresh');
        }
        $session_data   = $this->session->userdata('logged_in');
        $data['Codigo'] = $session_data['Codigo'];
        $data['Nombre'] = $session_data['Nombre'];
        $data['Tipo']   = $session_data['Tipo'];

        $this->load->view('entreFechas', $data);
    }
    public function get_fecha_result()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('main/login', 'refresh');
        }
        $session_data   = $this->session->userdata('logged_in');
        $data['Codigo'] = $session_data['Codigo'];
        $data['Nombre'] = $session_data['Nombre'];
        $data['Tipo']   = $session_data['Tipo'];
        $desde          = $this->input->post('desde');
        $hasta          = $this->input->post('hasta');
        $urgente        = $this->input->post('urgente');
        $tipomantencion = $this->input->post('tipomantencion');
        $abierta        = $this->input->post('estado');
        $cerrada        = $this->input->post('estado2');
        $this->db->select('*');
        $this->db->from('MAN_Solicitud');
        $this->db->join('personal as p', 'p.Codigo = MAN_Solicitud.cod_detecta');

        if (!empty($desde) && !empty($hasta)) {
            $this->db->where('fechasolicitud >=', $desde);
            $this->db->where('fechasolicitud <=', $hasta);
        }
        if (!empty($urgente)) {
            $this->db->where('urgente', 'SI');
        }

        if (!empty($abierta)) {
            $this->db->where('estado', 'ABIERTA');
        }
        if (!empty($cerrada)) {
            $this->db->where('estado', 'CERRADA');
        }

        if (!empty($tipomantencion)) {
            $this->db->where('tipomantencion', $tipomantencion);
        }
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $data['datos'] = $query->result();
        }

        $data['start'] = $desde;
        $data['end']   = $hasta;
        $this->load->view('verEntreFechas', $data);


    }

    public function editarSeguimiento($id)
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('main/login', 'refresh');
        }
        $session_data     = $this->session->userdata('logged_in');
        $data['Codigo']   = $session_data['Codigo'];
        $data['Nombre']   = $session_data['Nombre'];
        $data['Tipo']     = $session_data['Tipo'];
        $data['Area']     = $session_data['Area'];
        $data['data']     = $this->seguimiento->getDetallePorID($id);
        $data['tecnicos'] = $this->seguimiento->getTecnicoSeguimiento();

        //print_r($data);
        $this->load->view('editarSeguimiento', $data);
    }

    public function editarSeguimientoPorId($id)
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('main/login', 'refresh');
        }
        $session_data   = $this->session->userdata('logged_in');
        $data['Codigo'] = $session_data['Codigo'];
        $data['Nombre'] = $session_data['Nombre'];
        $data['Tipo']   = $session_data['Tipo'];
        $data['Area']   = $session_data['Area'];


        $this->load->view('editarSeguimiento', $data);
    }

    public function save_Seguimiento($id)
    {


        $this->form_validation->set_rules('horaInicio', 'horaInicio', 'required', array(
            'required' => 'Ingrese una hora de inicio'
        ));
        $this->form_validation->set_rules('horaTermino', 'horaTermino', 'required', array(
            'required' => 'Ingrese una hora de termino'
        ));

        $this->form_validation->set_rules('HH', 'HH', 'required', array(
            'required' => 'FALTA CALCULO PRESIONE TAB AL MOMENTO DE INGRESAR HORA TERMINO'
        ));
        // $this->form_validation->set_rules('id_tecnico', 'id_tecnico', 'required', array(
        //     'required' => 'Ingrese un Codigo de un tecnico de Mantencion'
        // ));
        $this->form_validation->set_rules('HM', 'HM', 'required');
        $id_solicitud   = $this->input->post('NroSolicitud');
        $id_seguimiento = $this->input->post('id_seguimiento');
        if ($this->form_validation->run()) {
            $my_action = $this->input->post('submitt');

            if ($my_action == 'end') {
                $data['estado'] = 'TECNICA';
                $this->seguimiento->updateSeguimiento($data, $id);

                $data2      = array(
                    'fechaSeguimiento'  => $_POST['fechaSeguimiento'],
                    'horaInicio' => $_POST['horaInicio'],
                    'horaTermino' => $_POST['horaTermino'],
                    'HH' => $_POST['HH'],
                    'HM' => $_POST['HM'],
                    'total' => $_POST['HH'],
                    'Int_Prod' => $_POST['Int_Prod'],
                    'id_man_tecnico' => $id,
                    'Comentario' => $_POST['Comentario']
                );
                $id_detalle = $this->seguimiento->create('MAN_SeguimientoDetalle', $data2);


                $update['estado'] = 'TECNICA';
                $result           = $this->ma->updateMantencion($update, $id_solicitud);

                // foreach ($this->input->post('id_tecnico') as $tecnico) {
                //     $data3 = array(
                //         'id_tecnico' => $tecnico,
                //         'id_detalle' => $id_detalle
                //     );
                //
                //     $this->seguimiento->create('MAN_TecnicoSeguimiento', $data3);
                // }
                if ($_POST['id_tecnico1']) {
                    $data3 = array(
                        'id_tecnico' => $_POST['id_tecnico1'],
                        'id_detalle' => $id_detalle
                    );
                    $this->seguimiento->create('MAN_TecnicoSeguimiento', $data3);
                }
                if ($_POST['id_tecnico2']) {
                    $data3 = array(
                        'id_tecnico' => $_POST['id_tecnico2'],
                        'id_detalle' => $id_detalle
                    );
                    $this->seguimiento->create('MAN_TecnicoSeguimiento', $data3);
                }
                if ($_POST['id_tecnico3']) {
                    $data3 = array(
                        'id_tecnico' => $_POST['id_tecnico3'],
                        'id_detalle' => $id_detalle
                    );
                    $this->seguimiento->create('MAN_TecnicoSeguimiento', $data3);
                }
                if ($_POST['id_tecnico4']) {
                    $data3 = array(
                        'id_tecnico' => $_POST['id_tecnico4'],
                        'id_detalle' => $id_detalle
                    );
                    $this->seguimiento->create('MAN_TecnicoSeguimiento', $data3);
                }
                if ($_POST['id_tecnico5']) {
                    $data3 = array(
                        'id_tecnico' => $_POST['id_tecnico5'],
                        'id_detalle' => $id_detalle
                    );
                    $this->seguimiento->create('MAN_TecnicoSeguimiento', $data3);
                }
                if ($_POST['id_tecnico6']) {
                    $data3 = array(
                        'id_tecnico' => $_POST['id_tecnico6'],
                        'id_detalle' => $id_detalle
                    );
                    $this->seguimiento->create('MAN_TecnicoSeguimiento', $data3);
                }

                if ($result) {
                    $this->session->set_flashdata('success_msg', 'Mantencion en seguimiento');
                } else {
                    $this->session->set_flashdata('error_msg', 'Error BD');
                }

                return redirect('mantencion/listado');

            } else if ($my_action == 'other') {

                $data2 = array(
                    'fechaSeguimiento'  => $_POST['fechaSeguimiento'],
                    'horaInicio' => $_POST['horaInicio'],
                    'horaTermino' => $_POST['horaTermino'],
                    'HH' => $_POST['HH'],
                    'HM' => $_POST['HM'],
                    'total' => $_POST['HH'],
                    'Int_Prod' => $_POST['Int_Prod'],
                    'id_man_tecnico' => $id,
                    'Comentario' => $_POST['Comentario']
                );

                $id_detalle = $this->seguimiento->create('MAN_SeguimientoDetalle', $data2);


                // foreach ($this->input->post('id_tecnico') as $tecnico) {
                //
                //     $data3 = array(
                //         'id_tecnico' => $tecnico,
                //         'id_detalle' => $id_detalle
                //     );
                //
                //     $this->seguimiento->create('MAN_TecnicoSeguimiento', $data3);
                // }

                if ($_POST['id_tecnico1']) {
                    $data3 = array(
                        'id_tecnico' => $_POST['id_tecnico1'],
                        'id_detalle' => $id_detalle
                    );
                    $this->seguimiento->create('MAN_TecnicoSeguimiento', $data3);
                }
                if ($_POST['id_tecnico2']) {
                    $data3 = array(
                        'id_tecnico' => $_POST['id_tecnico2'],
                        'id_detalle' => $id_detalle
                    );
                    $this->seguimiento->create('MAN_TecnicoSeguimiento', $data3);
                }
                if ($_POST['id_tecnico3']) {
                    $data3 = array(
                        'id_tecnico' => $_POST['id_tecnico3'],
                        'id_detalle' => $id_detalle
                    );
                    $this->seguimiento->create('MAN_TecnicoSeguimiento', $data3);
                }
                if ($_POST['id_tecnico4']) {
                    $data3 = array(
                        'id_tecnico' => $_POST['id_tecnico4'],
                        'id_detalle' => $id_detalle
                    );
                    $this->seguimiento->create('MAN_TecnicoSeguimiento', $data3);
                }
                if ($_POST['id_tecnico5']) {
                    $data3 = array(
                        'id_tecnico' => $_POST['id_tecnico5'],
                        'id_detalle' => $id_detalle
                    );
                    $this->seguimiento->create('MAN_TecnicoSeguimiento', $data3);
                }
                if ($_POST['id_tecnico6']) {
                    $data3 = array(
                        'id_tecnico' => $_POST['id_tecnico6'],
                        'id_detalle' => $id_detalle
                    );
                    $this->seguimiento->create('MAN_TecnicoSeguimiento', $data3);
                }

								$data['data']   = $this->ma->getMantencionbyId($id_solicitud);
								$session_data   = $this->session->userdata('logged_in');
								$data['seguimientos'] = $this->seguimiento->getManSeguimiento_where($id_solicitud);
								$data['tecnicos'] = $this->seguimiento->getTecnicoSeguimiento();
								$data['Codigo'] = $session_data['Codigo'];
								$data['Nombre'] = $session_data['Nombre'];
								$data['Tipo']   = $session_data['Tipo'];


                $this->load->view('verMantencion', $data);
            }

        } else {
					$data['data']   = $this->ma->getMantencionbyId($id_solicitud);
					$session_data   = $this->session->userdata('logged_in');
					$data['seguimientos'] = $this->seguimiento->getManSeguimiento_where($id_solicitud);
					$data['tecnicos'] = $this->seguimiento->getTecnicoSeguimiento();
					$data['Codigo'] = $session_data['Codigo'];
					$data['Nombre'] = $session_data['Nombre'];
					$data['Tipo']   = $session_data['Tipo'];

            $this->load->view('verMantencion', $data);
        }
    }



}
