<!-- html/VistaCategorias.php -->

<!DOCTYPE html>
<html>
<head>

	
	<title> Categorias </title>

</head>
<body>

	<?php foreach($this->cat as $c) {?>
	<h3> <?= $c['nombre']?> </h3>
	<?php } ?>

</body>
</html>