<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

	/**
	 * buenos dias como se les comento en la expocicion este es el apartado del Modelo el cual es el encargado 
	 * de actuar como intermediarios entre el controlador y la base de datos
	 */
    
    function __construct(){
		parent::__construct();
	}


	public function traer()
	{
        $traer="SELECT*FROM login";
        $query=$this->db->query($traer);
       return $query ->result(); 
	}
    
}
