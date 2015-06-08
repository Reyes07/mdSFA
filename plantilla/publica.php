
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, width=device-width" name="viewport">
	<title>LYDE-SOFT</title>

	<!-- css -->
	<link href="css/base.min.css" rel="stylesheet">
	<!--<link rel="shortcut icon" href="../imagenes/iconoSFA.png" type="image/x-icon">-->

	<!--<script type="text/javascript" src="../js/funcionesmenu.js"></script> -->
	<script src="../js/jquery-2.1.0.min.js" type="text/javascript"></script>
	<script src="../js/jquery-1.9.1.min.js" type="text/javascript"></script>



	
	<!-- favicon -->
	<!-- ... -->

	<!-- ie -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js" type="text/javascript"></script>
			<script src="js/respond.js" type="text/javascript"></script>
		<![endif]-->
</head>
<body class="avoid-fout page-blue">
	<div class="avoid-fout-indicator avoid-fout-indicator-fixed">
		<div class="progress-circular  progress-circular-blue progress-circular-center">
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

		<!--<ul class="nav nav-list pull-left">
			<li>
				<a class="menu-toggle" href="#menu">
					<span class="access-hide">Menu</span>
					<span class="icon icon-menu icon-lg"></span>
					<span class="header-close icon icon-close icon-lg"></span>
				</a>
			</li>
		</ul> -->
		
		<img src="images/samples/2.png" alt="LYDE-SOFT">

		<!-- <a class="header-logo" href="#">LYDE-SOFT</a> -->
		<!--<ul class="nav nav-list pull-right">
			<li>
				<a class="menu-toggle" href="#">
					
	            <p>Iniciar Sesión</p>
	             <span class="header-close icon icon-close icon-lg"></span>
				</a>
			</li>
			<li>
				<a class="menu-toggle" href="#profile">
					<p>Registrarse</p>
					
					<span class="header-close icon icon-close icon-lg"></span>
				</a>
			</li>
		</ul> -->
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
									<a href="#">Lista de Cultivos</a>
								</li>
							</ul>
						</li>
						<li>
							   <a href="#"><i class="icon icon-satellite"></i>Zona</a>
							<span class="menu-collapse-toggle collapsed" data-target="#Zona" data-toggle="collapse"><i class="icon icon-close menu-collapse-toggle-close"></i><i class="icon icon-add menu-collapse-toggle-default"></i></span>
							<ul class="menu-collapse collapse" id="Zona">
								<li>
									<a href="#">Dar de alta una zona </a>
								</li>
								<li>
									<a href="#">Ver zonas</a>
								</li>
							</ul>
						</li>
						<li>
							    <a href="ui-form.html"><i class="icon icon-timer"></i>Temperatura</a>
							<span class="menu-collapse-toggle collapsed" data-target="#Temperatura" data-toggle="collapse"><i class="icon icon-close menu-collapse-toggle-close"></i><i class="icon icon-add menu-collapse-toggle-default"></i></span>
							<ul class="menu-collapse collapse" id="Temperatura">
								<li>
									<a href="#">Ingresar temperatura</a>
								</li>
								<li>
									<a href="#">Lista de temperaturas</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="ui-nav.html"><i class="icon icon-gps-fixed"></i>Geolocalización</a>
						</li>

						<li>
							     <a href="ui-form.html"><i class="icon icon-timer"></i>Evaluación</a>
							<span class="menu-collapse-toggle collapsed" data-target="#Evaluacion" data-toggle="collapse"><i class="icon icon-close menu-collapse-toggle-close"></i><i class="icon icon-add menu-collapse-toggle-default"></i></span>
							<ul class="menu-collapse collapse" id="Evaluacion">
								<li>
									<a href="#">Evaluados</a>
								</li>
						</li>
						
					<hr>
					
				</div>
			</div>
		</div>
	</nav>
	
	<!--<nav class="menu menu-right" id="profile">
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
	</nav> -->
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
				<!--<img src="../imagenes/LYDE-SOFT-LOGO.jpg" alt="LYDE-SOFT"> -->
				<h4 class="heading">"Dinos tus procesos, nosotros los desarrollamos..."</h4>
			</div>
		</div>
		<div class="content-inner">
			<div class="container container-full">
				<div class="row row-fix">
					
					<div class="col-md-10">

					

						<img src="images/samples/ds.jpg" alt="">
						<!-- <p align="justify"> Se propone un planteamiento que considera dos tipos de estudios agroclimáticos: preliminares y definitivos. Los primeros están orientados a dar una panorámica de los cultivos factibles en la zona y a definir una serie de parámetros de carácter agroclimático y cálculo sencillo, que ayudarán a comprender el proceder de la agricultura actual, o a planear su firme establecimiento y desarrollo. Tales parámetros son evaluados con base en la información promedio mensual y quedan concentrados para cada estación climatológica utilizada, en su ficha agroclimática propuesta. Los estudios agroclimáticos definitivos se basan en la información climatológica y meteorológica mensual y diaria, procesándose una parte decenal y otra mensualmente; su alcance llega a una definición más exacta del espectro de cultivos posibles, al manejo conjunto de la información histórica fenológica y climática para pronóstico de la producción, y a la formulación de recomendaciones precisas orientadas a optimizar los rendimientos actuales, o bien a garantizar la producción futura.</p>
					    -->
					    
					</div>
					<div class="col-md-2 content-fix">


						<div class="content-fix-scroll">

							<div class="content-fix-wrap">

								<div class="content-fix-inner">
									<h2 class="content-sub-heading">Conocenos</h2> 


									<div class="tile-wrap">
										<div class="tile">
											<div class="pull-left tile-side">
												

											</div>
											<div class="tile-inner">
												<a class="btn btn-flat btn-blue waves-effect" data-toggle="modal" href="#modal">Misión</a>
											</div>
										</div>
										<div class="tile">
											<div class="pull-left tile-side">
												
											</div>
											<div class="tile-inner">
											<a class="btn btn-flat btn-blue waves-effect" data-toggle="modal" href="#mvision">Visión</a>
											</div>
										</div>
										<div class="tile">
											<div class="pull-left tile-side">
												
											</div>
											<div class="tile-inner">
												<a class="btn btn-flat btn-blue waves-effect" data-toggle="modal" href="#mvalores">Valores</a>
											</div>
										</div>
										
										
										
										
										
									
										
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
     
     <div aria-hidden="true" class="modal fade" id="modal" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-xs">
			<div class="modal-content">
				<div class="modal-heading">
					<a class="modal-close" data-dismiss="modal">&times;</a>
					<h2 class="modal-title">Misión</h2>
				</div>
				<div class="modal-inner">
					
					<p align="justify">Ser la mejor empresa desarrolladora de software, para satisfacer las necesidades de nuestros clientes en servicios de redes, desarrollo de software  y soporte técnico de la mejor calidad.</p>
					
					</div>
				<div class="modal-footer">
					<p class="text-right"><button class="btn btn-flat btn-blue waves-effect" data-dismiss="modal" type="button">Cerrar</button></p>
				</div>
			</div>
		</div>
	</div>

	<div aria-hidden="true" class="modal fade" id="mvision" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-xs">
			<div class="modal-content">
				<div class="modal-heading">
					<a class="modal-close" data-dismiss="modal">&times;</a>
					<h2 class="modal-title">Visión</h2>
				</div>
				<div class="modal-inner">
					
					<p align="justify">Ser una empresa desarrolladora reconocida en la región por la calidad de nuestros servicios, llegando a tener liderazgo en la rama y contar con la confianza de nuestros clientes.</p>
					
				</div>
				<div class="modal-footer">
					<p class="text-right"><button class="btn btn-flat btn-blue waves-effect" data-dismiss="modal" type="button">Cerrar</button></p>
				</div>
			</div>
		</div>
	</div>

	<div aria-hidden="true" class="modal fade" id="mvalores" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-xs">
			<div class="modal-content">
				<div class="modal-heading">
					<a class="modal-close" data-dismiss="modal">&times;</a>
					<h2 class="modal-title">Valores</h2>
				</div>
				<div class="modal-inner">

					<ul>
						<li>
							Servir al cliente

						</li>
						<li>
							Puntualidad
						</li>
						<li>
							Calidad
						</li>
						<li>
							Justicia
						</li>
						<li>
							Responsabilidad
						</li>
						<li>
							Originalidad
						</li>
						<li>
							Trabajo en equipó
							
						</li>
					</ul>
					
					
                    





				</div>
				<div class="modal-footer">
					<p class="text-right"><button class="btn btn-flat btn-blue waves-effect" data-dismiss="modal" type="button">Cerrar</button></p>
				</div>
			</div>
		</div>
	</div>

	<h2 class="content-sub-heading">Conoce nuestros servicios</h2>
				<div class="card-wrap">
					<div class="row">
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="card">
								<div class="card-main">
									<div class="card-img">
										<img alt="alt text" src="images/samples/redes.jpg">
										<p class="card-img-heading">Instalación y mantenimiento a Redes</p>
									</div>
									<div class="card-inner">
										<p>
											Ofrecemos el servicio de intalación y mantemiento<br>
											a redes, no importa el tamaño de tu negocio nosotros lo ponemos en red.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="card">
								<div class="card-main">
									<div class="card-img">
										<img alt="alt text" src="images/samples/soporteT.jpg">
										<p class="card-img-heading" id="textoimg">Soporte técnico y mantemiento a esquipo de cómputo</p>
									</div>
									<div class="card-inner">
										<p>
											Contamos con personal capasitado para ofrecer el servicio de soporte y mantenimiento a equipo de computo.<br>
											Ofrecemos servicio a empresas, negocios y particulares nos adaptamos a tu presupuesto.
										</p>
									</div>
									
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="card">
								<div class="card-main">
									
									<div class="card-img">
										<img alt="alt text" src="images/samples/Desarrollo.jpg">
										<p class="card-img-heading">Desarrollo de software</p>
									</div>
									<div class="card-inner">
										<p>
											El desarrollo de software a tus necesidades, no importa el proceso o la arquitectura de tus sistemas .<br>
										    nuestro objetivo es innovar y mejorar aquellos procesos que te resultan tedioso, conoce uno de nuestros proyectos.
										    <a href="page-login.php">Sistema de Factibilidad Agroclimática</a>
										    
										    

										</p>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>

	<footer class="footer">
		<div class="container container-full">
			<p>&copy; LYDE-SOFT </p>
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
	
	
</body>
</html>