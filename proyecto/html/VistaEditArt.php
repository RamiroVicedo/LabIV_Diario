<!-- html/VistaEditArt.php -->

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
	<h2>Editado de Articulo</h2>

	<form method="post"> 
		<?php foreach ($this->art as $a) {} ?>
			<p> <textarea id="titulo" name="titulo" placeholder="Titulo" required><?= $a['nombre']?></textarea>  <br> </p>
		<?php  ?>
			<p> Categoria: &nbsp; 
				<select class="listar" name="categoria">

				<?php 
				foreach ($this->art as $a) {}
				foreach ($this->cat as $c) { 
				 	if ($a['id_categoria'] == $c['id_categoria']) {?>
						<option value="<?= $a['id_categoria']?>"> <?= $c['nombre'] ?></option>
				<?php  } }?>

				<?php 
				foreach ($this->art as $a) {}
				foreach ($this->cat as $c) { 
					if ($a['id_categoria'] != $c['id_categoria']) { ?>
					<option value="<?= $c['id_categoria']?>"> <?= $c['nombre'] ?> </option>
				<?php  } }?>

			 </select> <br> </p>

			<?php foreach ($this->art as $a) {} ?>
			<p> <textarea id="art" name="articulo" placeholder="Articulo" required><?= $a['articulo'] ?></textarea>  <br> </p>
			<?php  ?>

			<p> <input type="submit" name="edit" value="Aceptar"> </p>
			
	</form>

	<form method="post">
			<p> <input type="submit" name="volver" value="Volver al Articulo"> </p>
	</form>

	<form method="post">
			<p> <input type="submit" name="inicio" value="Volver al Inicio"> </p>
	</form>


</body>
</html>