<?php
	include_once("../datos/cCultivo.php");
	$ope=$_REQUEST['ope'];
	if($ope==NULL){
		$ope=$_GET['ope'];
		if($ope==NULL){
			exit;
		}
	}
	
	switch($ope){
		case 1:

			$objeto= new cCultivo(array($_REQUEST["nombre"],$_REQUEST["hr"],$_REQUEST["prepluvial"],$_REQUEST["tempmax"],$_REQUEST["tempmin"],$_REQUEST["temprecomendada"],$_REQUEST["status"]));
			$objeto->guardar();
			{	
				
				//echo "<script language='javascript'> alert('Se Guardo Exitosamente'); </script>";
				
              echo "<meta http-equiv='Refresh' content='content='0;../pages/formCultivo.php?correcto'>";
				
			
			}
			break;
		case 2:

			$objeto= new cCultivo(array($_REQUEST["id"]));
			$objeto->eliminar();
			{	
				
				echo "<script language='javascript'> alert('Se elimino Exitosamente'); </script>";
				echo "<script language\"javascript\"> location.href='../vista/cultivo.php';</script>";
				
			}
			
			break;
		case 3:

			$objeto= new cCultivo(array($_REQUEST["Id_cultivo"],$_REQUEST["nombre"],$_REQUEST["hr"],$_REQUEST["prepluvial"],$_REQUEST["tempmax"],$_REQUEST["tempmin"],$_REQUEST["temprecomendada"],$_REQUEST["status"]));
			$objeto->modificar();
			{	echo "<script language='javascript'> alert('Se Modifico Exitosamente'); </script>";
				echo "<script language\"javascript\"> location.href='../vista/cultivo.php';</script>";
				
			}
			
			break;
		case 4:

			$objeto= new cCultivo(array($_REQUEST["id"]));
			$objeto->restaurar();
			{	
				
				echo "<script language='javascript'> alert('Se restaro Exitosamente'); </script>";
				echo "<script language\"javascript\"> location.href='../vista/cultivo.php';</script>";
				
			}
			
			break;
	}
?>