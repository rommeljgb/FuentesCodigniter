<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Zosimo OLiva Valle
 */
class Equipo_model extends CI_Model {
    public $dbname;
    public function __construct() {
        parent::__construct();
         $this->$dbname = $this->load->database('dbname', TRUE);
    }

    function insert_equipos($tabla, $data = array()) {       

        $query = $this->mi_db->insert($tabla, $data);
        
        //echo $this->db->last_query();
         //----
        /*$Sqls = $this->mi_db->last_query();
        $file = fopen("sqls.txt", "w");
            fwrite($file, $Sqls);            
            fclose($file);*/
        //----
        
        if ($query) {
            return TRUE;
        }

        return FALSE;
    }
    
    function updates_equipoG($tabla, $id ,$data = array()) {
        
        $this->mi_db->where('id_equipo', $id);
        $query = $this->mi_db->update($tabla, $data); 
       
        //----
        $Sqls = $this->mi_db->last_query();
        $file = fopen("sqls.txt", "w");
            fwrite($file, $Sqls);            
            fclose($file);
        //----
            
        if ($query) {
            return true;
        }

        return FALSE;
    }
    
    function listar_equipo(){
        
        $cadena="";
        $this->mi_db->select('id_equipo,
                             codigo_equipo,
                             id_cate category,
                             e.id_familia famy,
                             f.descripcion_familia,
                             p.descripcion,
                             e.id_propietario property,
                             mr.descripcion_marca,
                             e.id_modelos models,
                             md.descripcion_modelos,
                             descripcion_equipo,
                             e.estado estado_e,
                             horometro_a,
                             horometro_b,
                             tc.descripcion,
                             e.id_tipocombustible combusti,
                             ratio_tecni_min,
                             ratio_tecni_max,
                             numero_serie,
                             numero_placa,
                             years_fabricacion');
        
        $this->mi_db->from('tbl_equipo e');
        $this->mi_db->join('tbl_modelos md', 'e.id_modelos = md.id_modelos');     
        $this->mi_db->join('tbl_marca mr', 'md.id_marca = mr.id_marca');
        $this->mi_db->join('tbl_familia f','e.id_familia = f.id_familia');
        $this->mi_db->join('tbl_propietario p', 'e.id_propietario = p.id_propietario');
        $this->mi_db->join('tbl_tipocombustible tc', 'e.id_tipocombustible = tc.id_tipocombustible');
        
       // $this->mi_db->where('flag', '1');
        $query = $this->mi_db->get();        //--
    
       //----- Print SQL
            $SQL = $this->mi_db->last_query(); 
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
    
    function consulta_form_equipo($idequip){
       
        $this->mi_db->select('e.id_equipo,
                              codigo_equipo,
                             id_cate category,
                             id_familia famy,
                             id_propietario property,
                             e.id_modelos models,
                             md.descripcion_modelos,
                             mr.id_marca,
                             mr.descripcion_marca,
                             descripcion_equipo,
                             e.estado,
                             horometro_a,
                             horometro_b,
                             id_tipocombustible combusti,
                             ratio_tecni_min,
                             ratio_tecni_max,
                             numero_serie,
                             numero_placa,
                             years_fabricacion');
                      
        $this->mi_db->from('tbl_equipo e');
        $this->mi_db->join('tbl_modelos md', 'e.id_modelos = md.id_modelos');     
        $this->mi_db->join('tbl_marca mr', 'md.id_marca = mr.id_marca'); 
        
        $this->mi_db->where('e.id_equipo', $idequip);
        $query = $this->mi_db->get();        
             
        //---
            /*$SQL = $this->mi_db->last_query(); 
            $file = fopen("sqls.txt", "w");
            fwrite($file, $SQL);            
            fclose($file);*/
        //---
        if ($query) {
            $respuesta = $query->row();
            return $respuesta;
        }

        return FALSE;
        
    }
    
    function get_PkMaxTabla(){
 
        $SQL = 'select max(id_equipo) as pktabla from tbl_equipo';
        $query = $this->mi_db->query($SQL);
        
        if ($query) {
            foreach ($query->result() as $row){
                if (is_null($row->pktabla)){$rows = 1;}else{$rows = $row->pktabla + 1;};
            }
            
            return $rows;
        }

        return FALSE;
        
    }
    
    function consulta_modelo_equipo($id){       
       
        
        $Sql ="select * from tbl_equipo where id_modelos = '".$id."'";
        $qry = $this->mi_db->query($Sql);        
        //---          
            /*$file = fopen("sqls.txt", "w");
            fwrite($file, $Sql);            
            fclose($file);*/
        //---
        if ($qry){
            $respuesta = $qry->num_rows();
           
            return $respuesta;
        }

        return FALSE;
        
    }
    
    function consulta_categoria_equipo($id){
        
        $Sql ="select * from tbl_equipo where id_cate = '".$id."'";
        $qry = $this->mi_db->query($Sql);        
        //---          
            /*$file = fopen("sqls.txt", "w");
            fwrite($file, $Sql);            
            fclose($file);*/
        //---
        if ($qry){
            $respuesta = $qry->num_rows();
           
            return $respuesta;
        }

        return FALSE;
        
    }
    
    function Get_CodigoDecrip($idequip){
       
        $this->mi_db->select('codigo_equipo,                             
                             descripcion_equipo');
                      
        $this->mi_db->from('tbl_equipo e');   
        
        $this->mi_db->where('e.id_equipo', $idequip);
        $query = $this->mi_db->get();        
             
        //---
            /*$SQL = $this->mi_db->last_query(); 
            $file = fopen("sqls.txt", "w");
            fwrite($file, $SQL);            
            fclose($file);*/
        //---
        if ($query) {
            $respuesta = $query->row();
            return $respuesta;
        }

        return FALSE;
        
    }
}
