<?php
	include_once('../datos/cConexion.php');
	include_once('../datos/cDatosZona.php');
	$tmp= new cDatosZona(null);
	$con = new cConexion();
	$con->conectar();
$limite=$_REQUEST["limite"];
$query="select * from datoszona where status=\"A\"";
$res=$con->consulta($query);
$total=$res->num_rows;
//mostrar productos de 4 en 4
$paginas=ceil($total/4);

$query="select * from datoszona where status=\"A\" limit $limite,4";
$res=$con->consulta($query);



echo '
<h1 style="text-align:center">Cultivos Registrados</h1>
<table id="tabla" border=0;>

		<tr> <th class="nom">
		<span style="font-weight:bold;"> Eliminar </th>
		 <th class="nom"><span style="font-weight:bold;"> Modificar </th>
		 <th class="nom"><span style="font-weight:bold;"> Nombre</th> 
		 <th class="nom"><span style="font-weight:bold;"> Longitud </th>
		 <th class="nom"><span style="font-weight:bold;"> Latitud </th>		 
		 <th class="nom"><span style="font-weight:bold;"> Radiación solar </th>

		 <th class="nom"><span style="font-weight:bold;"> HR </th>

		 </tr>
	';
		
	$objetos=$tmp->listarDatoszona("select * from datoszona where status=\"A\" limit $limite,4");
	foreach($objetos as $elemento)
		{
			$id=$elemento->getid_zona();
			echo "<tr><td> <a onclick='borrar(\"../controlador/controladordatoszona.php?id=$id&ope=2\")'> Eliminar</a> </td>";
			echo "<td><a onclick=\"Enviar1('../vista/forms/registraDatosZona.php?id=$id&op=3','ver','POST')\">Modificar </a></td>";
			$conzona=$con->consulta("select nombre from zona where Id_zona='".$elemento->getid_zona()."'");
			foreach ($conzona as $zona) {
			echo "<td>".$zona['nombre']."</td>";}			
			echo "<td>".$elemento->getlongitud()."</td>";
			echo "<td>".$elemento->getlatitud()."</td>";
			echo "<td>".$elemento->getaltitud()."</td>";
			echo "<td>".$elemento->getpb()."</td>";
			echo "<td>".$elemento->getradsolar()."</td>";
			echo "<td>".$elemento->gethr()."</td></tr>";
		}
	

		
		echo "</table>";
		if ($limite>0) {
	# code...
	$limit=$limite-4;
	echo "<aside class=\"anterior\" onclick=\"cargarproductos(".$limit.")\">
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
echo "<aside class=\"Siguiente\" onclick=\"cargarproductos(".$limit.")\">Siguiente</aside>";
}
else{
	echo "<aside class=\"Siguiente\"></aside>";
}
?>