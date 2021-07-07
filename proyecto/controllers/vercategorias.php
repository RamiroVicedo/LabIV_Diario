<?php

//controllers/veracategorias.php

require '../fw/fw.php';
require '../models/Categorias.php';
require '../models/Articulos.php';
require '../views/VistaCategorias.php';

session_start();

$a = new Articulos();

if (count($_POST) > 0) {
	
	if ($_POST['inicio']) {
		header("Location: cromatico");
	}

	if ($_POST['mas']) {
		$id = $_POST['mas'];
		header("Location: ver-articulo-por-categoria-$id");
	}

	if ($_POST['articulo']) {
		$id = $_POST['articulo'];
		header("Location: ver-articulo-$id");
	}
}

$articulo = $a->getTodos();

$c = new Categorias();
$categorias = $c->getTodos();

$v = new VistaCategorias();
$v->cat = $categorias;
$v->art = $articulo;
$v->render();