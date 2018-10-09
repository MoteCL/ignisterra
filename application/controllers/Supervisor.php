<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supervisor extends CI_Controller
{


  function __construct()
  {
      parent::__construct();

      $this->load->model('ModelMantencion', 'ma');
      $this->load->model('ModelMain', 'main');
      $this->load->model('ModelSeguimiento', 'seguimiento');
      $this->load->model('ModelReportes', 'report');
      $this->load->model('ModelSupervisor', 'supervisor');

  }
  public function verMantencion($id)
  {
      if (!$this->session->userdata('logged_in')) {
          redirect('main/login', 'refresh');
      }
      $data['data']         = $this->ma->getMantencionbyId($id);
      $session_data         = $this->session->userdata('logged_in');
      $data['detalles'] = $this->supervisor->getDetalle($id);
      $data['Codigo']       = $session_data['Codigo'];
      $data['Nombre']       = $session_data['Nombre'];
      $data['Tipo']         = $session_data['Tipo'];

      $this->load->view('verManSupervisor', $data);
  }
  public function verMantencion2($id)
  {
      if (!$this->session->userdata('logged_in')) {
          redirect('main/login', 'refresh');
      }
      $data['data']         = $this->ma->getMantencionbyId($id);
      $session_data         = $this->session->userdata('logged_in');
      $data['detalles'] = $this->supervisor->getDetalle($id);
      $data['Codigo']       = $session_data['Codigo'];
      $data['Nombre']       = $session_data['Nombre'];
      $data['Tipo']         = $session_data['Tipo'];

      $this->load->view('verManSupervisor-2', $data);
  }

  public function historialMaquina()
  {
      if (!$this->session->userdata('logged_in')) {
          redirect('main/login', 'refresh');
      }
      $session_data         = $this->session->userdata('logged_in');
      if ($session_data['Nombre']=="ARAUS OSORIO NIBALDO ALEXIS") {
        
        $data['Codigo']    = $session_data['Codigo'];
        $data['Nombre']    = $session_data['Nombre'];
        $data['Tipo']      = $session_data['Tipo'];
        $area              = $session_data['Area'];
        $data['maquinas']  = $this->supervisor->getMaquinabyAreas($area);

        $this->load->view('report/maquina-supervisor', $data);
      } else {
        $session_data         = $this->session->userdata('logged_in');

        $data['Codigo']    = $session_data['Codigo'];
        $data['Nombre']    = $session_data['Nombre'];
        $data['Tipo']      = $session_data['Tipo'];
        $area              = $session_data['Area'];
        $data['maquinas']  = $this->supervisor->getMaquinabyArea($area);

        $this->load->view('report/maquina-supervisor', $data);
      }


  }

  public function buscarHistorial(){
    if (!$this->session->userdata('logged_in')) {
      redirect('main/login', 'refresh');
    }
    $session_data = $this->session->userdata('logged_in');
    $data['Codigo'] = $session_data['Codigo'];
    $data['Nombre'] = $session_data['Nombre'];
    $data['Tipo'] = $session_data['Tipo'];
    $area              = $session_data['Area'];

    $this->form_validation->set_rules('maquina', 'maquina','required|trim',array(
      'required' => 'Seleccione una maquina'
    ));
    $this->form_validation->set_rules('fechadesde', 'fechadesde','required',array(
      'required' => 'Seleccione una fecha'
    ));
    $this->form_validation->set_rules('fechahasta', 'fechahasta','required',array(
      'required' => 'Seleccione una fecha'
    ));
    if ($this->form_validation->run()) {

      $desde =$this->input->post('fechadesde');
      $hasta =$this->input->post('fechahasta');
      $maquina =  $this->input->post('maquina');
      $data['desde'] = $desde;
      $data['hasta'] = $hasta;
      $data['maquina'] = $maquina;
      $data['results']= $this->report->getHistorial($desde,$hasta,$maquina);
      $data['seguimientos']= $this->report->getSeguimientoJoin($desde,$hasta);
      $data['tecnicos']= $this->report->getTecnicosSeguimiento();
      //print_r($data);

      $this->load->view('report/maquina-result',$data);
    }else {

      $data['maquinas']  = $this->supervisor->getMaquinabyArea($area);
      $this->load->view('report/maquina-supervisor', $data);
    }


  }




}
