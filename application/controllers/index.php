<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {
    
    //const C_TABLA = 'tbl_equipo';
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('utilitarios_helper','url'));
        $this->load->model('Empresa_model');        
        /*$this->load->model('Global_model');*/
    }
    

    
    function index(){
        $this->load->view('header');
        $this->load->view('conten_home_default');
        $this->load->view('footer');
    }
    
    // carga el formulario de registro empresa
    function load_view_empresa(){
         $this->load->view('header');
		$this->load->view('_frm_empresa_registra');
        $this->load->view('footer');
    }
}