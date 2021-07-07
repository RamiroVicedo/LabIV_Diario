<?php

//controllers/verarticulo.php

require '../fw/fw.php';
require '../models/Articulos.php';
require '../models/Comentarios.php';
require '../views/VistaArticulo.php';
require '../views/VistaEditArt.php';

session_start();

$id_articulo = $_GET['id'];

if (count($_POST) > 0) {

	if ($_POST['Inicio']){

		header("Location: cromatico");
	}

	if ($_POST['Editar']){

		header("Location: editar-articulo-$id_articulo");
	}

	if ($_POST['Comentarios']){
		header("Location: comentarios-articulo-$id_articulo");
	}
}


else{

	$a = new Articulos();
	$articulo = $a->getArticulo($id_articulo);

	$c = new Comentarios();
	$comentario = $c->getFromArticulo($id_articulo);

	$v = new VistaArticulo();
	$v->art = $articulo;
	$v->com = $comentario;
	$v->render();
}

