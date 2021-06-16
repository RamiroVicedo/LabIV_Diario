<?php

//models/Ariculos.php

class Articulos extends Model {

	public function getTodos(){
			$this->db->query("SELECT * 
								FROM articulos");
			return $this->db->fetchAll();
	} 

	public function getArticulo($id_articulo){
			$this->db->query("SELECT nombre, id_categoria, fecha, articulo
								FROM articulos WHERE id_articulo=" . $id_articulo);
			return $this->db->fetchAll();
	}

	public function getFromCategoria($id_categoria){
			$this->db->query("SELECT nombre, fecha, articulo
								FROM articulos WHERE id_categoria=" . $id_categoria);
			return $this->db->fetchAll();
	}	

	public function getBusquedaNombre($termino){
			$this->db->query("SELECT a.nombre nombre, a.fecha, a.articulo, a.id_articulo, c.nombre categoria
								FROM articulos a 
								LEFT JOIN categorias c ON 
										c.id_categoria = a.id_categoria
								WHERE a.nombre LIKE '%$termino%'");
			return $this->db->fetchAll();
	}	

	public function getBusquedaDescripcion($termino){
			$this->db->query("SELECT a.nombre nombre, a.fecha, a.articulo, a.id_articulo, c.nombre categoria
								FROM articulos a 
								LEFT JOIN categorias c ON 
										c.id_categoria = a.id_categoria
								WHERE a.articulo LIKE '%$termino%'");
			return $this->db->fetchAll();
	}


}



