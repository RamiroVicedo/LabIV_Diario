<!-- html/PaginaPrincipal.php -->

<!DOCTYPE html>
<html>
<head>
	
	<title> Cromatico </title>


	<style>

	h1{
		display: flex;
		align-items: center;
		justify-content: center;
	}

	h2{
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

	.articulo{
		border-style: solid;
		border-color: dimgrey;
	}

	#nombre{
		background: white;
		border: hidden;
	}

	#art{
		margin-right: 650px;
		margin-left: 650px;
 	 	display: -webkit-box;
  		overflow: hidden;
  		-webkit-line-clamp: 3;
  		-webkit-box-orient: vertical;

	}

	#mas{
		background: white;
		border: hidden;
	}

	#mas:hover{
		background: lightblue;
	}

	#botonlog{
		margin-left: 1350px;
		margin-top: none;
		margin-bottom: none;
		background: white;
		border: hidden;
		justify-items: right;
	}

	#botonlog:hover{
		background: lightblue;
	}

	.usuario{
		display: unset;
		margin-left: 1350px;
		justify-items: right;
	}

	</style>

</head>
<body>

	<h1> Cromatico </h1>

	<!--Login-->
	<?php if (isset($_SESSION['logu']) || isset($_SESSION['loge'])) { ?>

	<div class="usuario"> <button id="nombre"> <?= $_SESSION['nombre']?> </button> </div>
	
	<form method="post"> 
		<div class="usuario"> <input type="submit" id="salir" name="logfuera" value="Logout"> </div> 
	</form>
	
	<?php } else {?>

	<form method="post"> 
			<input type="submit" id="botonlog" name="log" value="Login">
	</form>

	<?php } ?>


	<!--Chequea login de empleado y habilita sus funciones especificas-->
	<?php if (isset($_SESSION['loge'])) { ?>
	
	<form method="post"> 
		<div class="usuario">
			<input type="submit" name="subir" value="Subir Articulo">
		</div> 
	</form>

	<?php } ?>


	<!--Categorias como boton que dirigen a su pagina especifica-->
	<h3>
	<?php 
	$i = 0;
	foreach ($this->cat as $c) { 
		if ($i < 5) { ?>
		<form method="post">
			<input type="submit" id="mas" name="categoria" value="<?= $c['nombre']?>"> &nbsp;&nbsp;&nbsp;&nbsp;
		</form>
	<?php $i++;} } ?>

		<form method="post">
			<input type="submit" id="mas" name="otras" value="+"> &nbsp;&nbsp;&nbsp;&nbsp;
		</form>
	</h3>


	<!--Barra de busqueda-->
	<h3>
		<form method="post">
			<input type="text" name="termino" placeholder="Buscar">
			<input type="submit" id="mas" name="buscar" value="&#x1f50d">
		</form>
	</h3>

	<br> <br> <br>

	
	<!--Imprime los tres articulos mas recientes-->
	<?php 
	$i = 0;
	foreach ($this->art as $a){
		if ($i < 3) { ?>
			<div class="articulo">
			<h4> <?= $a['nombre'] ?> </h4>
			<p> <?= $a['fecha']?> </p> 
			<p>	<?= $a['categoria']?> </p> 
			<p id="art" > <?= $a['articulo']?> </p> </div> 
			<br>  <br>
	<?php $i++;} } ?>		
	


</body>
</html>