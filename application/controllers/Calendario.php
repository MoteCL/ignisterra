<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendario extends CI_Controller {

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
		$this->load->model('ModelCalendario', 'calendario');
		//$this->load->model('ModelAdempiere', 'adempiere');
 	}

	/**
	 *
	 * Index -> calendario.php
	 *
	 **/
	public function index()
	{
		// $parametros="host=192.168.0.102 user=prg password=Itsa2015 dbname=erp port=5432";
		// $conectar=pg_connect($parametros) OR DIE("Fallo en la Conexion");
		//
		// $sql="SELECT * FROM adempiere.a_ref_list  order by value asc";
		// $resultado = pg_query($sql) or die("Error en $sql:" .mysql_error());
		// $data['data'] = $resultado;

		//$data['maquinas'] = $this->adempiere->getMaquina();
		$data['maquinas'] = $this->ma->getallMaquinas();

		$data['calendarios'] = $this->calendario->getCalendario();
		$session_data = $this->session->userdata('logged_in');
		$data['Codigo'] = $session_data['Codigo'];
		$data['Nombre'] = $session_data['Nombre'];


		$this->load->view('calendario',$data);
	}
	/**
	 * Guardar Calendarizacion
	 * POST
	 *
	 **/
	public function saveCalendarizacion()
	{

		$this->form_validation->set_rules('fecha', 'fecha','required',array(
			'required' => 'Seleccione una fecha de Inicio'
		));
		$this->form_validation->set_rules('periodo', 'periodo','required',array(
			'required' => 'Seleccione un periodo'
		));
		$this->form_validation->set_rules('trabajo', 'trabajo','required',array(
			'required' => 'Seleccione un trabajo'
		));
		$this->form_validation->set_rules('detalle', 'detalle','required',array(
			'required' => 'Agrege un breve detalle'
		));
		  if ($this->form_validation->run()) {

				switch ($this->input-> post('periodo')) {
	    case 'Anual':
	        $fecha = $this->input-> post('fecha');
	        $nuevafecha = strtotime('+1 year', strtotime($fecha));
	        $data['fechaVence'] = date('Y-m-j', $nuevafecha);
	        break;
	    case 'Diario':
	        $fecha = $this->input-> post('fecha');
	        $nuevafecha = strtotime('+1 day', strtotime($fecha));
	        $data['fechaVence'] = date('Y-m-j', $nuevafecha);
	        break;
	    case 'Mensual':
	        $fecha = $this->input-> post('fecha');
	        $nuevafecha = strtotime('+1 month', strtotime($fecha));
	        $data['fechaVence'] = date('Y-m-j', $nuevafecha);
	        break;
	    case 'Quincenal':
	        $fecha = $this->input-> post('fecha');
	        $nuevafecha = strtotime('+15 day', strtotime($fecha));
	        $data['fechaVence'] = date('Y-m-j', $nuevafecha);
	        break;
	    case 'Semanal':
	        $fecha = $this->input-> post('fecha');
	        $nuevafecha = strtotime('+7 day', strtotime($fecha));
	        $data['fechaVence'] = date('Y-m-j', $nuevafecha);
	        break;
	    case 'Semestral':
	        $fecha = $this->input-> post('fecha');
	        $nuevafecha = strtotime('+3 month', strtotime($fecha));
	        $data['fechaVence'] = date('Y-m-j', $nuevafecha);
	        break;
	    case 'Trimestral':
	        $fecha = $this->input-> post('fecha');
	        $nuevafecha = strtotime('+6 month', strtotime($fecha));
	        $data['fechaVence'] = date('Y-m-j', $nuevafecha);
	        break;

	    default:
	        // code...
	        break;
	}
					$data['maquina'] = $this->input->post('maquina');
					$data['fecha'] = $this->input->post('fecha');
					$data['periodo'] = $this->input->post('periodo');
					$data['trabajo'] = $this->input->post('trabajo');
					$data['subtrabajo'] = $this->input->post('subtrabajo');
					$data['detalle'] = $this->input->post('detalle');
					$data['fecha']=  $this->input->post('fecha');

					$result= $this->calendario->insertData($data);
					if ($result) {
						$this->session->set_flashdata('success_msg', 'Calendarizacion exitosa');
					}else {
						$this->session->set_flashdata('error_msg', 'Error DB');
					}
					return redirect('calendario/index');

		}
		$data['calendarios'] = $this->calendario->getCalendario();
		$data['maquinas'] = $this->ma->getallMaquinas();
		$session_data = $this->session->userdata('logged_in');
		$data['Codigo'] = $session_data['Codigo'];
		$data['Nombre'] = $session_data['Nombre'];

		$this->load->view('calendario',$data);
	}




}
