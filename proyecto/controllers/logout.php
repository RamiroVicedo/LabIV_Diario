<?php 	

	session_start();

	unset($_SESSION['logu']);
	unset($_SESSION['loge']);
	unset($_SESSION['nombre']);

	header("Location: inicio.php");

