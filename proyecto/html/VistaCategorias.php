<!-- html/VistaCategorias.php -->

<!DOCTYPE html>
<html>
<head>

	
	<title> Categorias </title>

	<style>
		
	h2{
		text-align: center;
		text-align: justify-all;
		margin-left: auto;
  		margin-right: auto;
		width: 37%;
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

	form{
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.articulo{
		display: none;
		text-align: center;
		text-align: justify-all;
		margin-left: auto;
  		margin-right: auto;
		width: 37%;
		border: 1px solid #c4cebc;
		padding: 5px;
		background: #4758d6;
		color: white;
		border-radius: 4px;
	}


	</style>

</head>
<body>

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
			<form method="post"> 
				<input type="hidden" name="mas" value="<?= (int) $c['id_categoria']?>">
				<input type="submit" name="" value="Ver Mas"> 
			</form>
		</div>
		</div>
	<?php } }$i = 1; } ?>


	<script type="text/javascript">

		"use strict"

		<?php foreach($this->cat as $c) { ?>
		document.getElementById("<?= $c['nombre']?>").addEventListener("mouseover", mouseOver<?= $c['id_categoria']?>);
		document.getElementById("<?= $c['nombre']?>").addEventListener("mouseout", mouseOut<?= $c['id_categoria']?>);

		function mouseOver<?= $c['id_categoria']?>(){
			document.getElementById("art<?= $c['nombre']?>").style.display = "block";
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