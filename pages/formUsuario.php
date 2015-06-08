<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Formulario para los usuarios</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="../js/validation/bootstrapValidator.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registra un usuario</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Ingresar los siguientes datos 
                        </div>

                         <form action="../controladores/controladorUsuario.php" method="POST">
                        <div class="panel-body">
                                <div class="row">

                                     <div class="col-xs-4">
                                         <div class="input-group">
                                             
											 <label for="Id_tipoU">Seleccione el tipo de usuario</label>
											 <select class="form-control" id="Id_tipoU" name="Id_tipoU">
											  <option value="A">Administrador</option>
											  <option value="C">Cliente</option>
                                             </select>
											 
										 </div>	 
                                     
                                   </div>
                                      <div class="col-xs-4">
                                          <div class="input">

                                              <label for="nickname">Ingresar el nombre de usuario</label>
                                              <input type="text" name="nickname" id="nickname" class="form-control" placeholder="jhonyPerez123">
                                  
                                    </div>
                                   </div>

                              <div class="col-xs-4">
                           <div class="input-group">
						         
								 

                                  
                                  <label for="HR">Ingresar la contraseña</label>
                                  <input type="password" name="contrasenia" id="contrasenia" class="form-control" required/>
								  
								  
                                
                          </div>
                         </div>
                   </div> <!-- Termina la clase de row -->
                   

                                    <br>
                                    <br>

                            <input type="hidden" id="ope" name="ope" value="1">  
                          <button type="submit" name="submit" class=" btn btn-primary">Enviar</button>
                     </form>
							  
							 
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
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