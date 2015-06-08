<?php
	require_once('../datos/cConexion.php');
	include_once('../datos/cCultivo.php');
	$con = new cConexion();
	$tmp=new cCultivo(null);
	$con->conectar();
$limite=$_REQUEST["limite"];
$query="select * from cultivo";
$res=$con->consulta($query);
$total=$res->num_rows;
//mostrar productos de 4 en 4
$paginas=ceil($total/4);

$query="select * from cultivo where status=\"A\" limit $limite,4";
$res=$con->consulta($query);



echo '
<h1 style="text-align:center">Cultivos Registrados</h1>
<table id="tabla" border=0;>

		<tr> <th class="nom">
		<span style="font-weight:bold;"> Eliminar </th>
		 <th class="nom"><span style="font-weight:bold;"> Modificar </th>
		 <th class="nom"><span style="font-weight:bold;"> Nombre</th> 
		 <th class="nom"><span style="font-weight:bold;"> HR </th>
		 <th class="nom"><span style="font-weight:bold;"> Pre-Pluvial </th>		 
		 <th class="nom"><span style="font-weight:bold;"> Temperatura Maxima </th>

		 <th class="nom"><span style="font-weight:bold;"> Temperatura Mínima </th>
		 <th class="nom"><span style="font-weight:bold;"> Temperatura Recomendada </th>

		 </tr>
	';
		
	$objetos=$tmp->listarCultivo("select * from cultivo where status=\"A\"  limit $limite,4");
	foreach($objetos as $elemento)
		{
			$id=$elemento->getid_cultivo();
			echo "<tr><td> <a onclick='borrar(\"../controlador/controladorcultivo.php?id=$id&ope=2\")'> Eliminar</a> </td>";
			echo "<td><a onclick=\"Enviar1('../vista/forms/registraCultivo.php?id=$id&op=3','ver','POST')\">Modificar </a></td>";
			echo "<td>".utf8_decode($elemento->getnombre())."</td>";
			echo "<td>".$elemento->gethr()."</td>";
			echo "<td>".$elemento->getprepluvial()."</td>";
			echo "<td>".$elemento->gettempmax()."</td>";
			echo "<td>".$elemento->gettempmin()."</td>";
			echo "<td>".$elemento->gettemprecomendada()."</td></tr>";
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