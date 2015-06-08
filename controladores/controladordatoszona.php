<?php
	include_once("../clases/cDatosZona.php");
	$ope=$_REQUEST['ope'];
	if($ope==NULL){
		$ope=$_GET['ope'];
		if($ope==NULL){
			exit;
		}
	}
	
	switch($ope){
		case 1:

			$objeto= new cDatosZona(array($_REQUEST["longitud"],$_REQUEST["latitud"],$_REQUEST["altitud"],$_REQUEST["pb"],$_REQUEST["radsolar"],$_REQUEST["hr"]));
			$objeto->guardar();
			{	
				echo "<script language='javascript'> alert('Se Guardo Exitosamente'); </script>";
				echo "<script language\"javascript\"> location.href='../index.html';</script>";
				
			
			}
			break;
		case 2:

			$objeto= new cDatosZona(array($_REQUEST["id"]));
			$objeto->eliminar();
			{	
				
				echo "<script language='javascript'> alert('Se elimino Exitosamente'); </script>";
				echo "<script language\"javascript\"> location.href='../vista/cultivo.php';</script>";
				
			}
			
			break;
		case 3:

			$objeto= new cDatosZona(array($_REQUEST["Id_zona"],$_REQUEST["longitud"],$_REQUEST["latitud"],$_REQUEST["altitud"],$_REQUEST["pb"],$_REQUEST["radsolar"],$_REQUEST["hr"],$_REQUEST["status"]));
			$objeto->modificar();
			{	echo "<script language='javascript'> alert('Se Modifico Exitosamente'); </script>";
				echo "<script language\"javascript\"> location.href='../vista/cultivo.php';</script>";
				
			}
			
			break;
		case 4:

			$objeto= new cDatosZona(array($_REQUEST["id"]));
			$objeto->restaurar();
			{	
				
				echo "<script language='javascript'> alert('Se restaro Exitosamente'); </script>";
				echo "<script language\"javascript\"> location.href='../vista/cultivo.php';</script>";
				
			}
			
			break;
	}
?>