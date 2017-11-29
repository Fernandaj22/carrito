<?php 

	class UsuarioCarrito_Model extends Model
	{
		public function selectProductosId(){
			return $this->db->select("*", "productos");
		}
		public function registroUsuario($nombre, $mail, $pass, $respuesta, $pregunta){
			$data = array('nombreUsuario' => $nombre, 'correo' => $mail, 'pass' => $pass,
						  'respSeguridad' => $respuesta, 'idPregunta' => $pregunta, 'idTipoUsuario' => '2');
			return $this->db->insert($data, 'usuarios');
		}
		public function iniciarSesion($mail, $pass){
			$login = $this->db->select("`correo`, `pass`, `idTipoUsuario`", "usuarios", 
										"`correo` = '{$mail}' AND `pass` = '{$pass}'");
			return $login;
		}
		
	}

 ?>