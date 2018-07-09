<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 *
	 * Contructor
	 *
	 **/

	 function __construct()
 	{
 		parent::__construct();
 		$this->load->model('ModelMain', 'm');
		$this->load->model('ModelMantencion', 'ma');
		$this->load->model('ModelReportes', 'report');
 	}

	/**
	 *
	 * Index
	 *
	 **/
	public function index()
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('main/login', 'refresh');
		}

		$data['data']=$this->ma->getallMaquinas();
		$data['orden']=$this->ma->getOrden();
		$session_data = $this->session->userdata('logged_in');
		$data['Codigo'] = $session_data['Codigo'];
		$data['Nombre'] = $session_data['Nombre'];
		$data['Tipo'] = $session_data['Tipo'];
			$data['result'] =  $this->report->getdataa();
		$this->load->view('landing-page',$data);
	}

	/**
	 *
	 * Funcion Login. LLamos a funcion check_database
	 * Nos envia a la vista dashboard.php
	 **/
	public function user_login_process()
	{
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('pwd', 'pwd', 'trim|required|callback_check_database');
		if ($this->form_validation->run() == FALSE) {

			// Field validation failed.  User redirected to login page

		$this->load->view('index');
		}
		else {

			// Go to private area

			redirect('main/index', 'refresh');
		}
	}

	/**
	 *
	 * Funcion check_database
	 *Llamamos al metodo login del Modelo ModelMain, nos devuelve un True O false
	 **/
	function check_database()
		{

		$username = $this->input->post('username');
		$password = $this->input->post('pwd');
		$result = $this->m->login($username);
		if ($result)
			{

			foreach($result as $row)
				{
						$passwordHash =$row-> Password;
					if (password_verify($password,$passwordHash)) {
						$sess_array = array(
							'Codigo' => $row-> Codigo,
							'Nombre' => $row-> Nombre,
							'Tipo' => $row-> tipo_usuario,
							'Area' =>$row-> Area,
						);
						$this->session->set_userdata('logged_in', $sess_array);
						return TRUE;
					}
				}


			}
		  else
			{
			$this->form_validation->set_message('check_database', 'Usuario Invalido');
			return false;
			}
		}
		public function login(){
			$this->load->view('index');
		}

		public function menu()
		{

			if (!$this->session->userdata('logged_in')) {
				$this->load->view('index');
			}
			$data['data']=$this->ma->getallMaquinas();
			$data['orden']=$this->ma->getOrden();
			$session_data = $this->session->userdata('logged_in');
			$data['Codigo'] = $session_data['Codigo'];
      $data['Nombre'] = $session_data['Nombre'];
			$data['Tipo'] = $session_data['Tipo'];

			$this->load->view('dashboard',$data);
		}


		 public function logout()
		{
			$this->session->unset_userdata('logged_in');
			session_destroy();
			redirect('main/login', 'refresh');
		}

		public function configEmail()
		{

			// if (!$this->session->userdata('logged_in')) {
			// 	redirect('main/login', 'refresh');
			// }

			$session_data = $this->session->userdata('logged_in');
			$data['personas']= $this->m->getallPersona();
			$data['Codigo'] = $session_data['Codigo'];
      $data['Nombre'] = $session_data['Nombre'];
			$data['Tipo'] = $session_data['Tipo'];
			$data['email'] = false;
			if ($this->m->getEmail()) {
				$data['email']= $this->m->getEmail();
			}

			$this->load->view('emailConfig',$data);
		}

		public function saveConfig()
		{
			// if (!$this->session->userdata('logged_in')) {
			// 	redirect('main/login', 'refresh');
			// }
			$this->form_validation->set_rules('protocol', 'protocol','required',array(
				'required' => 'Falta protocol'
			));
			$this->form_validation->set_rules('smtp_host', 'smtp_host','required',array(
				'required' => 'Falta host'
			));
			$this->form_validation->set_rules('smtp_port', 'smtp_port','required',array(
				'required' => 'Falta Puerto'
			));
			$this->form_validation->set_rules('smtp_user', 'smtp_user','required',array(
				'required' => 'Falta user'
			));

			$this->form_validation->set_rules('codigoEncargado', 'codigoEncargado','required',array(
							'required' => 'Falta correo'
			));
			$this->form_validation->set_rules('codigoCC', 'codigoCC','required',array(
						'required' => 'Falta correo'
			));


		  if ($this->form_validation->run()) {
				$data = $this->input->post();
				$data['id'] = 1;
				$data['mailtype'] = 'html';
				$data['charset'] = 'iso-8859-1';
				if ($this->m->saveEmail($data)) {

					$this->session->set_flashdata('success_msg', 'Correo Ingresado');
	      } else {
	        $this->session->set_flashdata('error_msg', 'Error DB');
	      }
				return redirect('main/configEmail');
			}

			$session_data = $this->session->userdata('logged_in');
			$data['Codigo'] = $session_data['Codigo'];
			$data['Nombre'] = $session_data['Nombre'];
			$data['Tipo'] = $session_data['Tipo'];
			$data['email'] = false;
			$this->load->view('emailConfig',$data);
		}

		public function editConfig()
		{

				if (!$this->session->userdata('logged_in')) {
					redirect('main/login', 'refresh');
				}
				$this->form_validation->set_rules('protocol', 'protocol','required',array(
					'required' => 'Falta protocol'
				));
				$this->form_validation->set_rules('smtp_host', 'smtp_host','required',array(
					'required' => 'Falta host'
				));
				$this->form_validation->set_rules('smtp_port', 'smtp_port','required',array(
					'required' => 'Falta Puerto'
				));
				$this->form_validation->set_rules('smtp_user', 'smtp_user','required',array(
					'required' => 'Falta user'
				));

					$id= 1;
			  if ($this->form_validation->run()) {
					$data = $this->input->post();
					$data['mailtype'] = 'html';
					$data['charset'] = 'iso-8859-1';
					if ($this->m->editEmail($id,$data)) {

						$this->session->set_flashdata('success_msg', 'Correo Actualizado');
		      } else {
		        $this->session->set_flashdata('error_msg', 'Error DB');
		      }
					return redirect('main/configEmail');
				}

				$session_data = $this->session->userdata('logged_in');
				$data['Codigo'] = $session_data['Codigo'];
				$data['Nombre'] = $session_data['Nombre'];
				$data['Tipo'] = $session_data['Tipo'];
				$data['email'] = false;

				$this->load->view('emailConfig',$data);
		}

		function deleteConfig()
			{
				// if (!$this->session->userdata('logged_in')) {
				// 	redirect('main/login', 'refresh');
				// }
				$id= 1;

				if ($this->m->deleteEmail($id)) {
					$this->session->set_flashdata('success_msg', 'Correo Eliminado');
				} else {
					$this->session->set_flashdata('error_msg', 'Error DB');
				}

				return redirect('main/configEmail');
			}

			public function get_personal()
			{
				$phoneData = $this->input->post('phoneData');
				  $output = '';
		        if(isset($phoneData) and !empty($phoneData)){
		            $records = $this->m->persona($phoneData);

		            foreach($records->result_array() as $row){

		             $output .= ' '.$row['Nombre'].' ';

		            }
		            echo $output;
		        }else {
		        	 echo $output .= 'ERROR 404 ';
		        }
		 		}
				public function otherActivities()
				{
					if (!$this->session->userdata('logged_in')) {
						redirect('main/login', 'refresh');
					}
					$session_data = $this->session->userdata('logged_in');
					$data['Codigo'] = $session_data['Codigo'];
					$data['Nombre'] = $session_data['Nombre'];
					$data['Tipo'] = $session_data['Tipo'];
					$data['orden']=$this->ma->getOrden();
					$data['tecnicos']= $this->report->getTecnicos();
					$this->load->view('otherActivities',$data);

					}
					public function saveActividades()
					{
						if (!$this->session->userdata('logged_in')) {
							redirect('main/login', 'refresh');
						}
						$this->form_validation->set_rules('actividad', 'actividad', 'required', array(
							'required' => 'Seleccione una actvidad'
						));
						$this->form_validation->set_rules('Comentario', 'Comentario', 'required', array(
							'required' => 'Agrege un comentario'
						));
						$this->form_validation->set_rules('horaInicio', 'horaInicio', 'required', array(
							'required' => 'Falta hora de Inicio'
						));
						$this->form_validation->set_rules('horaTermino', 'horaTermino', 'required', array(
							'required' => 'Falta hora de Termino'
						));

						if ($this->form_validation->run()) {
							$data = $this->input->post();
							$data['fecha'] = date('Y-m-d');
							$data['orden'] = $this->input->post('orden');
							if ($this->m->saveActividad($data)) {
								$this->session->set_flashdata('success_msg', 'Actividad  ingresada exitosamente');

							}else {
							$this->session->set_flashdata('error_msg', 'ERROR BD');
							}
							return redirect('main/otherActivities');
						}
						$session_data = $this->session->userdata('logged_in');
						$data['Codigo'] = $session_data['Codigo'];
						$data['Nombre'] = $session_data['Nombre'];
						$data['Tipo'] = $session_data['Tipo'];
						$data['orden']=$this->ma->getOrden();
						$data['tecnicos']= $this->report->getTecnicos();
						$this->load->view('otherActivities',$data);

						}

						public function listPersonal()
						{
							if (!$this->session->userdata('logged_in')) {
								redirect('main/login', 'refresh');
							}
							$session_data = $this->session->userdata('logged_in');
							$data['Codigo'] = $session_data['Codigo'];
							$data['Nombre'] = $session_data['Nombre'];
							$data['Tipo'] = $session_data['Tipo'];
							$data['personals'] = $this->m->getAllPersonal();
							$this->load->view('list-personal',$data);

						}

						public function changeUser()
						{
							if (!$this->session->userdata('logged_in')) {
								redirect('main/login', 'refresh');
							}
							$update['tipo_usuario'] =  $this->input->post('tipo_usuario');
							$id = $this->input->post('usuario_idd');
							if ($this->m->editUser($id,$update)) {
										$this->session->set_flashdata('success_msg', 'Usuario Actualizado');
							} else {
									$this->session->set_flashdata('error_msg', 'ERROR DB');
							}
								redirect('main/listPersonal', 'refresh');


						}



}
