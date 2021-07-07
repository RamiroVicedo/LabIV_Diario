<?php

//controllers/inicio.php

require '../fw/fw.php';
require '../models/Articulos.php';
require '../models/Categorias.php';
require '../views/PaginaPrincipal.php';

session_start();

$a = new Articulos();
$articulo = $a->getTodos();

$c = new Categorias();
$categoria = $c->getTodos();

if (count($_POST) > 0) {
	
	if ($_POST['otras']) {
		header("Location: ver-categorias");
	}

	if ($_POST['log']) {
		header("Location: login");
	}

	if ($_POST['logfuera']) {
		header("Location: logout");
	}

	if ($_POST['categoria']) {
		foreach ($categoria as $c) {
			if ($c['nombre'] == $_POST['categoria']) {
				$id = $c['id_categoria'];
				header("Location: ver-articulo-por-categoria-$id");
			}
		}
	}

	if ($_POST['subir']) {
		header("Location: subir-articulo");
	}

	if ($_POST['buscar']) {
		if ($_POST['termino']) {
			$termino = $_POST['termino'];
			header("Location: buscar-$termino");

		}
		else header("Location: inicio.php");
	}

	if ($_POST['articulo']) {
		$id = $_POST['articulo'];
		header("Location: ver-articulo-$id");
	}
}

else{

	$v = new PaginaPrincipal();
	$v->art = $articulo;
	$v->cat = $categoria;
	$v->render();
}