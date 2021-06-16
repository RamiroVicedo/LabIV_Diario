<!-- html/PaginaPrincipal.php -->

<!DOCTYPE html>
<html>
<head>
	
	<title> Cromatico </title>


	<style>

	h1{
		display: flex;
		align-items: center;
		justify-content: center;
	}

	h2{
		display: flex;
		align-items: center;
		justify-content: center;
	}

	h3{
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

	<h1> Cromatico </h1>

	<h3>
	<?php 
	$i = 0;
	foreach ($this->cat as $c) { 
		if ($i < 5) { ?>
		 <?= $c['nombre']?> &nbsp;&nbsp;&nbsp;&nbsp;
	<?php $i++;} } ?>

	+

	</h3>

	<h3 > Buscar </h3>

	<br> <br> <br>

	<?php 
	$i = 0;
	foreach ($this->art as $a){
		if ($i < 6) { ?>
			<h3> <?= $a['nombre'] ?> </h3>
			<p> <?= $a['fecha']?> </p> <br>
			<p>	<?= $a['categoria']?> </p> <br>
			<p>	<?= $a['articulo']?> </p> <br>  
	<?php $i++;} } ?>		


</body>
</html>