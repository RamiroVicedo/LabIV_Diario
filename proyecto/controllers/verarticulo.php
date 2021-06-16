<?php

//controllers/verarticulo.php

require '../fw/fw.php';
require '../models/Articulos.php';
require '../views/VistaArticulo.php';

$id_articulo = 1;
$a = new Articulos();
$articulo = $a->getArticulo($id_articulo);

$v = new VistaArticulo();
$v->art = $articulo;
$v->render();