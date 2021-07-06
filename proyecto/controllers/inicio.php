<?php

//controllers/inicio.php

require '../fw/fw.php';
require '../models/Articulos.php';
require '../models/Categorias.php';
require '../views/PaginaPrincipal.php';

session_start();

$a = new Articulos();

$c = new Categorias();
$categoria = $c->getTodos();

if (count($_POST) > 0) {
	
	if ($_POST['otras']) {
		header("Location: vercategorias.php");
	}

	if ($_POST['log'] == "Login") {
		header("Location: loginusuario.php");
	}

	if ($_POST['logfuera'] == "Logout") {
		header("Location: logout.php");
	}

	if ($_POST['categoria']) {
		foreach ($categoria as $c) {
			if ($c['nombre'] == $_POST['categoria']) {
				$_SESSION['categoria'] = $c['id_categoria'];
				header("Location: verarticulocategoria.php");
			}
		}
	}

	if ($_POST['subir']) {
		header("Location: subirarticulo.php");
	}

	if ($_POST['buscar']) {
		if ($_POST['termino']) {
			$_SESSION['termino'] = $_POST['termino'];
			header("Location: buscar.php");
		}	
	}
	
}

else{

	$articulo = $a->getTodos();

	$v = new PaginaPrincipal();
	$v->art = $articulo;
	$v->cat = $categoria;
	$v->render();
}