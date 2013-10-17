<?php

class Reporte extends CI_Controller{
	public function __construct() {
		parent::__construct();
		$this->load->model('encuesta');
	}

	private function general(){
		$zona_met = $this->input->post('zona_met');
		$sexo = $this->input->post('sexo');
		$edad = $this->input->post('edad');

		function redondear($valor) { 
			   $float_redondeado=round($valor * 100) / 100; 
			   return $float_redondeado; 
		} //lol

		$data =	$this->encuesta->reporte($zona_met, $sexo, $edad);
		$data2 = $this->encuesta->reporte_count($zona_met, $sexo, $edad);

		$data['esp_publico'] = redondear($data['esp_publico']);
		$data['inf_peatonal'] = redondear($data['inf_peatonal']);
		$data['inf_ciclista'] = redondear($data['inf_ciclista']);
		$data['inf_coche'] = redondear($data['inf_coche']);
		$data['tran_publico'] = redondear($data['tran_publico']);

		$data['id'] = $this->input->post('id');
		$data['total'] = $data2['total'];

		return $data;
	}
	public function index(){
		$data = $this->general();
		$this -> load -> view('reporte', $data);
	}

	public function grafica(){
		$data = $this->general();
		$this -> load -> view('grafica', $data);
	}
}