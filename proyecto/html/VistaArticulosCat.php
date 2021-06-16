<!-- html/VistaArticulosCat.php -->

<!DOCTYPE html>
<html>
<head>

	
	<title> Articulos x Categoria </title>

	<style>

	h3{
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

	<?php foreach($this->art as $a) {?>
	<h3> <?= $a['nombre']?> </h3>
	<p> <?= $a['fecha']?> </p>
	<h3> <?= $a['articulo']?> </h3>
	<?php } ?>

</body>
</html>