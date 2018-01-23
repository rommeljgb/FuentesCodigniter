<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Motivo_pago_model extends CI_Model {
    public $dbname;
     
    public function __construct() {
        parent::__construct();
         $this->dbname = $this->load->database('dbname', TRUE);
        //$this->load->database();
    }
    
    
    
    function get_motivo_list(){
        $cadena="";
        $this->dbname->select('[id_motivo_pago]
                               ,[nombre_pago]');
        
        $this->dbname->from('MOTIVO_PAGO m');      
        $query = $this->dbname->get(); 
     
        
        if ($query) {
            $rows = $query->result();
            return $rows;
        }

        return FALSE; 
    }
}
