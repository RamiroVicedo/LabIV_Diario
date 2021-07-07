<!-- html/PaginaPrincipal.php -->

<!DOCTYPE html>
<html>
<head>
	
	<title> Cromatico </title>


	<style>

	body{
		
	}

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
		display: flex;
		align-items: center;
		justify-content: center;
		background: white;
	}

	h3{
		display: flex;
		align-items: center;
		justify-content: center;
		background: white;
	}

	h4{
		display: flex;
		align-items: center;
		justify-content: center;
		background: white;
	}

	p{
		display: flex;
		align-items: center;
		justify-content: center;
		background: white;
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

	#nombre{
		background: white;
		border: none;
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

	#mas{
		background: inherit;
		border: hidden;
	}

	#mas:hover{
		background: lightblue;
	}

	#botonlog{
		background: white;
		border: none;
		display: flex;
		text-align: left;
		text-align: justify-all;
		margin-left: auto;
		margin-right: auto;
	}

	#botonlog:hover{
		background: lightblue;
	}

	.usuario{
		display: flex;
		text-align: left;
		text-align: justify-all;
		margin-left: auto;
  		margin-right: auto;
		width: 27%;
	}

	.categorias{
		border-style: solid;
		border-color: dimgrey;
		text-align: center;
		text-align: justify-all;
		margin-left: auto;
  		margin-right: auto;
		width: 27%;
		border: 1px solid #c4cebc;
		border-right: none;
		border-left: none;
		padding: 5px;
		color: white;
		border-radius: 5px;
	}

	.barrabusc{
		border-style: solid;
		border-color: dimgrey;
		text-align: center;
		text-align: justify-all;
		margin-left: auto;
  		margin-right: auto;
		width: 27%;
		border: 1px solid #c4cebc;
		border-right: none;
		border-left: none;
		border-top: none;
		padding: 5px;
		color: white;
		border-radius: 5px;
	}

	</style>

</head>
<body>

	<h1> Cromatico </h1>


	<div class="barrasup">
	<!--Categorias como boton que dirigen a su pagina especifica-->
	<div class="categorias">
	<form method="post">
	<?php 
	$i = 0;
	foreach ($this->cat as $c) { 
		if ($i < 5) { ?>
			<input type="submit" id="mas" name="categoria" value="<?= $c['nombre']?>"> &nbsp;&nbsp;&nbsp;&nbsp;
	<?php $i++;} } ?>
			<input type="submit" id="mas" name="otras" value="+">;
	</form>
	</div>

	<!--Barra de busqueda-->
	<div class="barrabusc">
		<form method="post">
			<input type="text" name="termino" placeholder="Buscar">
			<input type="submit" id="mas" name="buscar" value="&#x1f50d">
		</form>
	</div>
	</div>

	<br>


	<!--Login-->
	<?php if (isset($_SESSION['logu']) || isset($_SESSION['loge'])) { ?>
	<div class="usuario"> <button id="nombre"> <?= $_SESSION['nombre']?> </button> </div>
	
	<div class="usuario">
	<form method="post"> 
		<input type="submit" id="salir" name="logfuera" value="Logout"> 
	</form>
	
	<?php } else {?>

	<form method="post"> 
			<input type="submit" id="botonlog" name="log" value="Login">
	</form>

	<?php } ?>


	<!--Chequea login de empleado y habilita sus funciones especificas-->
	<?php if (isset($_SESSION['loge'])) { ?>
	
	<form method="post"> 
			<input type="submit" name="subir" value="Subir Articulo">
	</form>
	</div> 

	<?php } ?>

	<br>

	
	<!--Imprime los tres articulos mas recientes-->
	<?php 
	$i = 0;
	foreach ($this->art as $a){
		if ($i < 3) { ?>
			<div class="articulo">
				<h2 id="artnombre"> <?= $a['nombre'] ?> </h2> 
				<p id="artcat">	<?= $a['categoria']?> </p>
				<p id="artfecha"> <?= $a['fecha']?> </p> 
				<p id="art" > <?= $a['articulo']?> </p> 
			<p><form method="post"> 
				<input type="hidden" name="articulo" value="<?= (int) $a['id_articulo']?>">
				<input type="submit" name="" value="Leer..." id="mas"> 
			</form></p>
			</div> 
			<br> 
	<?php $i++;} } ?>		
	


</body>
</html>