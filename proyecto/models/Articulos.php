<?php

//models/Ariculos.php

class Articulos extends Model {

	public function getTodos(){
			$this->db->query("SELECT a.nombre nombre, a.fecha, a.articulo, a.id_articulo, c.nombre categoria
								FROM articulos a 
								LEFT JOIN categorias c ON 
										c.id_categoria = a.id_categoria
								ORDER BY a.fecha DESC");
			return $this->db->fetchAll();
	} 

	public function getArticulo($id_articulo){
			$this->db->query("SELECT a.nombre nombre, a.fecha, a.articulo, a.id_articulo, a.id_categoria, c.nombre categoria
								FROM articulos a 
								LEFT JOIN categorias c ON 
										c.id_categoria = a.id_categoria
								WHERE id_articulo=" . $id_articulo);
			return $this->db->fetchAll();
	}

	public function getID($nombre, $categoria, $texto){
		$nombre = $this->db->escape($nombre);
		$texto = $this->db->escape($texto);

		$this->db->query("SELECT id_articulo, fecha
							FROM articulos
							WHERE nombre= '$nombre' 
							AND articulo= '$texto' 
							AND id_categoria= '$categoria' 
							ORDER BY fecha DESC
							LIMIT 1");
		return $this->db->fetchAll();
	}

	public function getFromCategoria($id_categoria){
			$this->db->query("SELECT nombre, fecha, articulo, id_articulo
								FROM articulos WHERE id_categoria=" . $id_categoria);
			return $this->db->fetchAll();
	}	

	public function getBusquedaNombre($termino){
		if (!isset($termino)) die("error busqueda articulos 1");

		$this->db->query("SELECT a.nombre nombre, a.fecha, a.articulo, a.id_articulo, c.nombre categoria, a.id_articulo
							FROM articulos a 
							LEFT JOIN categorias c ON 
										c.id_categoria = a.id_categoria
							WHERE a.nombre LIKE '%$termino%'");
		return $this->db->fetchAll();
	}	

	public function getBusquedaDescripcion($termino){

		if (!isset($termino)) die("error busqueda articulos 2");

			$this->db->query("SELECT a.nombre nombre, a.fecha, a.articulo, a.id_articulo, c.nombre categoria, a.id_articulo
								FROM articulos a 
								LEFT JOIN categorias c ON 
										c.id_categoria = a.id_categoria
								WHERE a.articulo LIKE '%$termino%'");
			return $this->db->fetchAll();
	}

	public function subirArticulo($nombre, $categoria, $texto){
		$nombre = $this->db->escape($nombre);
		$texto = $this->db->escape($texto);

		$this->db->query("INSERT INTO articulos
						 (nombre, id_categoria, articulo, fecha) VALUES
						 ('$nombre', '$categoria', '$texto', NOW() ) 
						 LIMIT 1");
	}

	public function editarArticulo($id, $nombre, $categoria, $texto){
		$nombre = $this->db->escape($nombre);
		$texto = $this->db->escape($texto);

		$this->db->query("UPDATE articulos
							SET nombre = '$nombre'
							WHERE id_articulo = '$id'
							LIMIT 1"); 

		$this->db->query("UPDATE articulos
							SET id_categoria = '$categoria'
							WHERE id_articulo = '$id'
							LIMIT 1");

		$this->db->query("UPDATE articulos
							SET articulo = '$texto'
							WHERE id_articulo = '$id'
							LIMIT 1");

	}

	public function salvarTermino($termino){

		$termino = $this->db->escapeWildcards($termino);

		$termino = '"' . $termino . '"';

		return $termino;
	}

}



