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
		header("Location: vercategorias.php");
	}

	if ($_POST['log']) {
		header("Location: loginusuario.php");
	}

	if ($_POST['logfuera']) {
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

	if ($_POST['articulo']) {
		$id_articulo = $a->getIDfromID($_POST['articulo']);
		$_SESSION['articulo'] = $id_articulo;
		header("Location: verarticulo.php");
	}
}

else{

	$v = new PaginaPrincipal();
	$v->art = $articulo;
	$v->cat = $categoria;
	$v->render();
}