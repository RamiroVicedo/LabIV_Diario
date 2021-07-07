<!-- html/VistaLoginU.php -->


<!DOCTYPE html>
<html>
<head>
	
	<title>  </title>


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

	p{
		display: flex;
		align-items: center;
		justify-content: center;
	}

	#cuadrolog{
		width: 500px ;
		height: 165px;
		margin-left: auto;
		margin-right: auto;
		margin-top: 10%;
		border-style: solid;
		border-width: 2px;
		border-color: dimgrey;
		background: lightblue ;
	}


	#retorno{
		display: flex;
		margin-left: auto;
		margin-right: auto;
		align-items: center;
		margin-bottom: 5px;
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
	
		<h2>Inicio de Sesion</h2>
		<form method="post" id="cuadrolog">
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
			<input type="submit" id="retorno" name="empleado" value="Empleados">
			<input type="submit" id="retorno" name="sign" value="Signup">
		</form>
	
	
</body>
</html>