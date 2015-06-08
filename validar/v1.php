<?php
session_start();

//echo $_SESSION['puerta'];
if (!isset($_SESSION['puerta']))
	{
		$redir="../plantilla/page-login.php";
		header("Location:" . $redir);
	}

	include("../datos/cConexion.php");
	$nom=addslashes($_POST["nickname"]);
	$passw=addslashes($_POST["contrasenia"]);
	$conex=new cConexion;
	$conex->conectar();

	//echo $_POST["nickname"];
	
	//echo $_POST["nickname"],$_POST["contrasenia"];
	
	$consulta="select * from usuario where nickname='".$nom."' and contrasenia='".$passw."'";
	//$consulta1="select * from datosusuario where Id_usuario='".$Id_usuario."'";
	//echo $consulta;
	//die();  
	
	$resu=$conex->consulta($consulta);
	if($conex->num_rows($resu)<1)
	{
	  
	  session_destroy();	
		
		$redir="usuarionovalido.php";
	  header("Location:" . $redir); 	  
	}
	else
	{
		//echo "reyess";
		$id=$conex->fetch_array($resu);
		if($id['Id_tipoU']=='A')
		{		
		#$_SESSION['Id_tipoU'] = $id['Id_usuario'];
		$_SESSION['administrador'] = $id['nickname'];
		$_SESSION['nickname'] = $nom;
		$redir2="../plantilla/menu.php";
		header("Location:" . $redir2); 
		}
		else 
		{		
		//$_SESSION['Id_tipoU'] = $id['Id_profesor'];
		//$_SESSION['cliente'] = $id['nombre']." ".$id['apPat']." ".$id['apMat'];
		echo"<script languaje='javascript'> alert('Lo sentimos su cuenta es usuario cliente y no tiene acceso al sistema pongase en contacto con el administrador'); location.href='../pages/login.php';</script>";
		
		}
		
		
		
	}
?>
	
