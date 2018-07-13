<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maquina extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelMain', 'm');
        $this->load->model('ModelMantencion', 'ma');
        $this->load->model('ModelReportes', 'report');
        $this->load->model('ModelMaquina', 'maquina');
    }

    public function index(){
      if (!$this->session->userdata('logged_in')) {
          redirect('main/login', 'refresh');
      }


      $session_data   = $this->session->userdata('logged_in');
      $data['Codigo'] = $session_data['Codigo'];
      $data['Nombre'] = $session_data['Nombre'];
      $data['Tipo']   = $session_data['Tipo'];

      $data['maquinas'] = $this->maquina->getallMaquinas();
      $data['areas'] = $this->maquina->getallArea();
    //  print_r($data);

      $this->load->view('maquina-page', $data);
    }


}
