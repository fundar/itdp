<?php

class Micrositio extends CI_Controller{
	public function __construct() {
		parent::__construct();
		$this->load->model('encuesta');
	}

	public function index(){
		$this -> load -> view('home');
	}
	
	public function encuesta(){				
		$this -> load -> view('encuesta');
	}

	public function test(){				
		$this -> load -> view('test');
	}

	public function mandar_encuesta(){
		if( $this->input->post('correo') AND $this->input->post('nombre') AND 
			$this->input->post('edad') AND $this->input->post('sexo') AND 
			$this->input->post('cod_postal') AND $this->input->post('op_esp_publico') AND
			$this->input->post('op_inf_peatonal') AND $this->input->post('op_inf_ciclista')AND 
			$this->input->post('op_inf_coche') AND $this->input->post('op_tran_publico') AND
			$this->input->post('zona_met')){ 
		
			$data = array(
               'nombre' => $this->input->post('nombre'),
               'sexo' => $this->input->post('sexo'),
               'edad' => $this->input->post('edad'),
               'zona_met' => $this->input->post('zona_met'),
               'correo' => $this->input->post('correo'),
               'cod_postal' => $this->input->post('zona_met'),

               'op_esp_publico' => $this->input->post('op_esp_publico'),
               'op_inf_peatonal' => $this->input->post('op_inf_peatonal'),
               'op_inf_ciclista' => $this->input->post('op_inf_ciclista'),
               'op_inf_coche' => $this->input->post('op_inf_coche'),
               'op_tran_publico' => $this->input->post('op_tran_publico'),
          	);

			$resp =	$this->encuesta->registrar($data);
			echo $resp;
		}else{
			echo "Todos los campos son requeridos";
		}
	}

	public function mandar_correo(){
		if( $this->input->post('correo') AND $this->input->post('nombre') AND 
			$this->input->post('asunto') AND $this->input->post('texto')){ 
		
			$data = array(
               'correo' => $this->input->post('correo'),
               'nombre' => $this->input->post('nombre'),
               'asunto' => $this->input->post('asunto'),
               'texto' => $this->input->post('texto'),
          	);

			$resp =	$this->encuesta->registrar_correo($data);
			echo $resp;
		}else{
			echo "Todos los campos son requeridos";
		}
	}

	public function resultados(){
		if( $this->input->get('id') ){
			$data['id'] = $this->input->get('id');
			$resp =	$this->encuesta->usuario($data);

			function redondear($valor) { 
			   $float_redondeado=round($valor * 100) / 100; 
			   return $float_redondeado; 
			} //lol

			$avgs =	$this->encuesta->promedio();

			$resp['avg_esp_publico'] = redondear($avgs['avg_esp_publico']);
			$resp['avg_inf_peatonal'] = redondear($avgs['avg_inf_peatonal']);
			$resp['avg_inf_ciclista'] = redondear($avgs['avg_inf_ciclista']);
			$resp['avg_inf_coche'] = redondear($avgs['avg_inf_coche']);
			$resp['avg_tran_publico'] = redondear($avgs['avg_tran_publico']);

			$this -> load -> view('resultados', $resp);

		}elseif ($this->input->get('estado') ) {
			$data['estado'] = $this->input->get('estado');
			$resp =	$this->encuesta->estado($data);

			function redondear($valor) { 
			   $float_redondeado=round($valor * 100) / 100; 
			   return $float_redondeado; 
			} //lol

			$resp['avg_esp_publico'] = redondear($resp['avg_esp_publico']);
			$resp['avg_inf_peatonal'] = redondear($resp['avg_inf_peatonal']);
			$resp['avg_inf_ciclista'] = redondear($resp['avg_inf_ciclista']);
			$resp['avg_inf_coche'] = redondear($resp['avg_inf_coche']);
			$resp['avg_tran_publico'] = redondear($resp['avg_tran_publico']);
			$resp['estado'] = $data['estado'];

			$this -> load -> view('resultados_estado', $resp);
		}else{
			function redondear($valor) { 
			   $float_redondeado=round($valor * 100) / 100; 
			   return $float_redondeado; 
			}

			$avgs =	$this->encuesta->promedio();
			$resp['avg_esp_publico'] = redondear($avgs['avg_esp_publico']);
			$resp['avg_inf_peatonal'] = redondear($avgs['avg_inf_peatonal']);
			$resp['avg_inf_ciclista'] = redondear($avgs['avg_inf_ciclista']);
			$resp['avg_inf_coche'] = redondear($avgs['avg_inf_coche']);
			$resp['avg_tran_publico'] = redondear($avgs['avg_tran_publico']);

			$this -> load -> view('resultados_federales', $resp);
		}
	}

	public function mapa_resultados(){
		$this -> load -> view('mapa_resultados');
	}

	public function informacion(){
		$this -> load -> view('informacion.php');
	}

	public function diputado(){
		$this -> load -> view('diputado');
	}
}