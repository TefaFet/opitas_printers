<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Impresoras extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_impre');
        $this->load->library('session');
		$this->load->model('Model_login');
    }
    public function index()
    {
        $result['tb'] = $this->Model_impre->tb_traer();
        $result['perfil'] = $this->Model_inicio->cargar_datos();
        $this->load->view('impre/header', $result);
        $this->load->view('impre/index', $result);
    }
    public function inserthisto($id)
    {
        $cantidad = $this->input->post("cantidad");
        $metodo = $this->input->post("metodo");
        $datos_impre = $this->Model_impre->traeruna($id);
        $datos_cliente = $this->Model_login->cargar_datos();
        $precio_total = $cantidad * $datos_impre->precio;
        $arre = array(
            "id_usuario" => $datos_cliente->id,
            "id_producto" => $datos_impre->id,
            "precio_total" => $precio_total,
            "cantidad" => $cantidad,
            "metodo" => $metodo,
        );
        $this->Model_impre->insert_registro($arre);
        redirect(base_url()."Impresoras/compras" ,"refresh");
    }
    public function compras()
    {
        $result['tb'] = $this->Model_impre->historial_propio();
        $result['perfil'] = $this->Model_login->cargar_datos();
        $this->load->view('impre/header', $result);
        $this->load->view('impre/compras', $result);
    }
    public function admin()
    {
        $result['tb'] = $this->Model_impre->historial_general();
        $result['perfil'] = $this->Model_login->cargar_datos();
        $this->load->view('impre/header', $result);
        $this->load->view('impre/admin', $result);
    }
}
