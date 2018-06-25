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
		$data['Password'] = $session_data['Password'];
		$this->load->view('dashboard',$data);
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

			redirect('main/menu', 'refresh');
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
			$this->form_validation->set_rules('smtp_pass', 'smtp_pass','required',array(
				'required' => 'Falta password'
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

			$this->load->view('emailConfig',$data);
		}

		public function editConfig()
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
				$this->form_validation->set_rules('smtp_pass', 'smtp_pass','required',array(
					'required' => 'Falta password'
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



}
