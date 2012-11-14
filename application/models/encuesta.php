<?php

class Encuesta extends CI_Model{
       
    function __construct(){
        parent::__construct();
    }

    function registrar($data) {
        $this->db->insert('encuestas', $data);

        if ($this->db->affected_rows() != 0){
            return $this->db->insert_id();
        }else{
            return "False";
        }
    }

    function registrar_correo($data) {
        $this->db->insert('correo', $data);

        if ($this->db->affected_rows() != 0){
            return $this->db->insert_id();
        }else{
            return "False";
        }
    }

    function usuario($data) {
        $fields = 'id, correo, nombre, op_esp_publico, op_inf_peatonal, op_inf_ciclista, op_inf_coche, op_tran_publico';
        $this->db->select($fields);
        $query = $this->db->get_where('encuestas', array('id' => $data['id']) );

        if ($query->num_rows() > 0){
            $row = $query->row_array();
            return $row;
        }
        //return $row.;//result_array(), row_array(), result()
    }
 
    function estado($data) {
        $sql = "SELECT AVG('op_esp_publico') AS avg_esp_publico, AVG('op_inf_peatonal') AS avg_inf_peatonal, 
                       AVG('op_inf_ciclista') AS avg_inf_ciclista, AVG('op_inf_coche') AS avg_inf_coche, 
                       AVG('op_tran_publico') AS avg_tran_publico 
                FROM municipios, encuestas
                WHERE estado='" . $data['estado'] . "' AND cod_postal = 'municipios.codigo_postal'";

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0){
            $row = $query->row_array();
            return $row;
        }
    }

    function promedio(){
        $this->db->select_avg('op_esp_publico', 'avg_esp_publico');
        $this->db->select_avg('op_inf_peatonal', 'avg_inf_peatonal');
        $this->db->select_avg('op_inf_ciclista', 'avg_inf_ciclista');
        $this->db->select_avg('op_inf_coche', 'avg_inf_coche');
        $this->db->select_avg('op_tran_publico', 'avg_tran_publico');
        $query = $this->db->get('encuestas');

        if ($query->num_rows() > 0){
            $row = $query->row_array();
            return $row;
        }
    }

}