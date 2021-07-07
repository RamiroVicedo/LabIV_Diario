<!-- html/VistaBusqueda.php -->

<!DOCTYPE html>
<html>
<head>
	
	<title> Busqueda </title>


	<style>

	h1{
		display: flex;
		align-items: center;
		justify-content: center;
		font-style: italic;
	}

	h2{
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

	h4{
		display: flex;
		align-items: center;
		justify-content: center;
	}	

	h5{
		display: flex;
		align-items: center;
		justify-content: center;
	}

	h6{
		display: flex;
		align-items: center;
		justify-content: center;
	}

	p{
		display: flex;
		align-items: center;
		justify-content: center;
	}

	#mas{
		background: white;
		border: none;
		display: flex;
		text-align: left;
		text-align: justify-all;
		margin-left: auto;
		margin-right: auto;
	}

	#mas:hover{
		background: lightblue;
	}

	.articulo{
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

	#artnombre{
		font-style: italic;
		border: 1px solid #c4cebc;
		border-right: none;
		border-left: none;
		text-align: center;
		text-align: justify-all;
		margin-left: auto;
  		margin-right: auto;
		max-width: 60%;
		padding: 5px;
	}

	#artcat{
		border: 1px solid #c4cebc;
		border-right: none;
		border-left: none;
		text-align: center;
		text-align: justify-all;
		margin-left: auto;
  		margin-right: auto;
		max-width: 18%;
		padding: 2px;
	}

	#artfecha{
		font-size: small;
		border: 1px solid #c4cebc;
		border-right: none;
		border-left: none;
		text-align: center;
		text-align: justify-all;
		margin-left: auto;
  		margin-right: auto;
		max-width: 15%;
		padding: 2px;
	}

	#art{
		display: -webkit-box;
	  	overflow: hidden;
	  	-webkit-line-clamp: 3;
	  	-webkit-box-orient: vertical;

	}

	.barrabusc{
		text-align: center;
		text-align: justify-all;
		margin-left: auto;
  		margin-right: auto;
		width: 27%;
		border-right: none;
		border-left: none;
		border-top: none;
		padding: 5px;
		color: white;
		border-radius: 5px;
	}

	#mas{
		background: inherit;
		border: hidden;
	}

	</style>

</head>
<body>


	<h1>Cromatico</h1>
	<div class="barrabusc">
		<form method="post">
			<input type="text" name="termino" placeholder="Buscar">
			<input type="submit" id="mas" name="buscar" value="&#x1f50d">
		</form>
	</div>
	</div>

	<br>

	<!--Imprime los resultados de la busqueda donde coincide el nombre y guarda las id de los articulos en un array --> 
	<?php 
	$art = array();
	$i = 1;

	foreach($this->busn as $b) {?>
	<div class="articulo">
	<h3 id="artnombre"> <?= $b['nombre']?> </h3>

	<h4 id="artcat">  <?= $b['categoria']?> </h4>
	<h6 id="artfecha"><?= $b['fecha']?></h6>

	<p id="art"> <?= $b['articulo']?> </p>
	<h5><form method="post"> 
			<input type="hidden" name="articulo" value="<?= (int) $b['id_articulo']?>">
			<input type="submit" name="" value="Leer..." id="mas"> 
		</form></h5>

	</div>
	<br>
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
	<div class="articulo">
	<h2 id="artnombre"> <?= $b['nombre']?> </h2>

	<h4 id="artcat"> <?= $b['categoria']?> </h4>
	<h6 id="artfecha"> <?= $b['fecha']?></h6>

	<p id="art"> <?= $b['articulo']?> </p>
	<h5><form method="post"> 
			<input type="hidden" name="articulo" value="<?= (int) $b['id_articulo']?>">
			<input type="submit" name="" value="Leer..." id="mas"> 
		</form></h5>
	</div>
	<br>
	<?php  } } ?>

	<form method="post">
			<p> <input type="submit" name="inicio" value="Volver al Inicio"> </p>
	</form>


</body>
</html>
