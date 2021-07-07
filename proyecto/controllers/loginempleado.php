<?php

//controllers/loginempleado.php

require '../fw/fw.php';
require '../models/Empleados.php';
require '../views/VistaLoginE.php';

session_start();

$e = new Empleados();
$empleado = $e->getTodos();

if (count($_POST) > 0) {

	if ($_POST['inicio']) {

		$email = $_POST['email'];
		$passwd = sha1($_POST['passwd']); 

		if (!isset($email)) {
			header("Location: login-empleado");
		}

		if(isset($passwd)) {
			$empleado = $e->logIn($email, $passwd);
			if(!is_null($empleado)){
				$nombre = $empleado[0];
				$_SESSION['loge'] = true;
				$_SESSION['nombre'] = $nombre['nombre'];
				header("Location: cromatico");
			}
			else header("Location: login-empleado");
		}
		else header("Location: login-empleado");
	}

	if ($_POST['volver']) {
		header("Location: cromatico");
	}

	if ($_POST['usuario']) {
		header("Location: login");
	}
		
}

$v = new VistaLoginE();
$v->em = $empleado;
$v->render();