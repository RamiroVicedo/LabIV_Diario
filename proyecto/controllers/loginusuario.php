<?php

//controllers/loginusuario.php

require '../fw/fw.php';
require '../models/Usuarios.php';
require '../views/VistaLoginU.php';

session_start();


$u = new Usuarios();
$usuario = $u->getTodos();

	
if (count($_POST) > 0) {

	if ($_POST['inicio'] == "Iniciar Sesion") {

		$email = $_POST['email'];
		$passwd = $_POST['passwd']; 

		foreach ($usuario as $u)	{
			if ($email == $u['email'] && $passwd == $u['password']){
				$_SESSION['logu'] = true;
				$_SESSION['nombre'] = $u['nombre'];
				header("Location: inicio.php");
			}
			else header("Location: loginusuario.php");
		}	
	}

	if ($_POST['volver'] == "Volver a Inicio") {
		header("Location: inicio.php");
	}

	if ($_POST['empleado'] == "Empleados") {
		header("Location: loginempleado.php");
	}
		
}

else{
	$v = new VistaLoginU();
	$v->us = $usuario;
	$v->render();
}