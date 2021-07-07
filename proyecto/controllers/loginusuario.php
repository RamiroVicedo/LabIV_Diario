<?php

//controllers/loginusuario.php

require '../fw/fw.php';
require '../models/Usuarios.php';
require '../views/VistaLoginU.php';

session_start();

$u = new Usuarios();
$usuario = $u->getTodos();
	
if (count($_POST) > 0) {

	if ($_POST['inicio']) {

		$email = $_POST['email'];
		$passwd = sha1($_POST['passwd']); 

		if (!isset($email)) {
			header("Location: login");
		}

		if(isset($passwd)) {
			$usuario = $u->logIn($email, $passwd);
			if(!is_null($usuario)){
				$nombre = $usuario[0];
				$_SESSION['logu'] = true;
				$_SESSION['nombre'] = $nombre['nombre'];
				var_dump($usuario);
				header("Location: cromatico");
			}
			else header("Location: login");
		}
		else header("Location: login");
	}

	if ($_POST['volver']) {
		header("Location: cromatico");
	}

	if ($_POST['empleado']) {
		header("Location: login-empleado");
	}

	if ($_POST['sign']) {
		header("Location: signup");
	}
		
}

else{
	$v = new VistaLoginU();
	$v->us = $usuario;
	$v->render();
}