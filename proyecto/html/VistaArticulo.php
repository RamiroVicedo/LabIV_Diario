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
		font-style: italic;
		max-width: 27.5%;
		text-align: center;
		text-align: justify-all;
		margin-left: auto;
  		margin-right: auto;
  		border: 1px solid #c4cebc;
		border-right: none;
		border-left: none;
		border-top: none;
		padding: 5px;
		border-radius: 5px;
	}

	h2{
		display: flex;
		align-items: center;
		justify-content: center;
		max-width: 27.5%;
		text-align: center;
		text-align: justify-all;
		margin-left: auto;
  		margin-right: auto;
	}

	h3{
		display: flex;
		align-items: center;
		justify-content: center;
	}

	h4{
		text-align: left;
		text-align: justify-all;
		margin-left: auto;
  		margin-right: auto;
		width: 27%;
	}

	h6{
		display: flex;
		text-align: left;
		text-align: justify-all;
		margin-left: auto;
  		margin-right: auto;
		width: 27%;
	}


	p{

	}

	form{
		display: flex;
		align-items: center;
		justify-content: center;
	}	

	#articulo{
		border-style: solid;
		border-color: dimgrey;
		text-align: center;
		text-align: justify-all;
		margin-left: auto;
  		margin-right: auto;
		width: 27%;
		border: 2px solid #c4cebc;
		border-right: none;
  		border-left: none;
		padding: 5px;
		background: white;
		border-radius: 5px;
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

	<h1>Cromatico</h1>

	<h2> <?= $a['nombre']?> </h2>
	
	<h4> <?= $a['categoria']?> </h4>
	
	<h6> <?= $a['fecha']?> </h6>

	<p id="articulo"> <?= $a['articulo']?> </p>
	<?php } ?>

	<br>

	<h3>Comentarios</h3>

	<?php  $i = 0;
	foreach ($this->com as $c) {
		if ($i < 3){ ?>
			<div class="comentario">
				<p id="comment"> -<?= $c['comentario'] ?> </p>
				<div class="fecha"><p id="comment"><?= $c['fecha'] ?> </p></div>
			</div>

	<?php } } ?>

	<?php if (isset($_SESSION['loge'])) { ?>
	<p>
		<form method="post"> 

			<input type="submit" name="Editar" value="Editar Articulo">

		</form> 
	</p>
	<?php } ?>
	

	<p>
		<form method="post">
			
			<input type="submit" name="Comentarios" value="Ver Todos los Comentarios">

		</form>
	</p>
	<p>
		<form method="post">

			<input type="submit" name="Inicio" value="Volver al Inicio">

		</form>
	</p>


</body>
</html>