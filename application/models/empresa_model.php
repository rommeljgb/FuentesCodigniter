<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Empresa_model extends CI_Model {
    public $dbname;
     
    public function __construct() {
        parent::__construct();
         $this->dbname = $this->load->database('dbname', TRUE);
        //$this->load->database();
    }
    
    public function lista_empresa() {
        $cadena="";
        $this->dbname->select('*');
        
        $this->dbname->from('EMPRESA');
        
        $query = $this->dbname->get();
    
       //----- Print SQL
            $SQL = $this->dbname->last_query(); 
            $file = fopen("sqls.txt", "w");
            fwrite($file, $SQL);            
            fclose($file);
        //---
        
        /*if ($query) {
            $rows = $query->result();
            return $rows;
        }*/

        return $SQL;
    }
    
    function get_empresa_list($idPersona){
        $cadena="";
        $this->dbname->select('[id_empresa]
                                ,[rut]
                                ,[razon_social]
                                ,[nombre_fantasia]
                                ,[direccion_legal]
                                ,[telefono]
                                ,[website]
                                ,[redsocial]
                                ,[email]
                                ,[imagenlogo]
                                ,[direc_activ_comercial]
                                ,[giro_comercial]
                                ,[perfil_empresa]
                                ,[id_ubigeo]
                                ,e.id_rubro,
                                ,r.nombre_rubro
                                ,[id_persona]');
        
        $this->dbname->from('EMPRESA e');
        $this->dbname->join('RUBRO r', 'e.id_rubro = r.id_rubro');
        $this->dbname->where('e.id_persona', $idPersona);
        $query = $this->dbname->get(); 
     
        
        if ($query) {
            $rows = $query->result();
            return $rows;
        }

        return FALSE; 
    }   
    
    // insertamos nuevas empresas
    function insert_empresa($tabla, $data = array()) {       

        $query = $this->dbname->insert($tabla, $data);       
    
        
        if ($query) {
            return TRUE;
        }

        return FALSE;
    }
    
    public function get_id_empresa($rut) {       
  
        $query = $this->dbname->query("SELECT id_empresa FROM EMPRESA WHERE  rut ='".$rut."'");        
        if ($query) {
            $row = $query->row();
            $Id = $row->id_empresa;
            
            return $Id;
        }

        return false;      
    }
    
    public function get_rut($rut) {       
  
        $this->dbname->select('id_empresa');        
        $this->dbname->from('EMPRESA');
        $this->dbname->where('rut',$rut);
        
        $query = $this->dbname->get();        
        
        $rowcount = $query->num_rows();
        
        
        return $rowcount;
               
    }
}
