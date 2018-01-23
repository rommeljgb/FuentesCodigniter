<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pago extends CI_Controller {
    
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('utilitarios_helper','url'));
        $this->load->model('Pago_model');
        $this->load->model('Motivo_pago_model');
        $this->load->model('Rueda_negocio_model');
         $this->load->model('Global_model');
        //´para gestionar sessiones
        //$this->load->library('session');       
    }   
 

    function save_pago(){            
             
            $DateTime = $this->Global_model->datetime();
            
            $Data = array(          
                "fecha_pago" => $DateTime->smalldatetime,
                "id_motivo_pago" =>  $this->input->post('id_motivo_pago'),
                "id_rueda_negocio" => $this->input->post('id_rueda_negocio'),
                "codigo_operacion" => $this->input->post('codigo_operacion'),
                "monto" => $this->input->post('monto'),
                "comentario" =>  $this->input->post('comentario'));
            
            $Existe =  $this->Pago_model->get_existe_pago($this->input->post('id_rueda_negocio'));
            
            if ($Existe==false){
                $resp = $this->Pago_model->insert_pago("PAGO",$Data);
            }else{
                $resp = $this->Pago_model->update_pago($Existe->id_pago, $Data);
            }
            
            /*// Seleccionamos el ID de la empresa
            $Idtable = $this->Pago_model->get_id_empresa($this->input->post('rut'));

            // Guardamos  en una session el PK_empresa para usar
            // al  grabar personas de la empresa
            $SessionUser = array(
                        'pkEmpresa'  => $Idtable                  
                    );
            $this->session->set_userdata($SessionUser);*/
            
            $Response = array();
            if ($resp){
               $Response['response'] = true;        
            }else{          
               $Response['response'] = false;          
            }
            
            echo json_encode($Response);
    }
    

    
    function getFrmPagos(){
        $Dat['RowMot'] = $this->Motivo_pago_model->get_motivo_list();
        $Dat['RowRue'] = $this->Rueda_negocio_model->get_datos_rueda($this->input->post('pk_tabla'));
        $Dat['RowPago'] = $this->Pago_model->get_existe_pago($this->input->post('pk_tabla'));
        $this->load->view('_frm_pago_rueda_negocio', $Dat);
    }
    
    
}