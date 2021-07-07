<?php

//controllers/signup.php

require '../fw/fw.php';
require '../models/Usuarios.php';
require '../views/VistaSignUp.php';

session_start();


$u = new Usuarios();
$usuario = $u->getTodos();

	
if (count($_POST) > 0) {

	if ($_POST['sign']) {

		if (!isset($_POST['nombre'])) {
			die("error signup 1");
		}

		if (!isset($_POST['email'])) {
			die("error signup 2");
			}

		if (isset($_POST['passwd'])) {
			$u->signUp($_POST['nombre'], 
						$_POST['email'], 
						$_POST['passwd']);
			$_SESSION['nombre'] = $_POST['nombre'];
			$_SESSION['logu'] = true;
			header("Location: inicio.php");
		}
		else {
			die("error signup 3");
		}
	}	

	if ($_POST['volver']) {
		header("Location: inicio.php");
	}

	if ($_POST['log']) {
		header("Location: loginusuario.php");
	}
		
}

else{
	$v = new VistaSignUp();
	$v->us = $usuario;
	$v->render();
}