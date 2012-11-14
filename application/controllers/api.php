<?php

class Api extends CI_Controller{

	function __construct() {
		parent::__construct();
		$this->load->model('encuesta');
	}


	function getPoll(){			
			$sedes = $this -> encuesta -> Get_poll();

			echo json_encode($sedes);
			//$this->response($sedes, 200);
	}


}