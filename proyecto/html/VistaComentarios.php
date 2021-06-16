<!-- html/VistaComentarios.php -->

<!DOCTYPE html>
<html>
<head>

	
	<title> Comentarios </title>

</head>
<body>

	<?php foreach($this->com as $c) {?>
	<h3> <?= $c['comentario']?> </h3>
	<p> <?= $c['fecha']?> </p>
	<?php } ?>

</body>
</html>