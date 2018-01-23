<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Motivo_pago extends CI_Controller {
    
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('utilitarios_helper','url'));
        $this->load->model('Motivo_pago_model');      
        //´para gestionar sessiones
        //$this->load->library('session');
        /*$this->load->model('Global_model');*/
    } 
    
    
    
    /*function LoadComboEmpresa(){
       // consulta           
        $Data['ows'] = $this->Empresa_model->get_motivo_list();
        
        //eviamos a la vista los datos
        $this->load->view('cbo_empresa',$Data); 
    } */   
}