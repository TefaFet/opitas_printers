<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * buenos dias como se les comento en la expocicion este es el apartado del controller el cual es el encargado 
	 * de actuar como intermediarios entre el usuario y el sistema. Serán capaces de capturar las acciones de éste
	 * sobre la Vista, como puede ser la pulsación de un botón o la selección de una opción de menú, interpretarlas 
	 * y actuar en función de ellas. 
	 */
	public function index()
	{
	

		$this->load->view('welcome_message');

	}


}

