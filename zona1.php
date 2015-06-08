<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Menú SFA</title>
    <!-- liga al logotipo de SFA-->
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

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
		<!-- scripts-->
        <script type="text/javascript" charset="utf-8" async defer>
$(document).ready(cargarproductos(0));
function cargarproductos(limite)
{

    var url="../datos/cargardatoszona.php";
    $.post(url,{limite:limite},function(responseText){
        $("#productos").html(responseText);
    })
}

</script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->

        <!--////////////////////////////////////////////////// -->
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
                                    <a href="../vista/zona.php" id="Temp">Datos Zona</a>
                                </li>
                                <li>
                                    <a href="../zona.php" id="">Ver Zonas</a>
                                </li>
                            </ul>
                        </li>
						
						<li>
						    <a href="#"><i class="icon-thermometer"></i>  Temperatura<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#" id="temp">Nueva Temperatura</a>
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
        </nav> <!--////////////////////////////////////////////////// -->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                    <h1 class="page-header">Inicio</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
           <!-- Div del contenido principal-->
            <div class="row">
                <div class="col-lg-12" name="area" id="area">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Contenido
                            
                        </div>
                        <!-- /.panel-heading -->
						
						                                 <?php 
include_once 'datos/cConexion.php';
$con=null;

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Menú SFA</title>
    <!--script src="js/funcion.js" type="text/javascript" charset="utf-8" async defer></script-->
    <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <script src="js/funcion.js" type="text/javascript" charset="utf-8" async defer></script>
 
        <!-- Acción sobre el botón con id=boton y actualizamos el div con id=capa -->
        <!--script type="text/javascript">
            $(document).ready(function() {
                $("#boton").click(function(event) {
                    $("#grafico").load('vista/grafico1.php?id=precipitacionPluvial');
                });
            });
        </script-->
<style>
 #map-canvas {
        height: 340px;
        max-width: 840px;
        margin:0;
        padding: 0px
      }
    </style>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/jquery.jqplot.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/paginaP.css">
   
  
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <?php 
      #include_once 'vista/grafico1.php';
     echo "
    <script type=\"text/javascript\">
    function initialize() {
      var marcadores = [";
      $con=new cConexion();
      $con->conectar();
      $res=$con->consulta('select * from zona where status="A"');
        while($row=$con->fetch_array($res))
        {
        echo "['".$row['nombre']."',".$row['latitud'].",".$row['longitud'].",".$row['Id_zona']."],";
        }

      echo "];
      var map = new google.maps.Map(document.getElementById('map-canvas'), {
        zoom: 12,
        center: new google.maps.LatLng(18.8248635,-97.00631),
        mapTypeId: google.maps.MapTypeId.HYBRID
      });
      var infowindow = new google.maps.InfoWindow();
      var marker, i;
      for (i = 0; i < marcadores.length; i++) {  
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
          map: map
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            var zn=\"'\"+marcadores[i][0]+\"'\";
            infowindow.setContent('<a onclick=\"cargarZona('+marcadores[i][3]+')\">'+marcadores[i][0]+'</a>');
            infowindow.open(map, marker);
          }
        })(marker, i));
      }
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>";?>
  </head>
 
</html>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
      
     
      <div class="container">

        <div class="row">

            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9" id="contenido">

                <div class="panel panel-default">
                     <div class="panel-heading">
                         <h3 class="panel-title">Zona <sub>   (Da click sobre el marcador que deseen ver y despues sobre el link)</sub></h3>
                    </div>
               
                 <div class="panel-body" id="map-canvas">
                    
                </div>

               </div>

            </div>  
            

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3" id="contenido">

                  <div class="panel panel-default">
                     <div class="panel-heading">
                         <h3 class="panel-title">Zona</h3>
                    </div>
               
                 <div class="panel-body" >
                <div class="list-group" id="lista">
    <a  class="list-group-item">
        <span class="glyphicon glyphicon-leaf"></span> Precipitación Pluvial <span class="badge"></span>
    </a>
    <a  class="list-group-item">
        <span class="glyphicon glyphicon-leaf" type="button" id="boton"></span> Humedad Relativa <span class="badge"></span>
    </a>
    <a onclick=""  class="list-group-item">
        <span class="glyphicon glyphicon-leaf"></span>Radiación Solar  <span class="badge"></span>
    </a>
    <a onclick=""  class="list-group-item">
        <span class="glyphicon glyphicon-leaf"></span> Datos Geologicos <span class="badge"></span>
   </a>
    
 
 
</div>
</div>

                </div>

               </div>

            </div>

        </div>
<div class="row">

         
            
             <div class="col-md-4" id="contenido">

                <div class="panel panel-default">
                     <div class="panel-heading">
                         <h3 class="panel-title">Datos</h3>
                    </div>
               
                 <div class="panel-body" id="datos" style="max-width: 100%">
                    <h4>Selecciona una zona en el mapa y da click en el panel de la derecha para ver los datos historicos</h4>
                </div>

               </div>

            </div>  
            
             <div class="col-md-8" id="contenido">

                <div class="panel panel-default">
                     <div class="panel-heading">
                         <h3 class="panel-title">Gráfica</h3>
                    </div>
               
                 <div class="panel-body" id="graficos" style="max-width: 70%;">
                 <h4>Selecciona una zona en el mapa y da click en el panel de la derecha para ver los datos historicos</h4>
                </div>
                
               </div>

            </div>  



            <!--div class="col-xs-6 col-sm-4 col-md-3 col-lg-3" id="contenido">

                  <div class="panel panel-default">
                     <div class="panel-heading">
                         <h3 class="panel-title">Zona</h3>
                    </div>
               
                 <div class="panel-body" >
            <div class="list-group">
    <a href="#" class="list-group-item">
        <span class="glyphicon glyphicon-leaf"></span> Precipitación Pluvial <span class="badge"></span>
    </a>
    <a href="#" class="list-group-item">
        <span class="glyphicon glyphicon-leaf"></span> Humedad Relativa <span class="badge"></span>
    </a>
    <a href="#" class="list-group-item">
        <span class="glyphicon glyphicon-leaf"></span>Radiación Solar  <span class="badge"></span>
    </a>
    <a href="#" class="list-group-item">
        <span class="glyphicon glyphicon-leaf"></span> Datos Geologicos <span class="badge"></span>
    </a>
</div>

                </div-->

               </div>

            </div>

        </div>
      </div>    
      
    
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!--?php 
    include_once 'js/tabla1.php';
     ?-->
  

						
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
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>
    

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    
	
	

</body>

</html>
