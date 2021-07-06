<!-- html/VistaLoginE.php -->
<!DOCTYPE html>
<html>
<head>
	
	<title>  </title>


	<style>

	h1{
		display: flex;
		align-items: center;
		justify-content: center;
	}

	p{
		display: flex;
		align-items: center;
		justify-content: center;
	}

	#cuadro{
		width: 500px ;
		height: 200px;
		margin-left: 37%;
		margin-top: 15%;
		border-style: solid;
		border-width: 2px;
		border-color: dimgrey;
		background: lightblue ;
	}

	#retorno{
		margin-left: 705px;
	}

	#texto{
		height: 30px;
		width: 400px;
		font-size: 15px;
	}

	</style>

</head>
<body>

	<h1> Cromatico </h1>
	
		<form action="" method="post" id="cuadro">
		<p>
			<input type="text" name="email" id="texto" /> <br>
		</p>
		<p>
			<input type="password" name="passwd" id="texto"> <br>
			<br>
		</p>
		<p>
			<input type="submit" name="inicio" value="Iniciar Sesion"/>
		</p>
		</form>	

		<br>

		<form method="post">
			<input type="submit" id="retorno" name="volver" value="Volver a Inicio">
			<input type="submit" name="usuario" value="Usuarios">
		</form>
	
	
</body>
</html>