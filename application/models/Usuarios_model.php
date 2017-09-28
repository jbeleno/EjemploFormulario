<?php
class Usuarios_model extends CI_Model {

	public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
	}

	public function adicionar($nombre, $correo, $contrasena) {
		if ($nombre == "") {
			return array(
				'estado' => 'ERROR',
				'mensaje' => 'El nombre no puede ser vacío.'
			);
		}

		if ($correo == "") {
			return array(
				'estado' => 'ERROR',
				'mensaje' => 'El correo no puede ser vacío.'
			);
		}

		if ($nombre == "") {
			return array(
				'estado' => 'ERROR',
				'mensaje' => 'La contraseña no puede ser vacía.'
			);
		}

		$datos = array(
			'nombre' => $nombre,
			'correo' => $correo,
			'contrasena' => $contrasena,
			'created_at' => date("Y-m-d H:i:s")
		);

		$this->db->insert('usuarios', $datos);

		$id_usuario = $this->db->insert_id();

		return array(
			'estado' => 'EXITO',
			'id_usuario' => $id_usuario
		);
	}
}
