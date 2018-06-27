<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seguimiento extends CI_Controller {


	 function __construct()
 	{
 		parent::__construct();

		$this->load->model('ModelMantencion', 'ma');
		$this->load->model('ModelMain', 'main');
		$this->load->model('ModelSeguimiento', 'seguimiento');

 	}


  public function MAN_Seguimiento()
  {	$estado = 'TECNICA';
    $session_data = $this->session->userdata('logged_in');
    $data['Codigo'] = $session_data['Codigo'];
    $data['Nombre'] = $session_data['Nombre'];
		$data['Tipo'] = $session_data['Tipo'];
		$data['tecnicos']=$this->seguimiento->getSeguimientoWhere($estado);

		$data['datos']=$this->seguimiento->getWhereEstado($estado);

    $this->load->view('list-tecnico',$data);

  }
	public function verSeguimiento($id)
	{

		// if (!$this->session->userdata('logged_in')) {
		// 	redirect('main/login', 'refresh');
		// }
		$estado = 'TECNICA';
		$data['datos'] = $this->ma->getMantenciones();
		$data['personas']=$this->main->getallPersona();
		$data['data'] = $this->seguimiento->getDetalleById($id);

		$session_data = $this->session->userdata('logged_in');
		$data['Codigo'] = $session_data['Codigo'];
		$data['Nombre'] = $session_data['Nombre'];
		$data['Tipo'] = $session_data['Tipo'];

		$this->load->view('verManTecnico', $data);
	}

	public function save($id)
	{
		$update['estado'] = 'CERRADA';
		$id_seguimiento = $this->input->post('id_seguimiento');
		if ($this->ma->updateMantencion($update, $id)) {
				$this->seguimiento->updateSeguimiento($update,$id_seguimiento);
				$this->session->set_flashdata('success_msg', 'Mantencion Autorizada');
		}else {
			$this->session->set_flashdata('error_msg', 'Error BD');
		}
		redirect('seguimiento/MAN_Seguimiento', 'refresh');
	}

	public function entreFechas()
	{
		// if (!$this->session->userdata('logged_in')) {
		// 	redirect('main/login', 'refresh');
		// }
		$session_data = $this->session->userdata('logged_in');
		$data['Codigo'] = $session_data['Codigo'];
		$data['Nombre'] = $session_data['Nombre'];
		$data['Tipo'] = $session_data['Tipo'];

		$this->load->view('entreFechas', $data);
	}

	public function get_phone_result()
	{
		$phoneData = $this->input->post('phoneData');
		  $output = '<h4 class="text-center">Seguimiento</h4><br>';
        if(isset($phoneData) and !empty($phoneData)){
            $records = $this->seguimiento->get_search_phone($phoneData);

            foreach($records->result_array() as $row){
						$nestedData = date('j M Y',strtotime($row['fecha']));
             $output .= '

         <center><br><br>
				 <hr style="margin:0;">
         <div class="row">
				 <div class="col-4 col-md-2"><strong>Numero Solicitud</strong>
				 <p> '.$row["NroSolicitud"].'</p>
				 </div>
				 <div class="col-4 col-md-2"><strong>Fecha de seguiminento</strong>
				 <p> ' . $nestedData .'</p>
				 </div>
				 <div class="col-4 col-md-2"><strong>Clasificacion</strong>
				 <p> '.$row["clasificacion"].'</p>
				 </div>
				 <div class="col-4 col-md-2"><strong> Tipo Detencion</strong>
				 <p> '.$row["tipo_detencion"].'</p>
				 </div>
				 </div>
				 <div class="row">
				 <div class="col-4 col-md-2"><strong>Inicio</strong>
				  <p> '.$row["horaInicio"].'</p>
				 </div>
				 <div class="col-4 col-md-2"><strong>Termino</strong>
				  <p> '.$row["horaTermino"].'</p>
				 </div>
				 <div class="col-4 col-md-2"><strong>HH</strong>
				  <p> '.$row["HH"].'</p>
				 </div>
				 <div class="col-4 col-md-2"><strong>HM</strong>
				  <p> '.$row["HM"].'</p>
				 </div>
				 <div class="col-4 col-md-2"><strong>Detalle Tecnico</strong>
				 <p> '.$row["Comentario"].'</p>
				</div>
				 </div>';

            }
            echo $output;
        }else {
        	 echo $output .= 'No hay detalle ';
        }
 		}

 public function get_fechas()
 {
	 // if (!$this->session->userdata('logged_in')) {
		//  redirect('main/login', 'refresh');
	 // }
	 $session_data = $this->session->userdata('logged_in');
	 $data['Codigo'] = $session_data['Codigo'];
	 $data['Nombre'] = $session_data['Nombre'];
	 $data['Tipo'] = $session_data['Tipo'];

	 $this->load->view('entreFechas', $data);
 }
 public function get_fecha_result()
 {
	 $this->load->helper('date');
	 $this->form_validation->set_rules('inicio', 'inicio','required',array(
		 'required' => 'Seleccione una fecha!'
	 ));
	 $this->form_validation->set_rules('fin', 'fin','required',array(
		'required' => 'Seleccione una fecha'
	));
	$session_data = $this->session->userdata('logged_in');
	$data['Codigo'] = $session_data['Codigo'];
	$data['Nombre'] = $session_data['Nombre'];
	$data['Tipo'] = $session_data['Tipo'];

	  if ($this->form_validation->run()) {
			$inicio= $this->input->post('inicio');
			$fin= $this->input->post('fin');
			$estado= $this->input->post('$estado');
			if ($inicio<$fin) {
				$this->session->set_flashdata('error_msg', 'Error fecha');
				$this->load->view('entreFechas', $data);
			}else {
			 $data['datos'] =$this->seguimiento->get_search_date($inicio,$fin);
	 		 $data['start'] = $inicio;
	 		 $data['end'] = $fin;


	 	 	 $this->load->view('verEntreFechas', $data);
			}

	}else{
	 $session_data = $this->session->userdata('logged_in');

 	 $this->load->view('entreFechas', $data);

	}
	}


}
