<?php
	include_once('../datos/cConexion.php');

	include_once('../datos/cEstatus.php');

	$tmp=new cEstatus(NULL);
	$con = new cConexion();
	$con->conectar();
$limite=$_REQUEST["limite"];
$query="select status from estatus";
$res=$con->consulta($query);

$total=$res->num_rows;
//mostrar productos de 4 en 4
$paginas=ceil($total/2);

$query="select * from estatus limit $limite,4";
$res=$con->consulta($query);


echo '
<h1 style="text-align:center">Estatus</h1>
<div class="table-responsive">

<table class="table table-bordered table-responsive" ;>
		<thead>
			
		<tr> <th class="nom">
		<span style="font-weight:bold;"> Eliminar </th>
		 <th class="nom"><span style="font-weight:bold;"> Modificar </th>
		 <th class="nom"><span style="font-weight:bold;"> Estatus</th> 
		 <th class="nom"><span style="font-weight:bold;"> Descripción </th>
		 </tr>

		</thead>
	';
		
	
	$objetos=$tmp->listarEstatus("select * from estatus limit $limite,4");
	foreach($objetos as $elemento)
		{
			$id=$elemento->getstatus();
			echo "<tr><td> <a onclick='borrar(\"../controlador/controladorestatus.php?id=$id&ope=2\")' class='btn btn-default btn-xs'> Eliminar</a> </td>";
			echo "<td><button class='btn btn-default btn-xs' data-toggle='modal' data-target='#miventana' onclick=\"Enviar1('../vista/forms/registraEstatus.php?id=".$id."&op=3','modal-body','POST')\">
		Modificar
		</button> ";
			echo "<td>".$elemento->getstatus()."</td>";
			echo "<td>".$elemento->getdescripcion()."</td></tr>";
		}
	

		echo "</table></div>";

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
/*echo "<section>
<a onclick=\"Enviar1('../vista/forms/registraEstatus.php?op=3&id=null','ver','POST')\"></a>
	
</section>";*/
?>


