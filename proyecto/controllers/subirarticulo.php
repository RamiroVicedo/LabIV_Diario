<?php

//controllers/subirarticulo.php

require '../fw/fw.php';
require '../models/Articulos.php';
require '../models/Categorias.php';
require '../views/SubirArticulo.php';
require '../views/VistaArticulo.php';

session_start();

if (count($_POST) > 0) {

	if ($_POST['subida']) {
		$a = new Articulos();

		if(is_null($_POST['titulo'])) die("error 1");

	 	if(!isset($_POST['categoria'])) die("error 2");

		if(!is_null($_POST['articulo'])) {

			$a->subirArticulo($_POST['titulo'], 
								$_POST['categoria'], 
								$_POST['articulo']);
			$id_articulo = $a->getID($_POST['titulo'], 
												$_POST['categoria'], 
												$_POST['articulo']);
			$_SESSION['articulo'] = $id_articulo;
			header("Location: verarticulo.php");
			
		}
		else die("error 3");
	}

	if ($_POST['inicio']) {
		header("Location: inicio.php");
	}

		
}

else{

	$c = new Categorias();
	$categoria = $c->getTodos();

	$v = new SubirArticulo();
	$v->cat = $categoria;
	
}

$v->render();