<?php
 
 include_once("../clases/cTemperatura.php");

$ope=$_REQUEST['ope'];
	if($ope==null)
	{
		$ope=$_GET['ope'];
		if($ope==null)
		{
			exit;
		}
	}
	
	switch ($ope)
	{
		case 1:		
		$objeto=new cTemperatura(array($_POST["tempMax"],$_POST["tempMin"],$_POST["fecha"]));
			if($objeto->guardar())
			{
			//echo $_POST["tempMax"],$_POST["tempMin"],$_POST["fecha"];
			echo "<script language='javascript'> alert('se guardo exitosamente'); location.href='../pages/menu.php'; </script>";
			}
		break;
		case 2:		
		$objeto=new cTemperatura(array($_GET["clave"]));
			if($objeto->eliminar())
			{
			//echo "si";
			echo "<script language='javascript'> alert('se elimino exitosamente'); location.href='../formulario/formCarreras.php'; </script>";
			}
		
	}
?>