<?php

//controllers/verarticulocategorias.php

require '../fw/fw.php';
require '../models/Articulos.php';
require '../models/Categorias.php';
require '../views/VistaArticulosCat.php';

session_start();

$id_categoria = $_SESSION['categoria'];

if (count($_POST) > 0) {
	
	if ($_POST['categorias']) {
		header("Location: vercategorias.php");
	}

	if ($_POST['inicio']) {
		header("Location: inicio.php");
	}
}

else{

	$a = new Articulos();
	$articulos = $a->getFromCategoria($id_categoria);

	$c = new Categorias();
	$categorias = $c->getCategoria($id_categoria);

	$v = new VistaArticulosCat();
	$v->art = $articulos;
	$v->cat = $categorias;
	$v->render();
}