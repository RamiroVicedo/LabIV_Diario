<?php

//models/Categorias.php

class Categorias extends Model {

	public function getTodos(){
			$this->db->query("SELECT * 
								FROM categorias");
			return $this->db->fetchAll();
	} 

	public function getCategoria($id_categoria){
			$this->db->query("SELECT nombre, id_categoria
								FROM categorias WHERE id_categoria=" . $id_categoria);
			return $this->db->fetchAll();
	}

}


