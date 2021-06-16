<?php

//controllers/veracategorias.php

require '../fw/fw.php';
require '../models/Categorias.php';
require '../views/VistaCategorias.php';

$c = new Categorias();
$categorias = $c->getTodos();

$v = new VistaCategorias();
$v->cat = $categorias;
$v->render();