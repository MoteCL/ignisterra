<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {

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

		//$this->load->model('ModelAdempiere', 'adempiere');
 	}

	/**
	 *
	 * Index -> calendario.php
	 *
	 **/
	public function index()
	{

		$session_data = $this->session->userdata('logged_in');
		$data['Codigo'] = $session_data['Codigo'];
		$data['Nombre'] = $session_data['Nombre'];
		$this->load->view('reports',$data);
	}

	public function usoMaquina()
	{

		$session_data = $this->session->userdata('logged_in');
		$data['Codigo'] = $session_data['Codigo'];
		$data['Nombre'] = $session_data['Nombre'];
		$this->load->view('report/usoMaquina',$data);
	}

	public function getdata(){
		$result = $this->report->getIngresos();
		//print_r($result);
		echo json_encode($result);
	}

	public function Mes()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['Codigo'] = $session_data['Codigo'];
		$data['Nombre'] = $session_data['Nombre'];
		$this->load->view('report/entreUnMes',$data);
	}


	public function getEntreUnMes(){
		$result = $this->report->getBETWEEN();
		//print_r($result);
		echo json_encode($result);
	}

	public function verEstado()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['Codigo'] = $session_data['Codigo'];
		$data['Nombre'] = $session_data['Nombre'];
		$this->load->view('report/status',$data);
	}
	public function getStatus(){
		$result = $this->report->getEstados();
		//print_r($result);
		echo json_encode($result);
	}


}
