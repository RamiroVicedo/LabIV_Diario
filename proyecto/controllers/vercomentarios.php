<?php

//controllers/vercomentarios.php

require '../fw/fw.php';
require '../models/Comentarios.php';
require '../views/VistaComentarios.php';

$id_articulo = 2;
$c = new Comentarios();
$comentarios = $c->getFromArticulo($id_articulo);

$v = new VistaComentarios();
$v->com = $comentarios;
$v->render();