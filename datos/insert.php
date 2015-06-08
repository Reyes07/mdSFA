<?php 
include_once 'cConexion.php';
$con = new cConexion();
$con->conectar();

#insertar en base de datos
$address = $_REQUEST['address'];
$lat = $_REQUEST['lat'];
$lng = $_REQUEST['lng'];

	if ($address != null && $lat!= null && $lng != null) {
		# Verifica si existe...
		$sqlcount = "selec * from zona where latitude=$lat && longitud=$lng";
		$result = $con->consulta($sqlcount);
		if ($result) {
			# resultados
			$rowCount = $con->num_rows($result);
		}
		#insertar
		if ($rowCount == 0 ) {
			$sql = "insert into zona(address,latitude,longitud) values('$address','$lat','$lng')";
			$con->consulta($sql);
		}
	}

 ?>