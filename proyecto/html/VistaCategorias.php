<!-- html/VistaCategorias.php -->

<!DOCTYPE html>
<html>
<head>

	
	<title> Categorias </title>

	<style>
		
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


	</style>

</head>
<body>

	<?php foreach($this->cat as $c) {?>
	<h3> <?= $c['nombre']?> </h3>
	<?php } ?>


	<form method="post">	
		<p> <input type="submit" name="inicio" value="Volver a Inicio"> </p>
	</form>

</body>
</html>