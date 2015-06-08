<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="../js/jquery.min.js"></script>	<link rel="stylesheet" type="text/css" href="estilos.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Paginar</title>
	<link rel="stylesheet" href="../css/paginar.css">
</head>
<script type="text/javascript" charset="utf-8" async defer>
$(document).ready(cargarproductos(0));
function cargarproductos(limite)
{

	var url="../datos/cargardatoscultivo.php";
	$.post(url,{limite:limite},function(responseText){
		$("#productos").html(responseText);
	})
}

</script>
<body>
	<section id="productos">
		
	</section>
</body>
</html>