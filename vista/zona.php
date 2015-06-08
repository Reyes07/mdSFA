<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="../js/jquery.min.js"></script>	
		<!--link rel="stylesheet" type="text/css" href="../css/style.css"-->
		<script src="../js/funcion.js" type="text/javascript" charset="utf-8" async defer></script>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="shortcut icon" href="../imagenes/iconoSFA.png" type="image/x-icon">

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
	
	<!-- paquete de iconos para el menu -->
	<link href="../dist/css/iconos/fonts.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>

    <!--script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script-->
    <!--script src="../js/jquery.min.js"></script-->
	<script type="text/javascript" src="../js/alertify.js"></script>
    <script type="text/javascript" src="../js/alertify.min.js"></script>
	<script type="text/javascript" src="../js/funcionesmenu.js"></script>
    <script src="../js/funcion.js" type="text/javascript" charset="utf-8" async defer></script>
	
	<!-- scripts-->
			
		<!-- script para cerrar sesion -->

		<script>
		    $(document).ready(function(){
                
                $("#simple_alert").click(function(){

                	alertify.alert("Atención estas a punto de cerrar sesion preciona ok para aceptar");

                });

                $("#confirm_alert").click(function(){
                	alertify.confirm("Estas a punto de cerrar sesion preciona ",function(e){
                		if(e){
                			window.location.href = "index.html";
                		}
                		else{

                			window.location.href = "index.html";
                		}
                	});

                });
            });
		</script>
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
	


	    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="menu.php">Sistema de Factibilidad Agronomica</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
                
             
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>Lista de usuarios</a>
                        </li>
                        <li><a href="#" id="nuevoU" name="nuevoU"><i class="fa fa-gear fa-fw"></i>Ingresar Nuevo Usuario</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../validar/cerrar.php" id="simple_alert" name="simple_alert"><i class="fa fa-sign-out fa-fw"></i>Cerrar Sesión</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="menu.php"><span class="icon-home"></span>  Inicio</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-leaf"></i> Cultivo<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#" id="cultivo">Nuevo Cultivo</a>
                                </li>
                                <li>
                                    <a href="#" id="listacultivo">Listar Cultivo</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="icon-compass"></i>  Zona<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a onclick="Enviar1('../vista/zona.php','area','POST')" id="Temp">Datos Zona</a>
                                </li>
                                <li>
                                    <a href="../zona.php">Ver Zonas</a>
                                </li>
                            </ul>
                        </li>
						
						<li>
						    <a href="#"><i class="icon-thermometer"></i>  Temperatura<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#" id="temp">Nueva Temperaaaatura</a>
                                </li>
                                <li>
                                    <a href="#">Listar Temperaturas</a>
                                </li>
                            </ul>
						</li>
						
						<li>
                            <a href="forms.html"><i class="glyphicon glyphicon-globe"></i>  Geolocalización</a>
                        </li>
						
			
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                    <h1 class="page-header">Inicio</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
           <!-- Div del contenido principal-->
            <div class="row">
                <div class="col-lg-12 col-xs-12 col-sm-8 col-md-9 col-lg-9" name="area" id="area">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Zonas
                            
                        </div>
                        <!-- /.panel-heading -->
						
						<!--div align="center"><img src="../imagenes/logosfa.jpg"/><div-->
				

                        <!-- /.panel-body -->
                    </div>
                    
                    
                    <!-- /.panel -->
                </div>
                
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <!--script src="../bower_components/jquery/dist/jquery.min.js"></script-->

    <!-- Bootstrap Core JavaScript -->
    <!--script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script-->

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>
    

    <!-- Custom Theme JavaScript -->
    	<div class="container">
		<center>
			<button class="btn btn-success btn-" style="box-align: center ;" data-toggle="modal" data-target="#miventana" >
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

    <script src="../dist/js/sb-admin-2.js"></script>

    
</body>
</html>