<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Persona_model extends CI_Model {
    public $dbname;
     
    public function __construct() {
        parent::__construct();
        $this->dbname = $this->load->database('dbname', TRUE);
        //$this->load->database();
    }  
 
    
    // insertamos nuevas personas de la empresa
    function update_persona($id, $data = array()) {
        
        $this->db->where('id_persona', $id);
        $query = $this->db->update('PERSONA', $data);  
        
        if ($query) {
            return true;
        }

        return false;
    }
    
    // update
    function insert_persona($tabla, $data = array()) {
        $query = $this->dbname->insert($tabla, $data);
        
        if ($query) {
            return true;
        }

        return false;
    }
    
    // actualizamos el estado
    public function update_estado($Id) {
        $query = $this->dbname->query("UPDATE  PERSONA SET estado = 1 WHERE id_persona='".$Id."'");        
        if ($query) {
            //$row = $query->row();
            //$Id = $row->id_persona;
            
            return true;
        }

        return FALSE;      
    }
    
    public function Get_Correo($idMd5) {
        $id = 0;
        $query = $this->dbname->query("EXEC dbo.sp_valid_person_url '".$idMd5."'");        
        if ($query->num_rows() > 0) {
            $row   = $query->row();
            $Email = $row->email;
            $id    = $row->id_persona;
            
            return $id;
        }

        return FALSE;  
    }
    
    public function get_id_persona($pkempresa) {
        $query = $this->dbname->query("SELECT id_persona FROM persona WHERE  id_empresa ='".$pkempresa."'");        
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $Id = $row->id_persona;
            
            return $Id;
        }

        return FALSE;      
    }
    
    public function Valid_Id_Correo($emails) {
        $query = $this->dbname->query("SELECT id_persona FROM persona WHERE  email ='".$emails."'");        
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $Id = $row->id_persona;
            
            return $Id;
        }

        return FALSE;      
    }
    
    public function Query_Person($SQLs) {
        $query = $this->dbname->query($SQLs);        
        if ($query->num_rows() > 0) {
            $row = $query->row();
            //$Id = $row->id_persona;
            
            return $row;
        }

        return FALSE;      
    }
    
}
