<?php

//controllers/vercomentarios.php

require '../fw/fw.php';
require '../models/Comentarios.php';
require '../views/VistaComentarios.php';

session_start();

$id_articulo = $_GET['id'];

$c = new Comentarios();

if (count($_POST) >0 ) {

	if ($_POST['comentario']) {
		$c->subirComentario($id_articulo,
						$_POST['comentario']);
		header("Location: comentarios-articulo-$id_articulo");
	}

	if ($_POST['volver']) {
		header("Location: ver-articulo-$id_articulo");
	}

}

$comentarios = $c->getFromArticulo($id_articulo);

$v = new VistaComentarios();
$v->com = $comentarios;
$v->render();
