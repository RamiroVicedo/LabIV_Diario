<?php

//controllers/verarticulocategorias.php

require '../fw/fw.php';
require '../models/Articulos.php';
require '../views/VistaArticulosCat.php';

$id_categoria = 7;
$a = new Articulos();
$articulos = $a->getFromCategoria($id_categoria);

$v = new VistaArticulosCat();
$v->art = $articulos;
$v->render();