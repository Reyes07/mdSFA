 
 <script type="text/javascript" src="../js/funcion.js"></script>
<?php
 
 include_once("../clases/cUsuario.php");

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
		$objeto=new cUsuario(array($_POST["Id_tipoU"],$_POST["nickname"],$_POST["contrasenia"]));
			if($objeto->guardar())
			{
			//echo $_POST["Id_tipoU"],$_POST["nickname"],$_POST["contrasenia"];
			//die();
			echo "<script language='javascript'> alert('se guardo exitosamente'); location.href='../pages/formDatosUsuario.php'; </script>";
			}
		break;
		 case 2:
			$clave=$_GET['clave'];
			$objeto = new cUsuario(array($_GET["clave"]));
			$objeto->eliminar();
			{
			echo "<script language='javascript'> alert('Se elimino Exitosamente'); </script>";
			echo "<script language\"javascript\"> location.href='../index.html';</script>";
			}

		break;
		
	}
?>