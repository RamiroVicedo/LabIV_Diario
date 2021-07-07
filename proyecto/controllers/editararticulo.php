<?php

//controllers/editararticulo.php

require '../fw/fw.php';
require '../models/Articulos.php';
require '../models/Categorias.php';
require '../views/VistaEditArt.php';
require '../views/VistaArticulo.php';

session_start();

$id_articulo = $_GET['id'];

$a = new Articulos();

if (count($_POST) > 0) {

	if ($_POST['edit']) {

		if(is_null($_POST['titulo'])) die("error 1");

	 	if(!isset($_POST['categoria'])) die("error 2");

		if(!is_null($_POST['articulo'])) {

			$a->editarArticulo($id_articulo,
								$_POST['titulo'], 
								$_POST['categoria'], 
								$_POST['articulo']);

			header("Location: ver-articulo-$id_articulo");
			
		}
		else die("error 3");
	}

	if ($_POST['inicio']) {
		header("Location: cromatico");
	}

	if ($_POST['volver']) {
		header("Location: ver-articulo-$id_articulo");
	}
	
		
}

else{

	$articulo = $a->getArticulo($id_articulo);

	$c = new Categorias();
	$categoria = $c->getTodos();

	$v = new VistaEditArt();
	$v->art = $articulo;
	$v->cat = $categoria;
	$v->render();
}