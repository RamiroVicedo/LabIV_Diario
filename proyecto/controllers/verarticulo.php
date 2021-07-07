<?php

//controllers/verarticulo.php

require '../fw/fw.php';
require '../models/Articulos.php';
require '../models/Comentarios.php';
require '../views/VistaArticulo.php';
require '../views/VistaEditArt.php';

session_start();

$id_articulo = $_SESSION['articulo'][0]["id_articulo"];

if (count($_POST) > 0) {

	if ($_POST['Inicio']){

		header("Location: inicio.php");
	}

	if ($_POST['Editar']){

		header("Location: editararticulo.php");
	}

	if ($_POST['Comentarios']){
		header("Location: vercomentarios.php");
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

