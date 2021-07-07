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

	public function subirComentario($id_articulo, $comentario){
		$comentario = $this->db->escape($comentario);
		$comentario = $this->db->escapeWildcards($comentario);

		$this->db->query("INSERT INTO comentarios
							(comentario, id_articulo, fecha) VALUES
							('$comentario', '$id_articulo', NOW() )
							LIMIT 1");
	}

}