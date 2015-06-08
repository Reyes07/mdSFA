<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lista de Cultivos</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--link href="../css/diana.css" rel="stylesheet"-->
    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="../js/validation/bootstrapValidator.js"></script>
	<script type="text/javascript" src="../js/funcion.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style>
	   .listaCultivos{
	   margin:2px;padding:0px;
	width:50%
	float:center;
	box-shadow: 5px 5px 5px #888888;
	border:7px solid #0000;
	text-align:center;
	color: #3C0 
	
	
	}
	</style>

</head>

<body>         
            
  
  
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-green" >
                        <div class="panel-heading">
                            Cultivos
                        </div>
						
						<div class="table-responsive">
                        <table class="table">
						
						     <?php
    
	include_once('../datos/cConexion.php');
	include_once('../clases/cCultivo.php');
	$con = new cConexion();
	$tmp = new cCultivo(null);
	$con->conectar();
	$limite=0;
	if($_REQUEST){
$limite=$_REQUEST["limite"];}
else{
	$limite=0;
}
$query="select * from cultivo where status=\"A\"";
$res=$con->consulta($query);
$total=$res->num_rows;
//mostrar productos de 4 en 4
$paginas=ceil($total/4);

$query="select * from cultivo where status='A'";
$res=$con->consulta($query);

if ($res->num_rows>0) {
	while ( $fila=$res->fetch_array()) {
		# code...
		$id_zona[]=$fila["Id_cultivo"];
		$nombre[]=$fila["nombre"];

	}
}
     

	//echo "<a href='../paginas/menu.php'><img src='../imagenes/home.png' align='left'></a>";
	echo "<a href='borrado.php'><h3>Mostrar Borrados</h3></a>"; //liga de regreso al menu
	$cons="select * from cultivo where status='A' limit $limite,4";
	#echo $cons;
	$objetos=$tmp->listartodos($cons);//seleccionamos lo que se mostrara
	echo "<div id='contenido'> <center><table class='table table-bordered table-hover table-condensed table-responsive' border=2>
		<tr>
			<th>E</th>
		<th>M</th>
		<th>Id_Cultivo</th>
		<th>Nombre</th>
		<th>Imagen del Cultivo</th>
		<th>Humedad Relativa</th>
		<th>Presipitación Pluvial</th>
		<th>Temperatura Maxima</th>
		<th>Temperatura Minima</th>
		<th>Temperatura Recomendada</th>
		<th>Estatus</th>
	</tr>";
		//var_dump($objetos);
		foreach($objetos as $elemento)
		{
		
   		echo "<tr>";      	
   		echo "<tr><td> <a onclick='borrar(\"../controladores/controladorCultivo.php?clave=".$elemento->getId_cultivo()."&ope=2\")' class='btn btn-default btn-xs'> Eliminar</a> </td>";
			echo "<td><button class='btn btn-default btn-xs' data-toggle='modal' data-target='#miventana' onclick=\"Enviar1('../modificar/modCultivo.php?clave=".$elemento->getId_cultivo()."','modal-body','POST')\">Modificar
		</button> ";
      		echo "<td>" . $elemento->getId_cultivo()."</td>";
			echo "<td>" . $elemento->getNombre()."</td>";
      		echo "<td><img src=\"" . $elemento->getDireccion()."\" width=120px /></td>";
      		echo "<td>" . $elemento->getHR()."°</td>";
			echo "<td>" . $elemento->getPre_pluvial()." MM.</td>";
			echo "<td>"	. $elemento->getTempMax()."°</td>";
			echo "<td>" . $elemento->getTempMin()."°</td>";
			echo "<td>"	. $elemento->getTempRecomendada()."°</td>";
			echo "<td>" . $elemento->getStatus()."</td>";

		
		#echo "<td align=\"center\"><img alt=\"Eliminar\" src=\"../imagenes/eliminar.png\" onclick=\"confirmarborrado('../controladores/controladorCultivo.php?clave=".$elemento->getId_cultivo()."&ope=2','reyes','GET')\"/></td>";
		
		#echo "<td align=\"center\"><img alt=\"Modificar\" src=\"../imagenes/editar.png\" onClick=\"Enviar('../modificar/modCultivo.php?clave=".$elemento->getId_cultivo()."','reyes','GET')\"/></td>";		
      		echo "</tr>";
   		}
   		if ($limite>0) {
	# code...
	$limit=$limite-4;
	echo "<aside class=\"anterior\" onclick=\"cargarcultivo(".$limit.")\">
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
echo "<aside class=\"Siguiente\" onclick=\"cargarcultivo(".$limit.")\">Siguiente</aside>";
}
else{
	echo "<aside class=\"Siguiente\"></aside>";
}



	echo '</table> </center></div>
	
	
                        </table>
                        </div>
						
							<div class="modal fade" id="miventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog form-inline">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4>Registrar estatus</h4>
					</div>						
					<div  id="modal-body">
						
					</div>
					<div class="modal-footer">
						<input name="boton" id="boton" tabindex="5" value="Guardar" type="submit" class="btn btn-success"> 
						<button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
	</div>

                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>';
