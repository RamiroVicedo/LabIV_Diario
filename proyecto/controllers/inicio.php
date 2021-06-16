<?php

//controllers/inicio.php

require '../fw/fw.php';
require '../models/Articulos.php';
require '../models/Categorias.php';
require '../views/PaginaPrincipal.php';

$a = new Articulos();
$articulo = $a->getTodos();

$c = new Categorias();
$categoria = $c->getTodos();

$v = new PaginaPrincipal();
$v->art = $articulo;
$v->cat = $categoria;
$v->render();