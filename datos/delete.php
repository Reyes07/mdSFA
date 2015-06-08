<?php 
include_once 'cConexion.php';
$con = new cConexion();
$con->conectar();
#borrar datos
$lat = $_REQUEST['lat'];
$lng = $_REQUEST['lng'];
$sql = "DELETE FROM zona WHERE latitude=$lat && longitud=$lng";
$con->consulta($sql);

 ?>