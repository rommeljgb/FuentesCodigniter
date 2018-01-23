<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Equipo extends CI_Controller {
    
    const C_TABLA = 'tbl_equipo';
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('utilitarios_helper','url'));
        /*$this->load->model('Equipo_model');
        $this->load->model('Global_model');*/
    }
    

    
    function lista(){
        
        $this->load->view('header');
		$this->load->view('bodyini');
        $this->load->view('footer');
	
    }
    
   
}