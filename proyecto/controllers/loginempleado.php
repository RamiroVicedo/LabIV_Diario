<?php

//controllers/loginempleado.php

require '../fw/fw.php';
require '../models/Empleados.php';
require '../views/VistaLoginE.php';

session_start();

$e = new Empleados();
$empleado = $e->getTodos();

if (count($_POST) > 0) {

	if ($_POST['inicio'] == "Iniciar Sesion") {

		$email = $_POST['email'];
		$passwd = $_POST['passwd']; 

		foreach ($empleado as $e)	{
			if ($email == $e['email'] && $passwd == $e['password']){
				$_SESSION['loge'] = true;
				$_SESSION['nombre'] = $e['nombre'];
				header("Location: inicio.php");
			}
			else header("Location: loginempleado.php");
		}	
	}

	if ($_POST['volver'] == "Volver a Inicio") {
		header("Location: inicio.php");
	}

	if ($_POST['usuario'] == "Usuarios") {
		header("Location: loginusuario.php");
	}
		
}

$v = new VistaLoginE();
$v->em = $empleado;
$v->render();