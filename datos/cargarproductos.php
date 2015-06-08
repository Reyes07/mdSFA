<?php
$db=new mysqli("localhost","root","","daw");
$limite=$_REQUEST["limite"];
$query="select idproducto from productos";
$res=$db->query($query);
$total=$res->num_rows;
//mostrar productos de 4 en 4
$paginas=ceil($total/4);

$query="select * from productos limit $limite,4";
$res=$db->query($query);
if ($res->num_rows>0) {
	while ( $fila=$res->fetch_array()) {
		# code...
		$productos[$fila["idproducto"]]=$fila["nombre"];
	}
}
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
foreach ($productos as $producto) {
	# code...
	echo "<article class=\"producto\">".$producto."</article>";
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