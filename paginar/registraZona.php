<?php

	include_once('../../datos/cConexion.php');
	include_once('../../datos/cZona.php');



$ope=1;
$nombre='Registre una zona';
$latitud='Escriba la latitud';
$longitud='Escriba la longitud';
$va1='';
$va2='';
$va3='';
$id=0;
if(isset($_REQUEST['op']))
{
	$ope=isset($_REQUEST['op']);
}
else
{
	$ope=1;
}
switch($ope){
	case 3:
	$ope=3;
	$con = new cConexion();
	$con->conectar();
	$tmp=new cZona(NULL);
	$id=$_REQUEST['id'];
	$objetos=$tmp->listarZona("select * from zona where Id_zona='".$id."' and status='A'");
	foreach($objetos as $elemento)
		{
		
			$nombre = $elemento->getnombre();
			$latitud = $elemento->getlatitud();

			$longitud = $elemento->getlongitud();
			$va1=$nombre;
			$va2=$latitud;
			$va3=$longitud;
		}
	break;
}
echo"
   <form id='guardar' action='../controlador/controladorzona.php' method='POST' rol='form' style='text-align:center;'>
     <center>
      <div class='row'>
      <input type='hidden' name='ope' value='".$ope."'>
      <input type='hidden' name='Id_zona' value='".$id."'>
	       <p><label for='nombre'>Nombre Zona</label>
		    <input type='text' name='nombre' id='nombre' value='".$va1."' placeholder='".$nombre."' class='col-sm-3 control-label'/></p>
	   </div>
	   <div class='row'>
	       <p><label for='latitud'>Latitud</label>
		    <input type='text' name='latitud' id='latitud' value='".$va2."' placeholder='".$latitud."'' class='col-sm-3 control-label' /></p>
	   </div>
	  <div class='row'>
	       <p><label for='longitud'>Longitud</label>
		    <input type='text' name='longitud' id='longitud' value='".$va3."' placeholder='".$longitud."'' class='col-sm-3 control-label' /></p>
	   </div>
	  
	   	   <div class='modal-footer'>
	       <input type='submit' class='btn btn-default' value='Guardar' />
	       <input type='reset' class='btn btn-default' value='Restablecer' />

		   
	   </div>
	   </center>
   </form>"; 

?>