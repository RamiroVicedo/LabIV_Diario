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



	</style>

</head>
<body>

	<h1> <?= $a['nombre']?> </h1>
	
	<h3> <?= $a['categoria']?> </h3>
	
	<h4> <?= $a['fecha']?> </h4>

	<p> <?= $a['articulo']?> </p>
	<?php } ?>

</body>
</html>