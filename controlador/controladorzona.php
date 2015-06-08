<?php
	include_once("../datos/cZona.php");
	$ope=$_REQUEST['ope'];
	if($ope==NULL){
		$ope=$_GET['ope'];
		if($ope==NULL){
			exit;
		}
	}
	
	switch($ope){
		case 1:

			$objeto= new cZona(array($_REQUEST["nombre"],$_REQUEST["latitud"],$_REQUEST["longitud"]));
			$objeto->guardar();
			{	
				echo "<script language='javascript'> alert('Se Guardo Exitosamente'); </script>";
				echo "<script language\"javascript\"> location.href='../vista/zona.php';</script>";
				
			
			}
			break;
		case 2:

			$objeto= new cZona(array($_REQUEST["id"]));
			$objeto->eliminar();
			{	
				
				echo "<script language='javascript'> alert('Se elimino Exitosamente'); </script>";
				echo "<script language\"javascript\"> location.href='../vista/zona.php';</script>";
				
			}
			
			break;
		case 3:

			$objeto= new cZona(array($_REQUEST["Id_zona"],$_REQUEST["nombre"],$_REQUEST["latitud"],$_REQUEST["longitud"]));
			$objeto->modificar();
			{	echo "<script language='javascript'> alert('Se Modifico Exitosamente'); </script>";
				echo "<script language\"javascript\"> location.href='../vista/zona.php';</script>";
				
			}
			
			break;
		case 4:

			$objeto= new cZona(array($_REQUEST["id"]));
			$objeto->restaurar();
			{	
				
				echo "<script language='javascript'> alert('Se restaro Exitosamente'); </script>";
				echo "<script language\"javascript\"> location.href='../vista/zona.php';</script>";
				
			}
			
			break;
	}
?>