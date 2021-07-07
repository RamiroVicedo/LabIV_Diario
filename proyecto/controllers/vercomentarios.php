<?php

//controllers/vercomentarios.php

require '../fw/fw.php';
require '../models/Comentarios.php';
require '../views/VistaComentarios.php';

session_start();

$id_articulo = $_SESSION['articulo'][0]["id_articulo"];

$c = new Comentarios();

if (count($_POST) >0 ) {

	if ($_POST['comentario']) {
		$c->subirComentario($id_articulo,
						$_POST['comentario']);
		header("Location: vercomentarios.php");
	}

	if ($_POST['volver']) {
		header("Location: verarticulo.php");
	}

}

$comentarios = $c->getFromArticulo($id_articulo);

$v = new VistaComentarios();
$v->com = $comentarios;
$v->render();
