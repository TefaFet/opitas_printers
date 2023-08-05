<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_login extends CI_Model
{


	function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$this->load->view('login');
	}

	public function cuenta_usuario($user, $contra)
	{
		$sql = "SELECT COUNT(*) AS contar FROM login
		WHERE correo_electo=?
		AND contrasena=?;";

		$query = $this->db->query($sql, array($user, $contra));

		return $query->row();
	}

	public function trae_user($user = null, $pass = null)
    {
  
      $sql = "SELECT * FROM login
    WHERE  correo_electo=? AND contrasena= ?;";
  
      $query = $this->db->query($sql, array($user, $pass));
  
      return $query->row();
    }
	public function cargar_datos()
    {
		$id = $this->session->userdata('ID');
        $sql = "SELECT * from login  WHERE id=?;";
		$query = $this->db->query($sql,$id );
        return $query->row();
    }


	public function registro_mo($ingreso)
	{
		$this->db->insert('login',$ingreso);

		return $this->db->insert_id();
	}




}
