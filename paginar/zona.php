<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="../js/jquery.min.js"></script>	
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<script src="../js/funcion.js" type="text/javascript" charset="utf-8" async defer></script>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

	<title>Paginar</title>
	<link rel="stylesheet" href="../css/paginar.css">
</head>
<script type="text/javascript" charset="utf-8" async defer>
$(document).ready(cargarproductos(0));
function cargarproductos(limite)
{

	var url="../datos/cargarzona.php";
	$.post(url,{limite:limite},function(responseText){
		$("#productos").html(responseText);
	})
}

</script>
<body onload="Enviar1('forms/registraZona.php','modal-body','POST')">
	<section id="productos" >
		
	</section>
	<div class="container">
		<center>
			<button class="btn btn-info" style="box-align: center ;" data-toggle="modal" data-target="#miventana" >
			Agregar zona
		</button>
		</center>
		
		<div class="modal fade" id="miventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog form-inline">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4>Registrar Zona</h4>
					</div>						
					<div  class="modal-body" id="modal-body">
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.js"></script>
</body>
</html>