<?php

//controllers/veracategorias.php

require '../fw/fw.php';
require '../models/Categorias.php';
require '../views/VistaCategorias.php';

session_start();

if (count($_POST) > 0) {
	

	if ($_POST['inicio']) {
		header("Location: inicio.php");
	}
}


$c = new Categorias();
$categorias = $c->getTodos();

$v = new VistaCategorias();
$v->cat = $categorias;
$v->render();