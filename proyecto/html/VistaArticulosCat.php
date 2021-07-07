<!-- html/VistaArticulosCat.php -->

<!DOCTYPE html>
<html>
<head>

	
	<title> Articulos x Categoria </title>

	<style>

	h1{
		display: flex;
		align-items: center;
		justify-content: center;
	}

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

	<?php foreach ($this->cat as $c) {  ?>
		<h1><?= $c['nombre']?></h1>
	<?php } ?>

	<?php foreach($this->art as $a) {?>
	<h3> <?= $a['nombre']?> </h3>
	<p> <?= $a['fecha']?> </p>
	<h3> <?= $a['articulo']?> </h3>
	<?php } ?>

	<form method="post">	
		<p>	<input type="submit" name="categorias" value="Volver a Categorias"> </p>
	</form>

	<form method="post">	
		<p> <input type="submit" name="inicio" value="Volver a Inicio"> </p>
	</form>

</body>
</html>