<!-- html/VistaBusqueda.php -->

<!DOCTYPE html>
<html>
<head>
	
	<title> Busqueda </title>


	<style>

	h2{
		display: flex;
		align-items: center;
		justify-content: center;
	}

	h4{
		display: flex;
		align-items: center;
		justify-content: center;
	}

	p{
		display: flex;
		align-items: center;
		justify-content: center;
	}



	</style>

</head>
<body>

	<!--Imprime los resultados de la busqueda donde coincide el nombre y guarda las id de los articulos en un array --> 
	<?php 
	$art = array();
	$i = 1;

	foreach($this->busn as $b) {?>
	<h2> <?= $b['nombre']?> </h2>

	<h4>  <?= $b['categoria']?> </br>
	<?= $b['fecha']?></h4>

	<p> <?= $b['articulo']?> </p>

	</br>
	<?php 
		$art[$i] = $b['id_articulo'];
		$i++;
		} ?>

	<!--Compara las id de los articulos conseguidos en la busqueda por contenido y los imprime si no fueron impresos previamente --> 
	<?php 
	foreach($this->busd as $b) {
		$previo = 0;
		foreach($art as $a){
			if($a == $b['id_articulo']){
				$previo = 1; } }
		if($previo != 1 ) {?>
	<h2> <?= $b['nombre']?> </h2>

	<h4>  <?= $b['categoria']?> </br>
	<?= $b['fecha']?></h4>

	<p> <?= $b['articulo']?> </p>

	</br>
	<?php  } } ?>


</body>
</html>
