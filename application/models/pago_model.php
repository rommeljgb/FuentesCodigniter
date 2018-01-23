<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pago_model extends CI_Model {
    public $dbname;
     
    public function __construct() {
        parent::__construct();
         $this->dbname = $this->load->database('dbname', TRUE);
        //$this->load->database();
    }
    
    // gravamos los pagos por creacion de rueda de negocios
    function insert_pago($tabla, $data = array()) {       

        $query = $this->dbname->insert($tabla, $data);       
    
        
        if ($query) {
            return TRUE;
        }

        return FALSE;
    }
    
    // insertamos nuevas personas de la empresa
    function update_pago($id, $data = array()) {
        
        $this->db->where('id_pago', $id);
        $query = $this->db->update('PAGO', $data);  
        
        if ($query) {
            return true;
        }

        return false;
    }
    
    public function get_existe_pago($PkRueda) {
        $query = $this->dbname->query("SELECT [id_pago],
                                     [fecha_pago],
                                     [id_motivo_pago],
                                     [id_rueda_negocio],
                                     [codigo_operacion],
                                     [monto],
                                     [comentario] 
                                    FROM PAGO WHERE id_rueda_negocio='".$PkRueda."'");
        
                     //----- Print SQL
            /*$SQL = $this->dbname->last_query(); 
            $file = fopen("sqls.txt", "w");
            fwrite($file, $SQL);            
            fclose($file);*/
        //---
            
        if ($query->num_rows() > 0) {
            //$row = $query->row();
            $Id = $query->row();
            
            return $Id;
        }

        return FALSE;      
    }
    
}
