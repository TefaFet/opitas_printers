<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	   function __construct(){
		parent::__construct();
		$this->load->model('Model_impre');
		$this->load->model('Model');
	}
	
	public function index()
	{
		$traer['datos'] = $this ->Model->traer(); 
	$this->load->view('view', $traer);
	}

	public function menu()
	{
		$traer['datos'] = $this ->Model->traer(); 
		$traer['tb'] = $this->Model_impre->tb_traer();

	$this->load->view('menu', $traer);
	}
	
	public function Impresora_Lexmark_29S0150()
	{
		$traer['datos'] = $this ->Model->traer(); 
	$this->load->view('funcion_primera', $traer);
	}

	public function Impresora_Canon_Maxify_GX6010()
	{
		$traer['datos'] = $this ->Model->traer(); 
	$this->load->view('funcion_segunda', $traer);
	}
	public function Impresora_HP_Laserjet_Enterprise_M555dn()
	{
		$traer['datos'] = $this ->Model->traer(); 
	$this->load->view('funcion_tercera', $traer);
	}
	public function Impresora_HP_Laserjet_Enterprise_MFPM578DN()
	{
		$traer['datos'] = $this ->Model->traer(); 
	$this->load->view('funcion_cuarta', $traer);
	}
	
	public function RICOH_Impresora_laserdos()
	{
		$traer['datos'] = $this ->Model->traer(); 
	$this->load->view('funcion_quinta', $traer);
	}

	public function RICOH_MP_Impresora_multi()
	{
		$traer['datos'] = $this ->Model->traer(); 
	$this->load->view('funcion_seis', $traer);
	}

	public function marcas()
	{
		$traer['datos'] = $this ->Model->traer(); 
	$this->load->view('empresas', $traer);
	}

	public function asesorias()
	{
		$traer['datos'] = $this ->Model->traer(); 
	$this->load->view('asesorias', $traer);
	}



	public function acerca_de_nosotros()
	{
		$traer['datos'] = $this ->Model->traer(); 
	$this->load->view('acerca_de_nosotros', $traer);
	}

	public function contactanos()
	{
		$traer['datos'] = $this ->Model->traer(); 
	$this->load->view('contactanos', $traer);
	}
}

