<?php 
	include_once 'cConexion.php';
	$con = new cConexion();
	$con->conectar();
	#cargar base de datos
	$sql="select * from zona";
	$result=$con->consulta($sql);
	$arr= array();
	while ($row = $con->fetch_array($result)){
		$arr[] = array(
			"address" => $row['address'],
			"lat" => $row['latitude'],
			"lng" => $row['longitud']
			
			);
	}
	$json = json_encode($arr);
	echo $json;
 ?>