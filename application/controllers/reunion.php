<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reunion extends CI_Controller {
    
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('utilitarios_helper','url'));
        $this->load->model('Reunion_model');      
        $this->load->model('Global_model');
        //´para gestionar sessiones
        //$this->load->library('session');
        
    }
    
    function getGridReunion(){
       $id_rueda = $this->input->post('id_rueda');
       
       $Data['rows'] = $this->Reunion_model->get_lista_reuniones($id_rueda);
       $Data['id_rueda'] = $id_rueda;
       $this->load->view('_grid_lista_temas_reunion', $Data);       
    }
    
    function getGridReunionAsistido(){
       //$id_rueda = $this->input->post('id_rueda');
       
       //$Data['rows'] = $this->Reunion_model->get_lista_reuniones($id_rueda);
       //$Data['id_rueda'] = $id_rueda;
       $this->load->view('grid_list_persona_asiste_evento_reunion');       
    }
    
    function getfrmReunion(){
      // $id_rueda = $this->input->post('pk_tabla');      
      $Dat['id_rueda'] = $this->input->post('pk_tabla');
       $this->load->view('_frm_reunion_tema',$Dat);       
    }
    
    function guardar_reunion_temas(){
        $FechaReu = formato_fecha($this->input->post('fecha_reunion'),"D","-");
         $DatesTime =$this->Global_model->datetime();
        $data_rep=array(          
                    "id_tipo_zona" => $this->input->post('id_tipo_zona'),
                    "nombre_ubicacion" => $this->input->post('nombre_ubicacion'),
                    "capacidad"=> $this->input->post('capacidad'), 
                    "nombre_tema" => $this->input->post('nombre_tema'),
                    "expocitores" => $this->input->post('expocitores'),	
                    "estudio_especializacion" => $this->input->post('estudio_especializacion'), 
                    "fecha_reunion" => $FechaReu,
                    "hora_inicio" => $this->input->post('hora_inicio'),
                    "hora_final"=>$this->input->post('hora_final'),
                    "fecha_reg"=>$DatesTime->smalldatetime,
                    "id_rueda_negocio" => $this->input->post('idRuedas') 
                    );        
      
        // insertamos datos en la tabla persona
        $resp_rep = $this->Reunion_model->insert("REUNION",$data_rep);
        $Response = array();
        if ($resp_rep){
            // eliminamos session pkEmpresa  
            //$this->session->unset_userdata('pkEmpresa');
            
             $Response['response'] =  true;            
        }else{
             $Response['response'] =  false;
        }
        
        echo json_encode($Response);
    }
}