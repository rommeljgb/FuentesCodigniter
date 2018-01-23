<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuario_model extends CI_Model {
    public $dbname;
     
    public function __construct() {
        parent::__construct();
         $this->dbname = $this->load->database('dbname', TRUE);
        //$this->load->database();
    }   

    
    // insertamos nuevo usuario del persona
    function insert_usuario($tabla, $data = array()) {       

        $query = $this->dbname->insert($tabla, $data);       
    
        
        if ($query) {
            return TRUE;
        }

        return FALSE;
    }
    
    public function login_user($user, $password) {       
  
        $this->dbname->select('p.id_persona, p.nombres, p.email');        
        $this->dbname->from('PERSONA p');
        $this->dbname->where('p.email',$user);
        $this->dbname->where('p.password',$password);
        
        $query = $this->dbname->get();
        
        //$Sqls = $this->dbname->last_query();
        //echo $Sqls; 
        //$rowcount = $query->num_rows();
        if ($query){ 
            $row = $query->row();       
            return $row;
        }
        
        return false;
    }
}
