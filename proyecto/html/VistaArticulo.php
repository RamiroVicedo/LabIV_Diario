<!-- html/VistaArticulo.php -->

<!DOCTYPE html>
<html>
<head>

	<?php foreach($this->art as $a){ ?>
	<title> <?=  $a['nombre'] ?> </title>

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

	form{
		display: flex;
		align-items: center;
		justify-content: center;
	}	


	</style>

</head>
<body>

	<h1> <?= $a['nombre']?> </h1>
	
	<h3> <?= $a['categoria']?> </h3>
	
	<h4> <?= $a['fecha']?> </h4>

	<p> <?= $a['articulo']?> </p>
	<?php } ?>

	<br>

	
	<p>
		<form method="post"> 

			<input type="submit" name="Editar" value="Editar Articulo">

		</form> 
	</p>

	<?php  $i = 0;
	foreach ($this->com as $c) {
		if ($i < 5){ ?>
			<h4>	<?= $c['comentario'] ?> </h4>
			<p>	<?= $c['fecha'] ?> </p>
	<?php } } ?>

	<p>
		<form method="post">
			
			<input type="submit" name="Comentarios" value="Ver Comentarios">

		</form>
	</p>

</body>
</html>