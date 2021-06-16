<?php

//models/Comentarios.php

class Comentarios extends Model {

	public function getTodos(){
			$this->db->query("SELECT * 
								FROM comentarios");
			return $this->db->fetchAll();
	} 

	public function getFromArticulo($id_articulo){
			$this->db->query("SELECT comentario, fecha 
								FROM comentarios
								WHERE id_articulo= ". $id_articulo);
			return $this->db->fetchAll();
	} 

}