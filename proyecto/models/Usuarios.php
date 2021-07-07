<?php

//models/Usuarios.php

class Usuarios extends Model {

	public function getTodos(){
			$this->db->query("SELECT * 
								FROM usuarios");
			return $this->db->fetchAll();
	} 

	public function emailExistente($email){
		$this->db->query("SELECT * FROM usuarios
							WHERE email = '$email'");

		if ($this->db->numRows() != 0) return false;

		return true;
	}

	public function signUp($nombre, $email, $password){
		if (!$this->emailExistente($email)) die("error usuarios 1");

		$this->db->query("INSERT INTO usuarios
							(nombre, email, password) VALUES
							('$nombre', '$email', '$password') ");			
	}


}