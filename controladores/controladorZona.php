<?php

 	include_once("../clases/cZona.php");
	$ope=$_REQUEST['ope'];
	if($ope==NULL){
		$ope=$_GET['ope'];
		if($ope==NULL){
			exit;
		}
	}

	switch ($ope) {
		case 1:
			$objeto= new cZona(array($_POST["nombre"]));
			$objeto->guardar();
			//echo $_POST["nombre"];
			echo "<script language='javascript'> alert('Se Guardo Exitosamente'); </script>";
			echo "<script language\"javascript\"> location.href='../index.html';</script>";
			break;
		
		default:
			# code...
			break;
	}


?>