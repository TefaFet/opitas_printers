<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ingreso extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_login');
	}


	public function valida_user()
	{
		$email= $this->input->post('email');
		$pass= $this->input->post('pass');

		$result= $this->model_login->cuenta_usuario($email,$pass);
		print_r($result->contar);



		echo $result->cuenta;
	}



}
