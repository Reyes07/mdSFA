<?php
    session_start();
    $_SESSION['puerta']="pagregistro";
    //$_SESSION['puerta']="index.php";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, width=device-width" name="viewport">
	<link rel="shortcut icon" href="../imagenes/iconoSFA.png" type="image/x-icon">
	<title>Ingresar a Sistema Factibilidad Agroclimatica</title>

	<!-- css -->
	<link href="css/base.min.css" rel="stylesheet">

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
		<span class="header-logo">Sistema de Factibilidad Agroclimática </span>
	</header>
	<div class="content">
		<div class="content-heading">
		</div>
		<div class="content-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-lg-push-4 col-sm-6 col-sm-push-3">
						<div class="card-wrap">
							<div class="card">
								<div class="card-main">
									<div class="card-header" align="center">
										<div class="card-inner" >
											<h1 class="card-heading">Iniciar Sesión</h1>
										</div>
									</div>
									<div class="card-inner">
									          <div align="center"> <img src="../imagenes/logosfa.png"/></div>
										<form class="form"  action="../validar/v1.php" method="POST">
											<div class="form-group form-group-label">
												<div class="row">
													<div class="col-md-10 col-md-push-1">
														<label class="floating-label" for="login-username">Nombre de Usuario</label>
														<input class="form-control" id="nickname" name="nickname" type="text">
													</div>
												</div>
											</div>
											<div class="form-group form-group-label">
												<div class="row">
													<div class="col-md-10 col-md-push-1">
														<label class="floating-label" for="login-password">Contraseña</label>
														<input class="form-control" id="contrasenia" name="contrasenia" type="password">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-md-10 col-md-push-1">
														<button class="btn btn-block btn-blue waves-button waves-effect waves-light">Entrar</button>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-md-10 col-md-push-1">
														<div class="checkbox checkbox-adv">
															<label for="login-remember">
																<input class="access-hide" id="login-remember" name="login-remember" type="checkbox">Recordarme
															</label>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer">
		<div class="container">
			
		</div>
	</footer>

	<script src="js/base.min.js" type="text/javascript"></script>
</body>
</html>