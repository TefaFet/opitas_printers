<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_impre extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function tb_traer()
	{
		$sql = "SELECT * FROM productos";

		$query = $this->db->query($sql);

		return $query->result();
	}
	function traeruna($id)
	{
		$sql = "SELECT * FROM productos WHERE id=?";

		$query = $this->db->query($sql,$id);

		return $query->row();
	}
	function insert_registro($insertar)
	{
		$this->db->insert('tb_compras', $insertar);
		return $this->db->insert_id();
	}
	function historial_general()
	{
		$sql = "SELECT c1.fecha, c2.nombre, c3.nombre AS cliente ,c1.precio_total,c1.cantidad,c1.metodo FROM tb_compras c1, productos c2, login c3  WHERE c1.id_usuario=c3.id AND c1.id_producto=c2.id";
		$query = $this->db->query($sql);
		return $query->result();
	}
	function historial_propio()
	{
		$id = $this->session->userdata('ID');
		$sql = "SELECT c1.fecha, c2.nombre, c3.nombre AS cliente ,c1.precio_total,c1.cantidad,c1.metodo FROM tb_compras c1, productos c2, login c3  WHERE c1.id_usuario=c3.id AND c1.id_producto=c2.id AND c1.id_usuario=?";
		$query = $this->db->query($sql,$id);
		return $query->result();
	}
	
}
