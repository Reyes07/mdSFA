<?php 
include_once '../datos/cConexion.php';
$con=null;

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, width=device-width" name="viewport">
	<title>Material</title>
<style>
 #map-canvas {
        height: 340px;
        max-width: 840px;
        margin:0;
        padding: 0px
      }
    </style>
<link href="../css/jquery.jqplot.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/paginaP.css">
   
  	<script src="../js/funcion.js" type="text/javascript" charset="utf-8" async defer></script>
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
            infowindow.setContent('<a onclick=\"cargarfuncion('+marcadores[i][3]+','+zn+')\">'+marcadores[i][0]+'</a>');
            infowindow.open(map, marker);
          }
        })(marker, i));
      }
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>";
    ?>


	<!-- css -->
	<link href="../plantilla/css/base.min.css" rel="stylesheet">

	<!-- favicon -->
	<!-- ... -->

	<!-- ie -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js" type="text/javascript"></script>
			<script src="js/respond.js" type="text/javascript"></script>
		<![endif]-->
</head>
<body class="avoid-fout">
	<!--div class="avoid-fout-indicator avoid-fout-indicator-fixed">
		<div class="progress-circular progress-circular-alt progress-circular-center">
			<div class="progress-circular-wrapper">
				<div class="progress-circular-inner">
					<div class="progress-circular-left">
						<div class="progress-circular-spinner"></div>
					</div>
					<div class="progress-circular-gap"></div>
					<div class="progress-circular-right">
						<div class="progress-circular-spinner"></div>
					</div>
				</div>
			</div>
		</div>
	</div-->
	<header class="header">
		<ul class="nav nav-list pull-left">
			<li>
				<a class="menu-toggle" href="#menu">
					<span class="access-hide">Menu</span>
					<span class="icon icon-menu icon-lg"></span>
					<span class="header-close icon icon-close icon-lg"></span>
				</a>
			</li>
		</ul>
		<a class="header-logo" href="index.html">Material</a>
		<ul class="nav nav-list pull-right">
			<li>
				<a class="menu-toggle" href="#search">
					<span class="access-hide">Search</span>
					<span class="icon icon-search icon-lg"></span>
					<span class="header-close icon icon-close icon-lg"></span>
				</a>
			</li>
			<li>
				<a class="menu-toggle" href="#profile">
					<span class="access-hide">John Smith</span>
					<span class="avatar avatar-sm"><img alt="alt text for John Smith avatar" src="../plantilla/images/users/avatar-001.jpg"></span>
					<span class="header-close icon icon-close icon-lg"></span>
				</a>
			</li>
		</ul>
	</header>
	<nav class="menu" id="menu">
		<div class="menu-scroll">
			<div class="menu-wrap">
				<div class="menu-content">
					<ul class="nav">
						<li>
							<a href="ui-card.html">Cards</a>
						</li>
						<li>
							<a href="ui-collapse.html">Collapsible Regions</a>
						</li>
						<li>
							<a href="ui-dropdown.html">Dropdowns</a>
						</li>
						<li>
							<a href="ui-modal.html">Modals &amp; Toasts</a>
						</li>
						<li>
							<a href="ui-nav.html">Navs</a>
						</li>
						<li>
							<a href="ui-progress.html">Progress Bars</a>
						</li>
						<li>
							<a href="ui-tab.html">Tabs</a>
						</li>
						<li>
							<a href="ui-tile.html">Tiles</a>
						</li>
					</ul>
					<hr>
					<ul class="nav">
						<li>
							<a href="ui-button.html">Buttons</a>
						</li>
						<li>
							<a href="ui-form.html">Form Elements</a>
							<span class="menu-collapse-toggle collapsed" data-target="#form-elements" data-toggle="collapse"><i class="icon icon-close menu-collapse-toggle-close"></i><i class="icon icon-add menu-collapse-toggle-default"></i></span>
							<ul class="menu-collapse collapse" id="form-elements">
								<li>
									<a href="ui-form-adv.html">Form Elements <small>(materialised)</small></a>
								</li>
							</ul>
						</li>
						<li>
							<a href="ui-icon.html">Icons</a>
						</li>
						<li>
							<a href="ui-table.html">Tables</a>
						</li>
					</ul>
					<hr>
					<ul class="nav">
						<li>
							<a href="page-affix.html">Full-Width Page <small>(with fixed LHC/RHC)</small></a>
						</li>
						<li>
							<a href="page-palette.html">Page Palettes</a>
							<span class="menu-collapse-toggle collapsed" data-target="#page-palettes" data-toggle="collapse"><i class="icon icon-close menu-collapse-toggle-close"></i><i class="icon icon-add menu-collapse-toggle-default"></i></span>
							<ul class="menu-collapse collapse" id="page-palettes">
								<li>
									<a href="page-palette-blue.html">Blue Palette</a>
								</li>
								<li>
									<a href="page-palette-green.html">Green Palette</a>
								</li>
								<li>
									<a href="page-palette-purple.html">Purple Palette</a>
								</li>
								<li>
									<a href="page-palette-red.html">Red Palette</a>
								</li>
								<li>
									<a href="page-palette-yellow.html">Yellow Palette</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<nav class="menu menu-right" id="profile">
		<div class="menu-scroll">
			<div class="menu-wrap">
				<div class="menu-top">
					<div class="menu-top-img">
						<img alt="John Smith" src="../plantilla/images/samples/landscape.jpg">
					</div>
					<div class="menu-top-info">
						<a class="menu-top-user" href="javascript:void(0)"><span class="avatar pull-left"><img alt="alt text for John Smith avatar" src="../plantilla/images/users/avatar-001.jpg"></span>John Smith</a>
					</div>
				</div>
				<div class="menu-content">
					<ul class="nav">
						<li>
							<a href="javascript:void(0)"><span class="icon icon-account-box"></span>Profile Settings</a>
						</li>
						<li>
							<a href="javascript:void(0)"><span class="icon icon-add-to-photos"></span>Upload Photo</a>
						</li>
						<li>
							<a href="page-login.html"><span class="icon icon-exit-to-app"></span>Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<div class="menu menu-right menu-search" id="search">
		<div class="menu-scroll">
			<div class="menu-wrap">
				<div class="menu-top">
					<div class="menu-top-info">
						<form class="form-group-alt menu-top-form">
							<label class="access-hide" for="menu-search">Search</label>
							<input class="form-control form-control-inverse menu-search-focus" id="menu-search" placeholder="Search" type="search">
							<button class="access-hide" type="submit">Search</button>
						</form>
					</div>
				</div>
				<div class="menu-content">
					<div class="menu-content-inner">
						<p><strong>Saved Search Queries:</strong></p>
						<ul>
							<li><a href="javascript:void(0)">lorem ipsum dolor sit amet</a></li>
							<li><a href="javascript:void(0)">consectetur adipiscing elit</a></li>
							<li><a href="javascript:void(0)">sed ornare orci lorem</a></li>
							<li><a href="javascript:void(0)">vel eleifend elit tempor eleifend</a></li>
							<li><a href="javascript:void(0)">morbi feugiat aliquet justo</a></li>
						</ul>
						<hr>
						<p><strong>Popular Search Queries:</strong></p>
						<ul>
							<li><a href="javascript:void(0)">id ullamcorper tortor lobortis eu</a></li>
							<li><a href="javascript:void(0)">aliquam ut tellus arcu</a></li>
							<li><a href="javascript:void(0)">cestibulum tortor purus</a></li>
							<li><a href="javascript:void(0)">pretium ac dolor id</a></li>
							<li><a href="javascript:void(0)">gravida molestie libero</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content">
		<!--div class="content-heading">
			</-->
		
		<div class="content-inner">
			<div class="container">

	<!--div class="container"-->

				

				<div class="row">



	  		<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9" id="contenido">

          <!--a href="pages/menu.php" type="button" class="btn btn-success"><span class="glyphicon glyphicon-backward">Regresar</span></a-->
      <!--br/><br/-->
	  		    <div class="panel panel-default">
                     <div class="panel-heading">
                         <h3 class="panel-title">Zona <sub>   (Da click sobre el marcador que deseen ver y despues sobre el link)</sub></h3>
                    </div>
               
                 <div class="panel-body" id="map-canvas">
                    <?php 
      #$require_once '../datos/cConexion.php';
      $con=new cConexion();
      $con->conectar();
      $res=$con->consulta('select * from zona where status="A"');
        
                    echo'
                   
                    <div role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">';
						while($row=$con->fetch_array($res))
        					{
        					
                            echo "<li role='presentation' class='active'>
                                <a onclick=\"cargarfuncion('".$row['Id_zona']."','".$row['nombre']."')\" aria-controls='home' role='tab' data-toggle='tab'>".$row['nombre']."</a>
                            </li>";
                        }
                        echo '</ul>               	
                        
                    </div>';
                     ?>
                </div>

               </div>

	  		</div>	
            

	  		<!--div class="col-xs-12 col-sm-4 col-md-3 col-lg-3" id="contenido">

	  			<h2 class="content-sub-heading">Zona</h2>
						<div class="card-wrap">
							<div class="card">
								<div class="card-main">
									<div class="card-inner">
										<ul class="nav" id="lista">
											<a  class="list-group-item"><li>

        <span class="glyphicon glyphicon-leaf"></span> Precipitación Pluvial <span class="badge"></span>
    </a>
    <a  class="list-group-item"><li>
        <span class="glyphicon glyphicon-leaf" type="button" id="boton"></span> Humedad Relativa <span class="badge"></span>
    </a>
    <a onclick=""  class="list-group-item"><li>
        <span class="glyphicon glyphicon-leaf"></span>Radiación Solar  <span class="badge"></span>
    </a><li>
    <a onclick=""  class="list-group-item">
        <span class="glyphicon glyphicon-leaf"></span> Datos Geologicos <span class="badge"></span>
   </a>
										</ul>
									</div>
								</div>
							</div>
						</div>




                </div-->

               </div>

	  		</div>

	  	</div>
