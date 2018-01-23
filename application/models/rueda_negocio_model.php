<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Rueda_negocio_model extends CI_Model {
    public $dbname;
     
    public function __construct() {
        parent::__construct();
        
        $this->dbname = $this->load->database('dbname', TRUE);
        $this->load->library('session');
    }
    
    function get_datos_rueda($idrueda){
        
        $this->dbname->select(' R.[id_rueda_negocio] ,R.[nombre_evento] ,E.razon_social');        
        $this->dbname->from('[RUEDA_NEGOCIO] R');
        $this->dbname->join('EMPRESA E', 'E.id_empresa = R.id_empresa');
        $this->dbname->where('R.id_rueda_negocio', $idrueda);
        
        $query = $this->dbname->get(); 
         
         //----- Print SQL
            /*$SQL = $this->dbname->last_query(); 
            $file = fopen("sqls.txt", "w");
            fwrite($file, $SQL);            
            fclose($file);*/
        //---
        
        
        if ($query) {
            $rows = $query->result();
            
            return $rows;
        }

        return FALSE; 
    }
    
    function get_lista_ruedaevent($idEmpresa){
        
        $IdPersona = $this->session->userdata('id_persona');
        
        $this->dbname->select(' R.[id_rueda_negocio]
                                ,R.[nombre_evento]
                                ,R.[comentario]
                                ,R.[direccion]
                                ,R.[imagen_logo]
                                ,R.[fecha_inicio]
                                ,R.[fecha_fin]
                                ,R.[hora_inicio]
                                ,R.[fecha_reg]
                                ,R.[costo]
                                ,R.[estado]
                                ,E.[id_empresa]
                                ,E.razon_social');
        
        $this->dbname->from('[RUEDA_NEGOCIO] R');
        $this->dbname->join('EMPRESA E', 'E.id_empresa = R.id_empresa');
        $this->dbname->join('PERSONA P', 'P.id_persona= E.id_persona');  
        $this->dbname->where('P.id_persona', $IdPersona);
        $query = $this->dbname->get(); 
         
         //----- Print SQL
            $SQL = $this->dbname->last_query(); 
            $file = fopen("sqls.txt", "w");
            fwrite($file, $SQL);            
            fclose($file);
        //---
        
        
        if ($query) {
            $rows = $query->result();
            
            return $rows;
        }

        return FALSE; 
    }   
    
    //----
    function get_lista_rueda_event_activo(){
        
        $IdPersona = $this->session->userdata('id_persona');
        
        $this->dbname->select(' R.[id_rueda_negocio]
                                ,R.[nombre_evento]
                                ,R.[comentario]
                                ,R.[direccion]
                                ,R.[imagen_logo]
                                ,R.[fecha_inicio]
                                ,R.[fecha_fin]
                                ,R.[hora_inicio]
                                ,R.[fecha_reg]
                                ,R.[costo]
                                ,R.[estado]
                                ,E.[id_empresa]
                                ,E.razon_social');
        
        $this->dbname->from('[RUEDA_NEGOCIO] R');
        $this->dbname->join('EMPRESA E', 'E.id_empresa = R.id_empresa');
        $this->dbname->join('PERSONA P', 'P.id_persona= E.id_persona');  
        $this->dbname->where('P.id_persona', $IdPersona);
        $this->dbname->where('R.estado','1');
        $query = $this->dbname->get(); 
         
         //----- Print SQL
            $SQL = $this->dbname->last_query(); 
            $file = fopen("sqls.txt", "w");
            fwrite($file, $SQL);            
            fclose($file);
        //---
        
        
        if ($query) {
            $rows = $query->result();
            
            return $rows;
        }

        return FALSE; 
    }
    
    // insertamos nuevas empresas
    function insert_rueda($tabla, $data = array()) {       

        $query = $this->dbname->insert($tabla, $data);       
    
        
        if ($query) {
            return TRUE;
        }

        return FALSE;
    }   
    
}
