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
    <link rel="shortcut icon" href="imagenes/iconoSFA.png" type="image/x-icon">
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
  <body>
      

	  <div class="container">

	  	<div class="row">

	  		<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9" id="contenido">

          <a href="pages/menu.php" type="button" class="btn btn-success"><span class="glyphicon glyphicon-backward">Regresar</span></a>
      <br/><br/>
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
  </body>
</html>
