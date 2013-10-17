<?php

class Encuesta extends CI_Model{
       
    function __construct(){
        parent::__construct();
    }

    function registrar($data) {
        $query = $this->db->get_where('encuestas', array('correo' => $data['correo']) );
        
        if ($query->num_rows() == 0) { 
            $this->db->insert('encuestas', $data);

            if ($this->db->affected_rows() != 0){
                return $this->db->insert_id();
            }else{
                return "False";
            }
        } else{
            return "Duplicate";
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

    function reporte($zona_met, $sexo, $edad){
        $this->db->select_avg('op_esp_publico', 'esp_publico');
        $this->db->select_avg('op_inf_peatonal', 'inf_peatonal');
        $this->db->select_avg('op_inf_ciclista', 'inf_ciclista');
        $this->db->select_avg('op_inf_coche', 'inf_coche');
        $this->db->select_avg('op_tran_publico', 'tran_publico');

        if($zona_met != "" and $zona_met != "Todas" ){
            $this->db->where('zona_met', $zona_met);
        }

        if($zona_met != "" and $sexo != "Ambos"){
            $this->db->where('sexo', $sexo);
        }

        //$where = "nombre='Jose' AND estado='jefe' OR estado='activo'";
        //$this->db->where($where);

        switch ($edad) {
        case "hasta18":
            $this->db->where('edad <= 18');
            break;
        case "hasta40":
            $this->db->where('edad > 18 AND edad < 40');
            break;
        case "hasta60":
            $this->db->where('edad > 18 AND edad < 60');
            break;
        case "hasta80":
            $this->db->where('edad > 18 AND edad < 80');
            break;
        case "mayor80":
            $this->db->where('edad > 80');
            break;
        }

        $query = $this->db->get('encuestas');

        if ($query->num_rows() > 0){
            $row = $query->row_array();
            return $row;
        }
    }

    function reporte_count($zona_met, $sexo, $edad){
        $this->db->select('COUNT(*) AS total',FALSE);
        
        if($zona_met != "" and $zona_met != "Todas" ){
            $this->db->where('zona_met', $zona_met);
        }

        if($zona_met != "" and $sexo != "Ambos"){
            $this->db->where('sexo', $sexo);
        }
        switch ($edad) {
        case "hasta18":
            $this->db->where('edad <= 18');
            break;
        case "hasta40":
            $this->db->where('edad > 18 AND edad < 40');
            break;
        case "hasta60":
            $this->db->where('edad > 18 AND edad < 60');
            break;
        case "hasta80":
            $this->db->where('edad > 18 AND edad < 80');
            break;
        case "mayor80":
            $this->db->where('edad > 80');
            break;
        }

        $query = $this->db->get('encuestas');

        if ($query->num_rows() > 0){
            $row = $query->row_array();
            return $row;
        }
    }

}