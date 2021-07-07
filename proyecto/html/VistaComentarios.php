<!-- html/VistaComentarios.php -->

<!DOCTYPE html>
<html>
<head>

	
	<title> Comentarios </title>

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

	textarea{
		width: 600px;
		height: 150px;
	}

	</style>
</head>
<body>

	<?php foreach($this->com as $c) {?>
	<h3> <?= $c['comentario']?> </h3>
	<p> <?= $c['fecha']?> </p>
	<?php } ?>

	<br> <br>


	<?php 	if(isset($_SESSION['logu']) or isset($_SESSION['loge']))	{ ?>
	<form method="post">
		<p><textarea name="comentario"></textarea></p>

		<p><input type="submit" name="" value="Enviar"></p>
	</form>
	<?php 	} ?>

	<form method="post">
		<p><input type="submit" name="volver" value="Volver al Articulo"> </p>
	</form>

</body>
</html>