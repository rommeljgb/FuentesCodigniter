<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Reunion_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        
        $this->dbname = $this->load->database('dbname', TRUE);
        $this->load->library('session');
    }
    
    function get_lista_reuniones($idRueda){
        
        //$IdPersona = $this->session->userdata('id_persona');        
        $this->dbname->select(' [id_reunion]
                                ,[nombre_ubicacion]
                                ,[capacidad]
                                ,[nombre_tema]
                                ,[expocitores]
                                ,[estudio_especializacion]
                                ,[fecha_reunion]
                                ,[hora_inicio]
                                ,[hora_final]
                                ,[fecha_reg]
                                ,[id_rueda_negocio]');
        
        $this->dbname->from('[REUNION] R');
        //$this->dbname->join('EMPRESA E', 'E.id_empresa = R.id_empresa');
        //$this->dbname->join('PERSONA P', 'P.id_persona= E.id_persona');  
        $this->dbname->where('R.id_rueda_negocio', $idRueda);
        
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
    
      function insert($tabla, $data = array()) {
        $query = $this->dbname->insert($tabla, $data);
        
        if ($query) {
            return true;
        }

        return false;
    }
}
