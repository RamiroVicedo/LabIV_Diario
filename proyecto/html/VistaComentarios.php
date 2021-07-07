<!-- html/VistaComentarios.php -->

<!DOCTYPE html>
<html>
<head>

	
	<title> Comentarios </title>

	<style>

	h1{
		display: flex;
		align-items: center;
		justify-content: center;
		font-style: italic;
	}
	
	h3{
		display: flex;
		align-items: center;
		justify-content: center;
	}

	h6{
		display: flex;
		align-items: center;
		justify-content: center;
	}

	textarea{
		width: 600px;
		height: 150px;
	}

	.comentario{
		border-style: solid;
		border-color: dimgrey;
		margin-left: auto;
  		margin-right: auto;
		width: 27%;
		border: 1px solid #c4cebc;
		border-right: none;
  		border-left: none;
		padding: 5px;
		background: white;
		border-radius: 5px;
	}

	#comment{
		display: flex;
		text-align: left;
		text-align: justify-all;
		margin-left: none;
  		margin-right:none;
		width: 27%;
	}

	.fecha{
		font-size: small;
	}

	</style>
</head>
<body>

	<?php 	foreach($this->art as $a){	 ?>
		<h1><?= $a['nombre']?></h1>
	<?php 	} ?>

	<?php foreach($this->com as $c) {?>
	<div class="comentario">
	<p id="comment">-<?= $c['comentario']?></p>
	<div class="fecha"><p> <?= $c['fecha']?> </p></div>
	</div>
	<?php } ?>

	<br> <br>


	<?php 	if(isset($_SESSION['logu']) or isset($_SESSION['loge']))	{ ?>
	<form method="post">
		<h6><textarea name="comentario"></textarea> </br></h6>
		
		<h6><input type="submit" name="" value="Enviar"></h6>
	</form>
	<?php 	} ?>

	<form method="post">
		<h6><input type="submit" name="volver" value="Volver al Articulo"> </h6>
	</form>

</body>
</html>