<div class="row">

         
            
             <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12" id="contenido">

                <div class="panel panel-default">
                     <div class="panel-heading">
                         <h3 class="panel-title">Datos</h3>
                    </div>
               
                 <div class="panel-body" id="datos" style="max-width: 100%">
                    <h4>Selecciona una zona en el mapa y da click en el panel de la derecha para ver los datos historicos</h4>
                </div>

               </div>

            </div>  
            
             <!--div class="col-md-7 col-xs-7 col-sm-7 col-lg-7" id="contenido" style="max-width: 40%;">

                <div class="panel panel-default">
                     <div class="panel-heading">
                         <h3 class="panel-title">Gráfica</h3>
                    </div>
               
                 <div class="panel-body" id="graficos" style="max-width: 60%;">
                 <h4>Selecciona una zona en el mapa y da click en el panel de la derecha para ver los datos historicos</h4>
                </div>
                
               </div-->

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
			</div>







		</div>


	</div>
	<footer class="footer">
		<div class="container">
			<p>Sistema de Factibilidad Agroclimatica</p>
		</div>
	</footer>
	<div class="fbtn-container">
		<div class="fbtn-inner">
			<a class="fbtn fbtn-red fbtn-lg" data-toggle="dropdown"><span class="fbtn-text">Links</span><span class="fbtn-ori icon icon-open-in-new"></span><span class="fbtn-sub icon icon-close"></span></a>
			<div class="fbtn-dropdown">
				<a class="fbtn" href="https://github.com/Daemonite/material" target="_blank"><span class="fbtn-text">Fork me on GitHub</span><span class="fa fa-github"></span></a>
				<a class="fbtn fbtn-blue" href="https://twitter.com/daemonites" target="_blank"><span class="fbtn-text">Follow Daemon on Twitter</span><span class="fa fa-twitter"></span></a>
				<a class="fbtn fbtn-alt" href="http://www.daemon.com.au/" target="_blank"><span class="fbtn-text">Visit Daemon Website</span><span class="fa fa-link"></span></a>
			</div>
		</div>
	</div>

	<script src="../plantilla/js/base.min.js" type="text/javascript"></script>
</body>
</html>