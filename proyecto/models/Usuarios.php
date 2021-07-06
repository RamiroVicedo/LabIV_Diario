<?php

//models/Usuarios.php

class Usuarios extends Model {

	public function getTodos(){
			$this->db->query("SELECT * 
								FROM usuarios");
			return $this->db->fetchAll();
	} 


}