<?php
	include_once('../datos/cConexion.php');
	include('../clases/cUsuario.php');
	$con = new cConexion(null);
	$tmp = new cUsuario(null);
	$con->conectar();
$limite=$_REQUEST["limite"];
$query="select * from usuario where status=\"A\"";
$res=$con->consulta($query);
$total=$res->num_rows;
//mostrar productos de 4 en 4
$paginas=ceil($total/4);

$query="select * from usuario limit $limite,4";
$res=$con->consulta($query);

if ($res->num_rows>0) {
	while ( $fila=$res->fetch_array()) {
		# code...
		$Id_usuario[]=$fila["Id_usuario"];
		$nickname[]=$fila["nickname"];

	}
}

echo'
<h1 style="text-align:center">Lista de Usuario</h1>
<table class="table table-bordered" border=0;>

		<tr> <th class="nom">
		<span style="font-weight:bold;"> Eliminar </th>
		 <th class="nom"><span style="font-weight:bold;"> Modificar </th>
		 <th class="nom"><span style="font-weight:bold;"> IdUsuario</th> 
		 <th class="nom"><span style="font-weight:bold;"> Id_tipoUsuario</th>
		  <th class="nom"><span style="font-weight:bold;"> Nickname </th>
		   <th class="nom"><span style="font-weight:bold;"> Contrasenia </th>
		 </tr>
	';
		
	
	$objetos=$tmp->listartodos("select * from usuario where status=\"A\"limit $limite,4");
	foreach($objetos as $elemento)
		{
			$id=$elemento->getId_usuario();
			echo "<tr><td> <a onclick='borrar(\"../controladores/controladorUsuario.php?id=$id&ope=2\")' class='btn btn-default btn-xs'> Eliminar</a> </td>";
			echo "<td><button class='btn btn-default btn-xs' data-toggle='modal' data-target='#miventana' onclick=\"Enviar1('../pages/formUsuario.php?id=".$id."&op=3','modal-body','POST')\">
		Modificar
		</button> ";
			echo "<td>".$elemento->getId_usuario()."</td>";
			echo "<td>".$elemento->getId_tipoU()."</td>";
			echo "<td>".$elemento->getNickname()."</td>";
			echo "<td>".$elemento->getContrasenia()."</td></tr>";
		}
	
		
		echo "</table>";
		if ($limite>0) {
	# code...
	$limit=$limite-4;
	echo "<aside class=\"anterior\" onclick=\"cargarusuario(".$limit.")\">
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
echo "<aside class=\"Siguiente\" onclick=\"cargarusuario(".$limit.")\">Siguiente</aside>";
}
else{
	echo "<aside class=\"Siguiente\"></aside>";
}
?>