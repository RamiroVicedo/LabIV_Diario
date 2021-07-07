<!-- html/SubirArticulo.php -->

<!DOCTYPE html>
<html>
<head>

	<title></title>

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

	p{
		display: flex;
		align-items: center;
		justify-content: center;
	}

	#titulo{
		width: 600px;
		height: 75px;
		font-size: 25px;
	}
		
	#art{
		width: 600px;
		height: 500px;
		font-size: 17px;
	}

	</style>

</head>
<body>

	<h1>Cromatico</h1>
	<h2>Subida de Articulo</h2>

	<form method="post"> 
			<p> <textarea id="titulo" name="titulo" placeholder="Titulo" required></textarea>  <br> </p>
			<p> Categoria: &nbsp; <select class="listar" name="categoria">
					<option value="" disabled selected> Elegir Categoria</option>
				<?php foreach ($this->cat as $c) { ?>
					<option value="<?= $c['id_categoria']?>"> <?= $c['nombre'] ?> </option>
				<?php 	 }	 ?>


			 </select> <br> </p>
			<p> <textarea id="art" name="articulo" placeholder="Articulo" required></textarea>  <br> </p>

			<p> <input type="submit" name="subida" value="Subir"> </p>
	</form>

	<form method="post">
			<p> <input type="submit" name="inicio" value="Volver al Inicio"> </p>
	</form>

</body>
</html>