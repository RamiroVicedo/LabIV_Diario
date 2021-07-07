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

	public function logIn($email, $password){
		$password = $this->db->escape($password);

		$this->db->query("SELECT *
							FROM usuarios
							WHERE email = '$email'
							AND password = '$password'
							LIMIT 1");
		
		return $this->db->fetchAll();
	}

	public function signUp($nombre, $email, $password){
		$pattern = "/[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+/";
		$check = preg_match($pattern, $email);
		if ($check == 0) die("error usuarios 1");

		if (!$this->emailExistente($email)) die("error usuarios 2");

		$this->db->query("INSERT INTO usuarios
							(nombre, email, password) VALUES
							('$nombre', '$email', '$password') ");			
	}


}