<!-- html/VistaCategorias.php -->

<!DOCTYPE html>
<html>
<head>

	
	<title> Categorias </title>

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
	}
		
	h2{
		text-align: center;
		text-align: justify-all;
		margin-left: auto;
  		margin-right: auto;
		width: 37%;
		display: flex;
		align-items: center;
		justify-content: center;
		border: 1px solid #c4cebc;
		border-right: none;
		border-left: none;
		padding: 5px;
		border-radius: 5px;
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

	form{
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.categorias{
		margin-top: 5%;
	}

	.articulo{
		display: none;
		text-align: center;
		text-align: justify-all;
		margin-left: auto;
  		margin-right: auto;
		width: 27%;
		border: 1px solid #c4cebc;
		padding: 5px;
		border-radius: 5px;
		overflow: hidden;
	  	-webkit-line-clamp: 3;
	  	-webkit-box-orient: vertical;
	}

	#art{
	  	overflow: hidden;
	  	-webkit-line-clamp: 3;
	  	-webkit-box-orient: vertical;
	}

	#sobre{
		border: none;
		font-style: italic;
	}


	</style>

</head>
<body>

	<h1>Cromatico</h1>
	<h2 id="sobre">Categorias</h2>

	<div class="categorias">
	<!--Imprime las categorias y debajo el articulo mas reciente de cada unas, los cuales estan escondidos.-->
	<?php 
	foreach($this->cat as $c) { 
		$i = 0;?>
		<div id="<?= $c['nombre']?>">
		<h2> <?= $c['nombre']?> </h2>
	<?php foreach($this->art as $a)	{ 
		if ($c['nombre'] == $a['categoria'] || $i == 1) { ?>
		<div class="articulo" id="art<?= $c['nombre']?>">
			<h3> <?= $a['nombre']?> </h3>
			<p> <?= $a['articulo']?> </p>
			<form method="post"> 
				<input type="hidden" name="articulo" value="<?= (int) $a['id_articulo']?>">
				<input type="submit" name="" value="Leer"> 
			</form>
			<br>
			<form method="post"> 
				<input type="hidden" name="mas" value="<?= (int) $c['id_categoria']?>">
				<input type="submit" name="" value="Ver Mas"> 
			</form>
			<br>
		</div>
		</div>
	<?php } }$i = 1; } ?>
	</div>

	<script type="text/javascript">

		"use strict"

		<?php foreach($this->cat as $c) { ?>
		document.getElementById("<?= $c['nombre']?>").addEventListener("mouseover", mouseOver<?= $c['id_categoria']?>);
		document.getElementById("<?= $c['nombre']?>").addEventListener("mouseout", mouseOut<?= $c['id_categoria']?>);

		function mouseOver<?= $c['id_categoria']?>(){
			document.getElementById("art<?= $c['nombre']?>").style.display = "-webkit-box";
		}

		function mouseOut<?= $c['id_categoria']?>(){
			document.getElementById("art<?= $c['nombre']?>").style.display = "none";
		}



		<?php 	} ?>		
	</script>

	<form method="post">	
		<p> <input type="submit" name="inicio" value="Volver a Inicio"> </p>
	</form>

</body>
</html>