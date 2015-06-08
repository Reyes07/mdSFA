<?php
	include_once("../clases/cCultivo.php");
	$ope=$_REQUEST['ope'];
	if($ope==NULL){
		$ope=$_GET['ope'];
		if($ope==NULL){
			exit;
		}
	}
	
	switch($ope){
		case 1:
                $target_path = "../imagenes/imgCultivos/";
                $target_path = $target_path . basename( $_FILES['direccion']['name']);
				if(move_uploaded_file($_FILES['direccion']['tmp_name'], $target_path)) { 
				//echo "El archivo ". basename( $_FILES['direccion']['name']). " ha sido subido";
                 } else{
                 echo "Ha ocurrido un error, trate de nuevo!";
                 }
		       
			$objeto= new cCultivo(array($_REQUEST["nombre"],$target_path,$_REQUEST["HR"],$_REQUEST["pre_pluvial"],$_REQUEST["tempMax"],$_REQUEST["tempMin"],$_REQUEST["tempRecomendada"]));
			$objeto->guardar();
			{	
				echo "<script language='javascript'> alert('Se Guardo Exitosamente'); </script>";
				echo "<script language\"javascript\"> location.href='../plantilla/menu.php';</script>";
				

			
			}
			break;

		
        case 2:
			$clave=$_GET['clave'];
			$objeto = new cCultivo(array($_GET["clave"]));
			$objeto->eliminar();
			{
			echo "<script language='javascript'> alert('Se elimino Exitosamente'); </script>";
			echo "<script language\"javascript\"> location.href='../index.html';</script>";
			}

		break;




		case 3:
		
		                  
                /**$target_path = "../imagenes/imgCultivos/";
                $target_path = $target_path . basename( $_FILES['direccion']['name']);
				if(move_uploaded_file($_FILES['direccion']['tmp_name'], $target_path)) { 
				echo "El archivo ". basename( $_FILES['direccion']['name']). " ha sido subido";
                 } else{
                 echo "Ha ocurrido un error, trate de nuevo!";
                 }**/

			$objeto= new cCultivo(array($_REQUEST["Id_cultivo"],$_REQUEST["nombre"],$_REQUEST['direccion'],$_REQUEST["HR"],$_REQUEST["pre_pluvial"],$_REQUEST["tempMax"],$_REQUEST["tempMin"],$_REQUEST["tempRecomendada"],$_REQUEST["status"]));
			$objeto->modificar();
			
			{	echo "<script language='javascript'> alert('Se Modifico Exitosamente'); </script>";
				#echo "<script language\"javascript\"> location.href='../pages/menu.php';</script>";
				
			}
			
			break;
		case 4:

			$objeto= new cCultivo(array($_REQUEST["id"]));
			$objeto->restaurar();
			{	
				
				echo "<script language='javascript'> alert('Se restaro Exitosamente'); </script>";
				echo "<script language\"javascript\"> location.href='../pages/menu.php';</script>";
				
			}
			
			break;
	}
?>