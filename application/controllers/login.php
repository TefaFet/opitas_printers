<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_login');
	}

	public function index()
	{
		$this->load->view('login');
	}


	public function valida_user()
	{
		$email = $this->input->post('correo');
		$pass = $this->input->post('pass');

		$result = $this->Model_login->cuenta_usuario($email, $pass);
		if ($result->contar == 1)  {
			$datos_user = $this->Model_login->trae_user($email, $pass);
			$session = array(
				'ID' => $datos_user->id,
				'NOMBRE' => $datos_user->nombre,
				'CORREO_ELECTO' => $datos_user->correo_electo,
				'CONTRASENA' => $datos_user->contrasena,
				'is_logged_in' => TRUE,
			);
			$this->session->set_userdata($session);
			redirect(base_url() . "Controller");
		} else {
			echo"CONTRASEÑA INCORRECTA";
			echo"Intentalo de nuevo";

		}
	}

	public function session_dest()
	{
		$session = array(
			'logueado' => FALSE
		);
		$this->session->set_userdata($session);
		$this->session->sess_destroy();
		redirect('Landing');
	}

	public function registro()
	{
		$email = $this->input->post('correo_electo');
		$contrasena = $this->input->post('contrasena');
		$nombre = $this->input->post('nombre');

		$ingreso = array(
			'nombre' => $nombre,
			'contrasena' => $contrasena,
			'correo_electo' => $email,

		);


		$this->Model_login->registro_mo($ingreso);
		redirect(base_url().'login');
	}
}
