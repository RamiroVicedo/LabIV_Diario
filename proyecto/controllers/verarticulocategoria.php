<?php

//controllers/verarticulocategorias.php

require '../fw/fw.php';
require '../models/Articulos.php';
require '../views/VistaArticulosCat.php';

session_start();

$id_categoria = $_SESSION['categoria'];
$a = new Articulos();
$articulos = $a->getFromCategoria($id_categoria);

$v = new VistaArticulosCat();
$v->art = $articulos;
$v->render();