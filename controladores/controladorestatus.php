<?php
	include_once("../datos/cEstatus.php");
	$ope=$_REQUEST['ope'];
	if($ope==NULL){
		$ope=$_GET['ope'];
		if($ope==NULL){
			exit;
		}
	}
	
	switch($ope){
		case 1:

			$objeto= new cEstatus(array($_REQUEST["status"],$_REQUEST["descripcion"]));
			$objeto->guardar();
			{	
				echo "<script language='javascript'> alert('Se Guardo Exitosamente'); </script>";
				echo "<script language\"javascript\"> location.href='../vista/estatus.php';</script>";
				
			
			}
			break;
		case 2:

			$objeto= new cEstatus(array($_REQUEST["id"]));
			$objeto->eliminar();
			{	
				
				echo "<script language='javascript'> alert('Se elimino Exitosamente'); </script>";
				echo "<script language\"javascript\"> location.href='../vista/estatus.php';</script>";
				
			}
			
			break;
		case 3:

			$objeto= new cEstatus(array($_REQUEST["status"],$_REQUEST["descripcion"]));
			$objeto->modificar();
			{	echo "<script language='javascript'> alert('Se Modifico Exitosamente'); </script>";
				echo "<script language\"javascript\"> location.href='../vista/estatus.php';</script>";
				
			}
			
			break;
		
	}
?>