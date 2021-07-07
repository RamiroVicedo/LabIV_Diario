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

	</style>

</head>
<body>

	<h1>Cromatico</h1>
	<?php foreach ($this->cat as $c) {  ?>
		<h2><?= $c['nombre']?></h2>
	<?php } ?>
	<br>

	<?php foreach($this->art as $a) {?>
	<div class="articulo">
		<h3 id="artnombre"> <?= $a['nombre']?> </h3>
		<h6 id="artfecha"> <?= $a['fecha']?> </h6>
		<p id="art"> <?= $a['articulo']?></p>
		<h5><form method="post"> 
			<input type="hidden" name="articulo" value="<?= (int) $a['id_articulo']?>">
			<input type="submit" name="" value="Leer..." id="mas"> 
		</form></h5>
	</div> <br>
	<?php } ?>

	<form method="post">	
		<p>	<input type="submit" name="categorias" value="Volver a Categorias"> </p>
	</form>

	<form method="post">	
		<p> <input type="submit" name="inicio" value="Volver a Inicio"> </p>
	</form>

</body>
</html>