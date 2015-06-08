<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lista de usuarios</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
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
                            Usuarios Registrados
                        </div>
						
						<div class="table-responsive">
                        <table class="table">
						
						     <?php
    
	include_once("../datos/cConexion.php");
	include("../clases/cUsuario.php");
	
	
	$tmp=new cUsuario(NULL);//se hace un objeto de la clase
	$paginas='4';//numero de paginas que se mostraran 
	$actual = (!isset ($_GET['pg']))?1:$_GET['pg'];
	$objetos=$tmp->listartodos("select * from usuario where status='A'",0,0);//seleccionamos lo que se mostrara
	$total = count($objetos);
	if ($actual == 1) {
		$desde = "0";
	}
	elseif ($actual != 1) {
		$desde = $actual * $paginas - $paginas;
	}
	$tp = ($total / $paginas);
	if (strstr($tp,'.')){ 
		$tp = explode (".",$tp);
		$tp = ($tp[0]+1);
	}
	
     

	//echo "<a href='../paginas/menu.php'><img src='../imagenes/home.png' align='left'></a>";
	echo "<a href='borrado.php'><h3>Mostrar Borrados</h3></a>"; //liga de regreso al menu
	$objetos=$tmp->listartodos("select * from usuario where status='A'",$desde,$paginas);//seleccionamos lo que se mostrara
	echo "<div id='contenido'> <center><table class='listaCultivos' border=2>
		<tr>
		<th>Id_Usuario</th>
		<th>Tipo de Usuario</th>
		<th>Nombre de Usuario</th>
		<th>Contraseña</th>
		<th>Estatus</th>
		<th>E</th>
		<th>M</th></tr>";
		//var_dump($objetos);
		foreach($objetos as $elemento)
		{
		
   		echo "<tr>";      	
      		echo "<td>" . $elemento->getId_usuario()."</td>";
			echo "<td>" . $elemento->getId_tipoU()."</td>";
      		echo "<td>" . $elemento->getNickname()."</td>";
			echo "<td>" . $elemento->getcontrasenia()."</td>";
			echo "<td>" . $elemento->getstatus()."</td>";

		
		echo "<td align=\"center\"><img alt=\"Eliminar\" src=\"../imagenes/eliminar.png\" onclick=\"confirmarborrado('../controladores/controladorUsuario.php?clave=".$elemento->getId_usuario()."&ope=2','contenido','GET')\"/></td>";
		
		echo "<td align=\"center\"><img alt=\"Modificar\" src=\"../imagenes/editar.png\" onClick=\"Enviar('../modificar/modCultivo.php?clave=".$elemento->getId_usuario()."','contenido','GET')\"/></td>";		
      		echo "</tr>";
   		}
	echo "</table> </center></div>";
	
	$pag = ($tp == 1) ? 'PAGINA' : 'PAGINAS';
	$reg = ($total == 1) ? 'REGISTRO' : 'REGISTRO';
	?>
	ENCONTRADOS <b><?=$total?></b> <?=$reg?> EN <b><?=$tp?></b> <?=$pag?><br>
	<?php
	$anterior = true;
	$siguiente = true;
	if (($actual == 1) AND ($actual == $tp)) {
	$anterior = false;
	$siguiente = false;
	}
	elseif ($actual == $tp) {
	$anterior = true;
	$siguiente = false;
	}
	elseif ($actual == 1) {
	$anterior = false;
	$siguiente = true;
	}
	if ($anterior) {
	 
	 //echo " <a href='../listas/ListaUsuario.php?pg=".($actual-1)."'><div> < PÁGINA ANTERIOR </div></a>";
	echo "<a onClick=\"Enviar('../listas/ListaUsuario.php?pg=".($actual-1)."','header-section','GET')\">&lt; PÁGINA ANTERIOR</a> | ";
	//echo "<a onClick=\"Enviar('../listas/ListaTemperatura.php?pg=".($actual-1)."','contenido','GET')\">&lt; PÁGINA ANTERIOR</a> | ";
	}
	else {
	echo "|";
	}
	for ($i = 1; $i <= $tp;$i++) {
	if ($i == $actual) {
	echo " <b>".$i."</b> | ";
	}
	else {
	echo "<a onClick=\"Enviar('../listas/ListaUsuario.php?pg=".$i."','header-section','GET')\"> ".$i."</a> |";
	//echo "<a onClick=\"Enviar('../listas/ListaCultivos.php?pg=".$i."','contenido','GET')\"> ".$i."</a> |";
	}
	}
	if ($siguiente) {
	//echo " <a href='../listas/ListaUsuario.php?pg=".($actual+1)."'><div>PÁGINA SIGUIENTE &gt;</div></a>";
	echo " <a onClick=\"Enviar('../listas/ListaUsuario.php?pg=".($actual+1)."','contenido','GET')\"> PÁGINA SIGUIENTE &gt;</a>";
	//echo " <a onClick=\"Enviar('../listas/ListaCultivos.php?pg=".($actual+1)."','header-section','GET')\"> PÁGINA SIGUIENTE &gt;</a>";
	}
	
	
	?>
                              
                        </table>
                        </div>
						
						<div class="table-responsive" id="reyes">
                        <table class="table">
                              
                        </table>
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

</html>