<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingPage extends CI_Controller
{

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


    public function index()
    {

        $data['data']   = $this->ma->getallMaquinas();
        $data['orden']  = $this->ma->getOrden();


        $this->load->view('landing-pageforall', $data);
    }

}
