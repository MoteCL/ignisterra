<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mantencion extends CI_Controller {


	 function __construct()
 	{
 		parent::__construct();

		$this->load->model('ModelMantencion', 'ma');
		$this->load->model('ModelMain', 'main');
		$this->load->model('ModelSeguimiento', 'seguimiento');

 	}

	public function index()
	{

		if (!$this->session->userdata('logged_in')) {
			$this->load->view('index');
		}
		$data['data']=$this->ma->getallMaquinas();
		$data['costos']=$this->ma->getAllCentroCosto();
		$data['orden']=$this->ma->getOrden();
		$session_data = $this->session->userdata('logged_in');
		$data['Codigo'] = $session_data['Codigo'];
		$data['Nombre'] = $session_data['Nombre'];
		$data['Tipo'] = $session_data['Tipo'];

		$this->load->view('dashboard',$data);
	}
	public function landingPage()
	{

		if (!$this->session->userdata('logged_in')) {
			$this->load->view('index');
		}
		$data['data']=$this->ma->getallMaquinas();
		$data['costos']=$this->ma->getAllCentroCosto();
		$data['orden']=$this->ma->getOrden();
		$session_data = $this->session->userdata('logged_in');
		$data['Codigo'] = $session_data['Codigo'];
		$data['Nombre'] = $session_data['Nombre'];
		$data['Tipo'] = $session_data['Tipo'];

		$this->load->view('dashboard-MAN',$data);
	}

  public function save()
	{
    $this->load->helper('date');
		$session_data = $this->session->userdata('logged_in');
    $this->form_validation->set_rules('NroSolicitud', 'NroSolicitud');
    $this->form_validation->set_rules('maquina', 'maquina','required|trim',array(
			'required' => 'Seleccione una maquina'
		));
    $this->form_validation->set_rules('CodArea', 'CodArea');
    $this->form_validation->set_rules('detalle', 'detalle', 'required', array(
			'required' => 'Ingrese un detalle'
		));
    $this->form_validation->set_rules('tipomantencion', 'tipomantencion', 'required', array(
			'required' => 'Seleccione una mantencion'
		));
    $this->form_validation->set_rules('urgente', 'urgente');
    $this->form_validation->set_rules('tipotrabajo', 'tipotrabajo');


    if ($this->form_validation->run()) {

      $data = $this->input->post();
      $data['fechasolicitud'] = date('Y-m-d');
      $data['horasolicitud'] = date('H:i:s');
			$data['estado'] = 'ABIERTA';
			$data['orden'] = $this->input->post('orden');
			$data['cod_detecta'] = $session_data['Codigo'];
			if (!$this->input->post('urgente')) {
					$data['urgente'] = 'NO';
			}
      unset($data['submit']);
      if ($this->ma->addData($data)) {
					$message='Mantención  ingresada exitosamente   ';
      } else {
        $this->session->set_flashdata('error_msg', 'Error DB');
      }
			$result = $this->main->getEmail();
			foreach ($result as $row) {
				$recibeQuery = $row-> codigoEncargado;
				$envia = $row-> smtp_user;
				$recibeUrQuery = $row -> codigoCC;
				$config = Array(
			'protocol' => $row->protocol,
			'smtp_host' => $row->smtp_host,
			'smtp_port' => $row->smtp_port,
			'smtp_user' => $row->smtp_user,
			'smtp_pass' => $row->smtp_pass,
			'mailtype'  => $row->mailtype,
			'charset'   => $row->charset
			);
			}
			$result1 = $this->main->getCorreo($recibeQuery);
			foreach ($result1 as $key) {
			 $recibe = $key-> Correo;
			}
			$result2 = $this->main->getCorreo($recibeUrQuery);
			foreach ($result2 as $key) {
			 $recibeUr = $key-> Correo;
			}


		$dataa['NroSolicitud'] = $_POST['NroSolicitud'];
		$dataa['maquina'] = $_POST['maquina'];
		$dataa['Nombre'] = $session_data['Nombre'];
		$dataa['Codigo'] = $session_data['Codigo'];
		$dataa['CodArea'] = $_POST['CodArea'];
		$dataa['detalle'] = $_POST['detalle'];
		$dataa['CodArea'] = $_POST['CodArea'];
		$dataa['tipotrabajo'] = $_POST['tipotrabajo'];

		$dataa['tipomantencion'] = $_POST['tipomantencion'];
		$dataa['urgente'] = $_POST['urgente'];
		$dataa['detalle'] = $_POST['detalle'];
		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");
		$body = $this->load->view('email/index.php',$dataa,TRUE);
		$this->email->to($recibe);
		if ($this->input->post('urgente')) {

				$this->email->cc($recibeUr);
				$this->email->from($envia,'[Urgente]');
				$this->email->subject('Nueva Mantencion maquina '.$_POST['maquina']);
		}else {
			$this->email->from($envia,'');
				$this->email->subject('Nueva Mantencion maquina '.$_POST['maquina']);
		}


		$this->email->message($body);
		$this->email->set_mailtype("html");

			if ($this->email->send()) {

			$this->session->set_flashdata('success_msg', 'Mantención  ingresada exitosamente');
		}else {
			$message.= $this->email->print_debugger();
				$this->session->set_flashdata('success_msg', $message);

		}
      return redirect('main/index');
    } else {
			$data['data']=$this->ma->getallMaquinas();
			$data['orden']=$this->ma->getOrden();
			$session_data = $this->session->userdata('logged_in');
			$data['Codigo'] = $session_data['Codigo'];
      $data['Nombre'] = $session_data['Nombre'];
			$data['Tipo'] = $session_data['Tipo'];

      $this->load->view('dashboard-MAN',$data);
    }

	}

	public function saveMAN()
	{
    $this->load->helper('date');
		$session_data = $this->session->userdata('logged_in');
    $this->form_validation->set_rules('NroSolicitud', 'NroSolicitud');
    $this->form_validation->set_rules('maquina', 'maquina','required|trim',array(
			'required' => 'Seleccione una maquina'
		));
    $this->form_validation->set_rules('CodArea', 'CodArea');
    $this->form_validation->set_rules('detalle', 'detalle', 'required', array(
			'required' => 'Ingrese un detalle'
		));
    $this->form_validation->set_rules('tipomantencion', 'tipomantencion', 'required', array(
			'required' => 'Seleccione una mantencion'
		));
    $this->form_validation->set_rules('urgente', 'urgente');
    $this->form_validation->set_rules('tipotrabajo', 'tipotrabajo');
		$this->form_validation->set_rules('phoneData', 'phoneData','required', array(
			'required' => 'Ingrese codigo'
		));

		$check = $this->input->post('phoneData');
    if ($this->form_validation->run() && $this->main->checkUser($check)) {

			$data['NroSolicitud'] = $_POST['NroSolicitud'];
			$data['maquina'] = $_POST['maquina'];
			$data['tipotrabajo'] = $_POST['tipotrabajo'];
			$data['tipomantencion'] = $_POST['tipomantencion'];
			$data['orden'] = $this->input->post('orden');
			$data['CodArea'] = $_POST['CodArea'];
			$data['detalle'] = $_POST['detalle'];
      $data['fechasolicitud'] = date('Y-m-d');
      $data['horasolicitud'] = date('H:i:s');
			$data['estado'] = 'ABIERTA';
			$data['cod_detecta'] = $this->input->post('phoneData');
			$data['urgente'] = 'NO';
      if ($this->ma->addData($data)) {
					$message='Mantención  ingresada exitosamente   ';
      } else {
        $this->session->set_flashdata('error_msg', 'Error DB');
      }
			$result = $this->main->getEmail();
			foreach ($result as $row) {
				$recibeQuery = $row-> codigoEncargado;
				$envia = $row-> smtp_user;

				$config = Array(
			'protocol' => $row->protocol,
			'smtp_host' => $row->smtp_host,
			'smtp_port' => $row->smtp_port,
			'smtp_user' => $row->smtp_user,
			'smtp_pass' => $row->smtp_pass,
			'mailtype'  => $row->mailtype,
			'charset'   => $row->charset
			);
			}
			$result1 = $this->main->getCorreo($recibeQuery);
			foreach ($result1 as $key) {
			 $recibe = $key-> Correo;
			}

			$result3 = $this->main->getCorreo($this->input->post('phoneData'));
			foreach ($result3 as $key) {
				$nombrePersonal = $key-> Nombre;
			}



		$dataa['NroSolicitud'] = $_POST['NroSolicitud'];
		$dataa['maquina'] = $_POST['maquina'];
		$dataa['Nombre'] = $nombrePersonal;
		$dataa['Codigo'] = $this->input->post('phoneData');
		$dataa['CodArea'] = $_POST['CodArea'];
		$dataa['detalle'] = $_POST['detalle'];
		$dataa['tipotrabajo'] = $_POST['tipotrabajo'];
		$dataa['tipomantencion'] = $_POST['tipomantencion'];
		$dataa['urgente'] = $_POST['urgente'];
		$machine = $this->input->post('maquina');

		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");
		$body = $this->load->view('email/index.php',$dataa,TRUE);
		$this->email->from($envia,'');
		$this->email->to($recibe);
		$this->email->subject('Nueva Mantencion maquina '.$machine);
		$this->email->message($body);
		$this->email->set_mailtype("html");

			if ($this->email->send()) {

			$this->session->set_flashdata('success_msg', 'Mantención  ingresada exitosamente');
		}else {
			$message.= $this->email->print_debugger();
				$this->session->set_flashdata('success_msg', $message);

		}
      return redirect('main/menu');
    } else {
				$this->session->set_flashdata('error_msg', 'Codigo Invalido');
			$data['data']=$this->ma->getallMaquinas();
			$data['orden']=$this->ma->getOrden();
			$session_data = $this->session->userdata('logged_in');
			$data['Codigo'] = $session_data['Codigo'];
      $data['Nombre'] = $session_data['Nombre'];
			$data['Tipo'] = $session_data['Tipo'];

      $this->load->view('dashboard',$data);
    }

	}

	public function listado()
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('main/login', 'refresh');
		}
		$estado = 'PENDIENTE';
		$estado2 = 'ABIERTA';

		$data['data']=$this->ma->getTwoWhere($estado,$estado2);
		$data['area']=$this->ma->getallArea();
		$session_data = $this->session->userdata('logged_in');
		$data['Codigo'] = $session_data['Codigo'];
		$data['Nombre'] = $session_data['Nombre'];
		$data['Tipo'] = $session_data['Tipo'];
		$this->load->view('list-mantencion',$data);
	}

	public function verMantencion($id)
	{

		if (!$this->session->userdata('logged_in')) {
			redirect('main/login', 'refresh');
		}
		$data['data'] = $this->ma->getMantencionbyId($id);

		$session_data = $this->session->userdata('logged_in');
		//$data['personas']=$this->main->getallPersona();
		$data['Codigo'] = $session_data['Codigo'];
		$data['Nombre'] = $session_data['Nombre'];
		$data['Tipo'] = $session_data['Tipo'];
	//	print_r($data);
		$this->load->view('verMantencion', $data);
	}

		public function listadoAprobado()
		{
			if (!$this->session->userdata('logged_in')) {
				redirect('main/index', 'refresh');
			}
			$estado = 'CERRADA';
			$data['data']=$this->ma->getallMantencion($estado);
			$data['area']=$this->ma->getallArea();
			$session_data = $this->session->userdata('logged_in');
			$data['Codigo'] = $session_data['Codigo'];
			$data['Nombre'] = $session_data['Nombre'];
			$data['Tipo'] = $session_data['Tipo'];
			$this->load->view('list-aprobado',$data);

		}
		public function verSeguimientoCerrado($id)
		{
			if (!$this->session->userdata('logged_in')) {
				redirect('main/login', 'refresh');
			}
			$data['data'] = $this->ma->getMantencionbyId($id);
			$data['area']=$this->ma->getallArea();
			$session_data = $this->session->userdata('logged_in');
			$data['personas']=$this->main->getallPersona();
			$data['seguimientos'] = $this->seguimiento->getManSeguimiento();
			$data['detalles'] = $this->seguimiento->getSeguimientoDetalle();


			$data['Codigo'] = $session_data['Codigo'];
			$data['Nombre'] = $session_data['Nombre'];
			$data['Tipo'] = $session_data['Tipo'];
			$this->load->view('verCerrada', $data);

		}


		public function buscarView()
		{
			if (!$this->session->userdata('logged_in')) {
				redirect('main/login', 'refresh');
			}
			$session_data = $this->session->userdata('logged_in');
			$data['Codigo'] = $session_data['Codigo'];
			$data['Nombre'] = $session_data['Nombre'];
			$data['Tipo'] = $session_data['Tipo'];
			$this->load->view('search', $data);

		}

		public function buscarMantencion()
		{
			if (!$this->session->userdata('logged_in')) {
				redirect('main/login', 'refresh');
			}
				$session_data = $this->session->userdata('logged_in');
				$data['Codigo'] = $session_data['Codigo'];
				$data['Nombre'] = $session_data['Nombre'];
				$data['Tipo'] = $session_data['Tipo'];
				$this->form_validation->set_rules('NroSolicitud', 'NroSolicitud', 'required', array(
				'required' => 'Ingrese un codigo!'
			));

			if ($this->form_validation->run()) {
				$id = $_POST['NroSolicitud'];
				if ($this->ma->getMantencionbyId($id)) {
					$data['data'] = $this->ma->getMantencionbyId($id);
					$this->load->view('mantencionId', $data);
				} else {
					$this->session->set_flashdata('error_msg', 'Error Numero Invalido');
					$this->load->view('search', $data);
				}

			} else {

				$this->load->view('search', $data);

	    }
		}

		public function save_MANTecnico($id)
		{

			$this->load->helper('date');
			$this->form_validation->set_rules('clasificacion', 'clasificacion','required',array(
				'required' => 'Seleccione una clasificacion'
			));
			$this->form_validation->set_rules('tipo_detencion', 'tipo_detencion','required',array(
				'required' => 'Seleccione una detencion'
			));
			$this->form_validation->set_rules('horaInicio', 'horaInicio','required',array(
				'required' => 'Ingrese una hora de inicio'
			));
			$this->form_validation->set_rules('horaTermino', 'horaTermino','required',array(
				'required' => 'Ingrese una hora de termino'
			));
			$this->form_validation->set_rules('Comentario', 'Comentario','required',array(
				'required' => 'Agrege un breve comentario'
			));

			if ($this->form_validation->run() || $this->main->verificarCodigo($_POST['id_tecnico1'])) {

				$data['clasificacion'] = $_POST['clasificacion'];
				$data['tipo_detencion'] = $_POST['tipo_detencion'];
			  $data['NroSolicitud'] = $id;
				$data['fecha'] = date('Y-m-d');
				$data['estado'] = 'TECNICA';

				$id_seguimiento = $this->seguimiento->create('MAN_Seguimiento',$data);
				$data2 = array(
							 'horaInicio'=>$_POST['horaInicio'],
							 'horaTermino'=>$_POST['horaTermino'],
							 'HH'=>$_POST['HH'],
							 'HM'=>$_POST['HM'],
							 'Int_Prod'=>$_POST['Int_Prod'],
							 'id_man_tecnico'=>$id_seguimiento,
							 'Comentario'=>$_POST['Comentario'],
					 );
				$id_detalle = $this->seguimiento->create('Seguimiento_Detalle',$data2);
				$update['estado'] = 'TECNICA';
				$result = $this->ma->updateMantencion($update, $id);
				if ($_POST['id_tecnico1']) {
					$data3 = array(
							'id_tecnico' => $_POST['id_tecnico1'],
							'id_detalle' => $id_detalle
					);
					$this->seguimiento->create('Tecnico_Seguimiento',$data3);
				}
				if ($_POST['id_tecnico2']) {
					$data3 = array(
							'id_tecnico' => $_POST['id_tecnico2'],
							'id_detalle' => $id_detalle
					);
					$this->seguimiento->create('Tecnico_Seguimiento',$data3);
				}
				if ($_POST['id_tecnico3']) {
					$data3 = array(
							'id_tecnico' => $_POST['id_tecnico3'],
							'id_detalle' => $id_detalle
					);
					$this->seguimiento->create('Tecnico_Seguimiento',$data3);
				}
				if ($result) {
					$this->session->set_flashdata('success_msg', 'Mantencion en seguimiento');
				}else{
					 		$this->session->set_flashdata('error_msg', 'Error BD');
					 	}
						return redirect('mantencion/listado');

			} else{
				$data['data'] = $this->ma->getMantencionbyId($id);
				$data['area']=$this->ma->getallArea();
				$session_data = $this->session->userdata('logged_in');
				$data['personas']=$this->main->getallPersona();
				$data['Codigo'] = $session_data['Codigo'];
				$data['Nombre'] = $session_data['Nombre'];
				$data['Tipo'] = $session_data['Tipo'];

				$this->load->view('verMantencion', $data);
			}
		}

		public function historialMaquina($maquina)
		{
			if (!$this->session->userdata('logged_in')) {
				redirect('main/login', 'refresh');
			}
			$session_data = $this->session->userdata('logged_in');
			$data['maquinas'] = $this->ma->gethistorialMaquina($maquina);
			$data['personas']=$this->main->getallPersona();
			$data['seguimientos']=$this->seguimiento->getManSeguimiento();

			$data['machine'] = $maquina;
			$data['numero'] = $_POST['numero'];
			$data['Codigo'] = $session_data['Codigo'];
			$data['Nombre'] = $session_data['Nombre'];
			$data['Tipo'] = $session_data['Tipo'];
			$tittle['titulo'] = 'Historial de Maquina';
			$tittle['maquina'] = $maquina;

			$this->load->view('template/headerwith',$tittle);
			$this->load->view('historialMaquina',$data);

		}

		public function listByArea()
		{
			if (!$this->session->userdata('logged_in')) {
				redirect('main/login', 'refresh');
			}
			$session_data = $this->session->userdata('logged_in');
			$area = $session_data['Area'];
			$data['Codigo'] = $session_data['Codigo'];
			$data['Nombre'] = $session_data['Nombre'];
			$data['Tipo'] = $session_data['Tipo'];
			$data['Area'] = $session_data['Area'];
			$data['datos'] = $this->ma->listByArea($area);
			//print_r($data);
			$this->load->view('list-sup', $data);
		}

		// public function getArea()
		// {
		// 	$session_data = $this->session->userdata('logged_in');
		// 	$area= $session_data['Area'];
		// 	// $data['datos'] = $this->ma->listByArea($area);
		// 	$result =$this->ma->listByArea($area);
		// 		echo json_encode($result);
		// }

		public function editarUrgente($id)
		{

 			if (!$this->session->userdata('logged_in')) {
				redirect('main/login', 'refresh');
			}
			$result4 = $this->ma->getMantecionUrgente($id);
			foreach ($result4 as $key) {
				$estado= $key->urgente;
			}

			if ($estado=='SI') {
					$this->session->set_flashdata('error_msg', 'Ya se encuentra en estado Urgente');
					return redirect('mantencion/listByArea');
			}else {

				$session_data = $this->session->userdata('logged_in');
				$data['Codigo'] = $session_data['Codigo'];
				$data['Nombre'] = $session_data['Nombre'];
				$data['Tipo'] = $session_data['Tipo'];
				$data['Area'] = $session_data['Area'];
				$data['dato'] =  $this->ma->getMantencionbyId($id);
				$this->load->view('editUrgente',$data);
			}



		}
		public function editarPorSub($id)
		{

 			if (!$this->session->userdata('logged_in')) {
				redirect('main/login', 'refresh');
			}


			$data = $this->input->post('urgente');
			if ($this->ma->updateUrgente($id,$data)) {

				$this->session->set_flashdata('error_msg', 'ERROR DB');
			} else {

				$result = $this->main->getEmail();
				foreach ($result as $row) {
					$recibeQuery = $row-> codigoEncargado;
					$envia = $row-> smtp_user;
					$recibeUrQuery = $row -> codigoCC;
					$config = Array(
				'protocol' => $row->protocol,
				'smtp_host' => $row->smtp_host,
				'smtp_port' => $row->smtp_port,
				'smtp_user' => $row->smtp_user,
				'smtp_pass' => $row->smtp_pass,
				'mailtype'  => $row->mailtype,
				'charset'   => $row->charset
				);
				}
				$result1 = $this->main->getCorreo($recibeQuery);
				foreach ($result1 as $key) {
				 $recibe = $key-> Correo;
				}
				$result2 = $this->main->getCorreo($recibeUrQuery);
				foreach ($result2 as $key) {
				 $recibeUr = $key-> Correo;
				}
				$result3 = $this->ma->getMantecionUrgente($id);
				foreach ($result3 as $key) {
					$dataa['NroSolicitud'] = $key-> NroSolicitud;
					$dataa['maquina'] = $key-> maquina;
					$dataa['detalle'] = $key-> detalle;
					$dataa['CodArea'] = $key-> NroSolicitud;
					$dataa['tipotrabajo'] = $key-> tipotrabajo;
					$dataa['tipomantencion'] = $key-> tipomantencion;
					$dataa['urgente'] = $key-> urgente;
					$dataa['fechasolicitud'] = $key-> fechasolicitud;
					$maquina = $key-> maquina;

				}
				$session_data = $this->session->userdata('logged_in');
				$dataa['Nombre'] = $session_data['Nombre'];
				$dataa['Codigo'] = $session_data['Codigo'];
				$dataa['Area'] = $session_data['Area'];


			$this->load->library('email',$config);
			$this->email->set_newline("\r\n");
			$body = $this->load->view('email/edit.php',$dataa,TRUE);
			$this->email->from($envia,'');
			$this->email->to($recibe);
			$this->email->cc($recibeUr);
			$this->email->subject('Modificacion Mantencion');
			$this->email->message($body);
			$this->email->set_mailtype("html");

				if ($this->email->send()) {

			$message= 'Correo Enviado';
			}else {
				$message.= $this->email->print_debugger();
				$this->session->set_flashdata('success_msg', $message);

			}
					$message.= 'Matencion editada';
				$this->session->set_flashdata('success_msg', $message);
			}
			return redirect('mantencion/listByArea');
		}

		public function editarMantencion($id)
		{
			if (!$this->session->userdata('logged_in')) {
				redirect('main/login', 'refresh');
			}
			$session_data = $this->session->userdata('logged_in');
			$data['Codigo'] = $session_data['Codigo'];
			$data['Nombre'] = $session_data['Nombre'];
			$data['Tipo'] = $session_data['Tipo'];
			$data['Area'] = $session_data['Area'];
			$data['dato'] =  $this->ma->getMantencionbyId($id);
			$data['maquinas'] = $this->ma->getallMaquinas();
			$this->load->view('editarMantencion',$data);
		}
		public function getEditado($id)
		{
			if (!$this->session->userdata('logged_in')) {
				redirect('main/login', 'refresh');
			}
			$this->form_validation->set_rules('detalle', 'detalle', 'required', array(
				'required' => 'Agrege un detalle breve'
			));
			//FORMULARIO
			if ($this->form_validation->run()) {
				$data['detalle'] = $this->input->post('detalle');
				$data['maquina'] = $this->input->post('maquina');
				$data['urgente'] = $this->input->post('urgente');
				$data['CodArea'] = $this->input->post('CodArea');
				$data['tipomantencion'] = $this->input->post('tipomantencion');
				$data['tipotrabajo'] = $this->input->post('tipotrabajo');


				if ($this->ma->updateMantencion($data,$id)) {
						$this->session->set_flashdata('success_msg', 'Solicitud Editada');
				}else {
						$this->session->set_flashdata('error_msg', 'ERROR DB');
				}
				redirect('mantencion/listado', 'refresh');
			}


			$session_data = $this->session->userdata('logged_in');
			$data['Codigo'] = $session_data['Codigo'];
			$data['Nombre'] = $session_data['Nombre'];
			$data['Tipo'] = $session_data['Tipo'];
			$data['Area'] = $session_data['Area'];
			$data['dato'] =  $this->ma->getMantencionbyId($id);
			$data['maquinas'] = $this->ma->getallMaquinas();
			$this->load->view('editarMantencion',$data);
		}





}
