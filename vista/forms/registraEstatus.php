<?php

	include_once('../../datos/cConexion.php');
	include_once('../../datos/cEstatus.php');



$ope=1;
$nombre='Registre un estatus';
$descripcion='Escriba la descripcion del estatus';
$va1='';
$va2='';
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
	$tmp=new cEstatus(NULL);
	$id=$_REQUEST['id'];
	$objetos=$tmp->listarEstatus("select * from estatus where status='".$id."'");
	foreach($objetos as $elemento)
		{
		
			$nombre = $elemento->getstatus();
			$descripcion = $elemento->getdescripcion();
			$va1=$nombre;
			$va2=$descripcion;
		}
	break;
}
echo"
   <form id='guardar' action='../controlador/controladorestatus.php' method='POST' rol='form' style='text-align:center;'>
     <center>
      <div class='row'>
      <input type='hidden' name='ope' value='".$ope."'>
	       <p><label for='status'>Estatus</label>
		    <input type='text' name='status' id='status' value='".$va1."' placeholder='".$nombre."' class='col-sm-2 control-label'/></p>
	   </div>
	   <div class='row'>
	       <p><label for='descripcion'>Descripción</label>
		    <input type='text' name='descripcion' id='descripcion' value='".$va2."' placeholder='".$descripcion."'' class='col-sm-2 control-label' /></p>
	   </div>
	  
	   	   <div class='modal-footer'>
	       <input type='submit' class='btn btn-default' value='Guardar' />
	       <input type='reset' class='btn btn-default' value='Restablecer' />

		   
	   </div>
	   </center>
   </form>"; 

?>