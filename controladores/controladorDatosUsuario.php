<?php
 
 include_once("../clases/cDatosUsuario.php");

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
		$objeto=new cDatosUsuario(array($_POST["nombre"],$_POST["apPat"],$_POST["apMat"],$_POST["email"],$_POST["Id_usuario"]));
			if($objeto->guardar())
			{
			  //echo $_POST["Id_usuario"];
			echo "<script language='javascript'> alert('se guardo exitosamente'); location.href='../pages/menu.php'; </script>";
			}
		break;
		case 2:		
		$objeto=new cDatosUsuario(array($_GET["clave"]));
			if($objeto->eliminar())
			{
			echo "si";
			echo "<script language='javascript'> alert('se elimino exitosamente'); location.href='../formulario/formCarreras.php'; </script>";
			}
		
	}
?>