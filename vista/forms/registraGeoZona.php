<?php

	include_once('../../datos/cConexion.php');
	include_once('../../datos/cZona.php');

$con=null;

$ope=1;
$nombre='Registre una zona';
$latitud='Escriba la latitud';
$longitud='Escriba la longitud';
$va1='';
$va2='';
$va3='';
$id=0;
$idgeo=null;
if(isset($_REQUEST['op']))
{
	$ope=isset($_REQUEST['op']);
}
else
{
	$ope=1;
	$id=$_REQUEST['id'];

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
   <form id='guardar' action='../controlador/controladordatoszona.php' method='POST' rol='form' style='text-align:center;'>
     <center>
      <div class='row'>
      <input type='hidden' name='ope' value='".$ope."'>
      <input type='hidden' name='Id_zona' value='".$idgeo."'>
	       
	
	<input type='hidden' name='id' value=".$id."> ";
	$con=new cConexion(null);

	$con->conectar();
	$res=$con->consulta('select nombre from zona where Id_zona='.$id);
while ( $fila=$con->fetch_array($res)) {
		# code...
	echo "<h2>Agrega datos a la zona de: ".$fila['nombre']."</h2>";

	}
$con->desconectar();
echo "
</select>

		<p><label for='nombre'>Precipitación Pluvial</label>
		    <input type='text' name='pp' id='nombre' value='' placeholder='Registra las precipitaciones en mm' class='col-sm-3 control-label'/>MM.</p>
	   </div>
	   <div class='row'>
	       <p><label for='latitud'>Humedad Relativa</label>
		    <input type='text' name='hr' id='latitud' value='' placeholder='Humedad relativa en grados' class='col-sm-3 control-label' />Grados</p>
	   </div>
	  <div class='row'>
	       <p><label for='longitud'>Radiación Solar</label>
		    <input type='text' name='rs' id='longitud' value='' placeholder='Radiación solar en grados'' class='col-sm-3 control-label' />Grados</p>
	   </div>
	   <div class='row'>
	       <p><label for='longitud'>Fecha:</label>
		    <input type='date' name='fecha' id='longitud' value='' placeholder='Fecha Datos'' class='col-sm-3 control-label' /></p>
	   </div>
	  
	   	   <div class='modal-footer'>
	       <input type='submit' class='btn btn-default' value='Guardar' />
	       <input type='reset' class='btn btn-default' value='Restablecer' />

		   
	   </div>
	   </center>
   </form>"; 

?>