<?php

//models/Empleados.php

class Empleados extends Model {

	public function getTodos(){
			$this->db->query("SELECT * 
								FROM empleados");
			return $this->db->fetchAll();
	} 

	public function logIn($email, $password){
		$this->db->query("SELECT *
							FROM empleados
							WHERE email = '$email'
							AND password = '$password'
							LIMIT 1");
		
		return $this->db->fetchAll();
	}


}