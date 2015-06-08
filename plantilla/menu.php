<?php
	session_start();
	if(!isset($_SESSION["administrador"]))
	{
	header("Location:page-login.php");
		}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, width=device-width" name="viewport">
	<title>Menú S.F.A.</title>

	<!-- css -->
	<link href="css/base.min.css" rel="stylesheet">
	<!--  bootstrap-->
     <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
	
    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">


    <!-- Timeline CSS -->
   -<link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet"> -->


	<link rel="shortcut icon" href="../imagenes/iconoSFA.png" type="image/x-icon">

	
	<script src="../js/jquery-2.1.0.min.js" type="text/javascript"></script>
	<script src="../js/jquery-1.9.1.min.js" type="text/javascript"></script>

	<!--<script src="../js/jquery.min.js"></script>-->

	<script type="text/javascript">

        $(function (){
   
   $("#cultivo").click(function(){
     
        $("#area").load("formCultivo.php");
   });

});

          $(function (){
   
   $("#ListaZona").click(function(){
     
        $("#area").load("../zona.php");
   });

});
  


 $(function (){
   
   $("#listacultivo").click(function(){
     
        $("#area").load("listarCultivos.php");
   });

});




$(function (){
   
   $("#nuevoU").click(function(){
     
        $("#area").load("../pages/formUsuario.php");
   });

});

$(function (){
   
   $("#temp").click(function(){
     
        $("#area").load("../pages/formTemperatura.php");
   });

});
	</script> 
	

	<!-- favicon -->
	<!-- ... -->

	<!-- ie -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js" type="text/javascript"></script>
			<script src="js/respond.js" type="text/javascript"></script>
		<![endif]-->
</head>
<body class="avoid-fout">
	<div class="avoid-fout-indicator avoid-fout-indicator-fixed">
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
	</div>
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
		<a class="header-logo" href="index.html">Sistema de Factibilidad Agroclimatica</a>
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
					<span class="access-hide">Bienvenido <?php echo $_SESSION['nickname']; ?> </span>
					<span class="avatar avatar-sm"><img alt="alt text for John Smith avatar" src="images/users/avatar-001.jpg"></span>
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
							<a href="#"><i class="icon icon-home"></i>Inicio</a>
						</li>
						<li> 
							 <a href="#"><i class="icon icon-local-florist"></i>Cultivo</a>
							<span class="menu-collapse-toggle collapsed" data-target="#Cultivo" data-toggle="collapse"><i class="icon icon-close menu-collapse-toggle-close"></i><i class="icon icon-add menu-collapse-toggle-default"></i></span>
							<ul class="menu-collapse collapse" id="Cultivo">
								<li>
									<a href="#" id="cultivo">Nuevo Cultivo </a>
								</li>
								<li>
									<a href="#" id="listacultivo">Lista de Cultivos</a>
								</li>
							</ul>
						</li>
						<li>
							   <a href="../pages/factibilidadzona.php"><i class="icon icon-satellite"></i>Zona</a>
							
						</li>
					
						
					<hr>
					
				</div>
			</div>
		</div>
	</nav>
	<nav class="menu menu-right" id="profile">
		<div class="menu-scroll">
			<div class="menu-wrap">
				<div class="menu-top">
					<div class="menu-top-img">
						<img alt="John Smith" src="images/samples/landscape.jpg">
					</div>
					<div class="menu-top-info">
						<a class="menu-top-user" href="javascript:void(0)"><span class="avatar pull-left"><img alt="alt text for John Smith avatar" src="images/users/avatar-001.jpg"></span><?php echo $_SESSION['nickname']; ?></a>
					</div>
				</div>
				<div class="menu-content">
					<ul class="nav">
						<li>
							<a href="javascript:void(0)"><span class="icon icon-account-box"></span>Listar Usuarios</a>
						</li>
						<li>
							<a href="javascript:void(0)"><span class="icon icon-add-to-photos"></span>Agregar usuarios</a>
						</li>
						<li>
							<a href="../validar/cerrar.php"><span class="icon icon-exit-to-app"></span>Cerrar Sesión</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<br>
	<!--<div class="menu menu-right menu-search" id="search">
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
	</div> -->
	<div class="content">
		<div class="content-heading">
			<div class="container container-full">
				<!-- <h1 class="heading">Full-Width Page <small>with fixed LHC/RHC</small></h1> -->
			</div>
		</div>
		<div class="content-inner">
			<!-- .............-->
			<br>
			<div class="container container-full">
				<div class="row row-fix">
					
					<div class="col-md-12" id="area">
						<h2 class="content-sub-heading">Factibilidad Agroclimatica</h2>
						<br>
                           
                           <section id="miSlide" class="carousel slide">

                           	   <ol class="carousel-indicators">
                           	   	<li data-target="#miSlide" data-slide-to="0" class="active"></li>
                           	   	<li data-target="#miSlide" data-slide-to="0"></li>
                           	   	<li data-target="#miSlide" data-slide-to="0"></li>
                           	   </ol>

                           	   <div class="carousel-inner">
                           	   	<div class="item active"><img src="images/samples/img1.jpg" alt=""class="adaptar"></div>
                           	   	<div class="item"><img src="images/samples/img2.jpg" alt="" class="adaptar"></div>
                           	   	<div class="item"><img src="images/samples/img3.jpg" alt="" class="adaptar"></div>
                           	   </div>
                           	
                           	<a href="#miSlide" class="left carousel-control" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
                           </section>
						<!--<p align="justify"> Se propone un planteamiento que considera dos tipos de estudios agroclimáticos: preliminares y definitivos. Los primeros están orientados a dar una panorámica de los cultivos factibles en la zona y a definir una serie de parámetros de carácter agroclimático y cálculo sencillo, que ayudarán a comprender el proceder de la agricultura actual, o a planear su firme establecimiento y desarrollo. Tales parámetros son evaluados con base en la información promedio mensual y quedan concentrados para cada estación climatológica utilizada, en su ficha agroclimática propuesta. Los estudios agroclimáticos definitivos se basan en la información climatológica y meteorológica mensual y diaria, procesándose una parte decenal y otra mensualmente; su alcance llega a una definición más exacta del espectro de cultivos posibles, al manejo conjunto de la información histórica fenológica y climática para pronóstico de la producción, y a la formulación de recomendaciones precisas orientadas a optimizar los rendimientos actuales, o bien a garantizar la producción futura.</p>
					     -->
					    
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<footer class="footer">
		<div class="container container-full">
			<p>Material</p>
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

	<script src="js/base.min.js" type="text/javascript"></script>
    
     <!-- jQuery -->
   <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

     <!--Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <script src="/jav" type="text/javascript" charset="utf-8" async defer></script>

     Morris Charts JavaScript 
    <script src="../bower_components/raphael/raphael-min.js"></script>
   <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>
    


</body>
</html>