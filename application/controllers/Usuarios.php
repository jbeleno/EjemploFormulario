<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
	}

	public function adicionar()
	{
		$nombre = $this->input->post('nombre');
		$correo = $this->input->post('correo');
		$contrasena = $this->input->post('contrasena');

		$resultado = adicionar($nombre, $correo, $contrasena);
		
		$this->output
	         ->set_content_type('application/json')
	         ->set_output(json_encode($resultado));
	}
}
