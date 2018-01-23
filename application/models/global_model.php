<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 */
class Global_model extends CI_Model {

    var $db_averias;

    public function __construct() {
        parent::__construct();
       
        $this->dbname = $this->load->database('dbname', TRUE);
    }
    
    // Obtiene la fecha del la Base de Datos en Varios formatos 
    function datetime() {
        /*$query = $this->dbname->query(" SELECT CAST(SYSDATETIME() AS time(7)) AS 'time' 
                                    ,CAST(SYSDATETIME() AS date) AS 'date' 
                                    ,CAST(SYSDATETIME() AS smalldatetime) AS 'smalldatetime' 
                                    ,CAST(SYSDATETIME() AS datetime) AS 'datetime' 
                                    ,CAST(SYSDATETIME() AS datetime2(7)) AS 'datetime2'
                                    ,CAST(SYSDATETIME() AS datetimeoffset(7)) AS 'datetimeoffset'");
         $row   = $query->row();
         //$Email = $row->smalldatetime;*/
        $row = "";
         return $row;
    }
    
    /*function num_rows($tabla) {
        $consulta = $this->db_averias->get($tabla);
        return $consulta->num_rows();
    }

    function get($tabla) {
        $query = $this->db_averias->get($tabla);
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function get_limit($tabla, $limit) {
        $query = $this->db_averias->get($tabla, $limit);
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function get_where($tabla = '', $array = array(), $cant = 0) {
        if ($cant > 0) {
            $this->db_averias->limit($cant);
        }
        $query = $this->db_averias->get_where($tabla, $array);

        if ($query->num_rows > 0) {
            return $cant == 1 ? $query->row() : $query->result();
        } else {
            return FALSE;
        }
    }

    function get_where_order($tabla = '', $array = array(), $cant = 0, $order) {
        if ($cant > 0) {
            $this->db_averias->limit($cant);
        }
        $this->db_averias->order_by("{$order}");
        $query = $this->db_averias->get_where($tabla, $array);

        if ($query->num_rows > 0) {
            return $cant == 1 ? $query->row() : $query->result();
        } else {
            return FALSE;
        }
    }

    function get_where_cols($cols = array(), $tabla = '', $where = array(), $cant = 0) {
        if ($cant > 0) {
            $this->db_averias->limit($cant);
        }
        $this->db_averias->select($cols);
        $query = $this->db_averias->get_where($tabla, $where);

        if ($query->num_rows > 0) {
            // echo $this->db_averias->last_query();
            return $cant == 1 ? $query->row() : $query->result();
        } else {
            return FALSE;
        }
    }

    function like($tabla = '', $like = array(), $limit = 10) {
        $query = $this->db_averias->select()
                ->from($tabla)
                ->or_like($like)
                ->limit($limit)
                ->get();

        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function update($tabla, $update = array(), $where = array()) {
        $query = $this->db_averias->update($tabla, $update, $where);
        if ($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function query($q) {
        $query = $this->db_averias->query($q);
        if ($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function get_query($q, $cant = 0) {
        $query = $this->db_averias->query($q);
        if ($query) {
            if ($query->num_rows() > 0) {
                return $cant == 1 ? $query->row() : $query->result();
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    function insert($tabla, $data = array()) {
        $query = $this->db_averias->insert($tabla, $data);
        if ($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function distinct($tabla, $campo) {
        $query = $this->db_averias->distinct()->select($campo)->from($tabla)->get();
        return $query->num_rows > 0 ? $query->result() : FALSE;
    }

    function count($tabla) {
        $query = $this->db_averias->select("count(*) as cant ")->from($tabla)->get();
        return $query->num_rows > 0 ? $query->row() : FALSE;
    }

    function count_col($tabla, $campo) {
        $query = $this->db_averias->select(" {$campo},count(*) as cant ")
                ->from($tabla)
                ->group_by($campo)
                ->order_by("cant desc")
                ->get();
        return $query->num_rows > 0 ? $query->result() : FALSE;
    }

    function count_where($tabla, $campo, $where) {
        $query = $this->db_averias->select(" {$campo},count(*) as cant ")->from($tabla)->where($where)->group_by($campo)->get();
        return $query->num_rows > 0 ? $query->result() : FALSE;
    }

    function count_int($tabla, $where) {
        $query = $this->db_averias->select(" count(*) as cant ")->from($tabla)->where($where)->get();
        return $query->num_rows > 0 ? $query->row() : FALSE;
    }*/    
}
