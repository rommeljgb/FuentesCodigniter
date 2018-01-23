<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rueda_negocio extends CI_Controller {
    
      public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('utilitarios_helper','url'));
        $this->load->model('Rueda_negocio_model');
        $this->load->model('Global_model');
    }
    
    function getFrmRueda(){
       $this->load->view('_frm_registra_rueda_negocio');
    }
    
    function getgrilla(){
        $Data['rows'] = $this->Rueda_negocio_model->get_lista_ruedaevent('');      
        $this->load->view('grid_rueda_evento',$Data); 
    }
    
    function getGridEventoReunion(){
        $Data['rows'] = $this->Rueda_negocio_model->get_lista_rueda_event_activo();      
        $this->load->view('grid_lista_rueda_evento_reunion',$Data);
    }
    function save_rueda_negocio(){
      
        $fecha_inicio = formato_fecha($this->input->post('fecha_inicio'),"D","-");
        $fecha_fin = formato_fecha($this->input->post('fecha_fin'),"D","-");
        
        $fecha = $this->Global_model->datetime();
        
        // grabamos la empresa
        $Data = array(          
            "nombre_evento" =>  $this->input->post('nombre_evento'),
            "comentario" => $this->input->post('comentario'),
            "direccion" => $this->input->post('direccion'),
            "imagen_logo" => $this->input->post('imagen_logo'),
            "fecha_inicio" =>  $fecha_inicio,
            "fecha_fin" => $fecha_fin,
            "hora_inicio" => $this->input->post('hora_inicio'),
            "fecha_reg" => $fecha->smalldatetime,        
            "costo" => $this->input->post('costo'),
            "estado" => 0,
            "id_empresa" => $this->input->post('select_empresa')               
        );

        $resp = $this->Rueda_negocio_model->insert_rueda("RUEDA_NEGOCIO",$Data);

        if ($resp){
           echo "true";        
        }else{          
           echo "0";          
        }       
    }

}