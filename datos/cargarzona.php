<?php
	include_once('../datos/cConexion.php');
	include_once('../datos/cZona.php');
	$con = new cConexion();
	$tmp = new cZona(null);
	$con->conectar();
$limite=$_REQUEST["limite"];
$query="select * from zona where status=\"A\"";
$res=$con->consulta($query);
$total=$res->num_rows;
//mostrar productos de 4 en 4
$paginas=ceil($total/4);

$query="select * from zona limit $limite,4";
$res=$con->consulta($query);

if ($res->num_rows>0) {
	while ( $fila=$res->fetch_array()) {
		# code...
		$id_zona[]=$fila["Id_zona"];
		$nombre[]=$fila["nombre"];

	}
}

echo '
<!--h1 style="text-align:center">Zona</h1-->
<center>
<div clas="table-responsive">
<table class="table table-striped table-hover table-condensed table-bordered" border=0;>

		<tr> <th  >
		<span style="font-weight:bold;">  </th>
		 <th  ><span style="font-weight:bold;">  </th>
		  <th  ><span style="font-weight:bold;">  </th>
		 <th  ><span style="font-weight:bold;"> IdZona</th> 
		 <th  ><span style="font-weight:bold;"> Nombre </th>
		  <th  ><span style="font-weight:bold;"> Latitud </th>
		   <th  ><span style="font-weight:bold;"> Longitud </th>
		 </tr>
	';
		
	
	$objetos=$tmp->listarZona("select * from zona where status=\"A\"limit $limite,4");
	foreach($objetos as $elemento)
		{
			$id=$elemento->getid_zona();
			echo "<tr><td> <a onclick='borrar(\"../controlador/controladorzona.php?id=$id&ope=2\")' class='btn btn-default btn-xs'> Eliminar</a> </td>";
			echo "<td><button class='btn btn-default btn-xs' data-toggle='modal' data-target='#miventana' onclick=\"Enviar1('../vista/forms/modificarZona.php?id=".$id."&op=3','modal-body','POST')\">Modificar
		</button> ";
			echo "<td><button class='btn btn-default btn-xs' data-toggle='modal' data-target='#miventana' onclick=\"Enviar1('../vista/forms/registraGeoZona.php?id=".$id."','modal-body','POST')\">Agregar datos historicos
		</button> ";
			echo "<td>".$elemento->getid_zona()."</td>";
			echo "<td>".$elemento->getnombre()."</td>";
			echo "<td>".$elemento->getlatitud()."</td>";
			echo "<td>".$elemento->getlongitud()."</td></tr>";
		}
	
		
		echo "</table></div></center>";
		if ($limite>0) {
	# code...
	$limit=$limite-4;
	echo "<aside class=\"anterior btn btn-default\" onclick=\"cargarproductos(".$limit.")\">
		Anterior
	</aside>";
}
else{
	echo "<aside class=\"anterior\">
		
	</aside>";
}
if ($limite<$total-4) {
	# code...
	$limit=$limite+4;
echo "<aside class=\"Siguiente btn  btn-default\" onclick=\"cargarproductos(".$limit.")\">Siguiente</aside>";
}
else{
	echo "<aside class=\"Siguiente  \"></aside>";
}
?>