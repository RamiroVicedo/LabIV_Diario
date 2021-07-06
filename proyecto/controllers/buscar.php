<?php

//controllers/buscar.php

require '../fw/fw.php';
require '../models/Articulos.php';
require '../models/Categorias.php';
require '../views/VistaBusqueda.php';

session_start();

$termino = $_SESSION['termino'];

if (count($_POST) > 0) {

	if ($_POST['inicio']) {
		header("Location: inicio.php");
	}

}

$a = new Articulos();
$articulonom = $a->getBusquedaNombre($termino);
$articulodesc = $a->getBusquedaDescripcion($termino);

$v = new VistaBusqueda();
$v->busn = $articulonom;
$v->busd = $articulodesc;
$v->render();
