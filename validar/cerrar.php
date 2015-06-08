<?php
	
	session_start();
	
	$_SESSION["administrador"];
	$_SESSION["cliente"];
	unset($_SESSION["nickname"]);
	unset($_SESSION["contrasenia"]);
	session_destroy();
	header("Location:../plantilla/page-login.php");
	exit;
	?>
