<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Formulario para la temperatura</title>

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
                    <h1 class="page-header">Registrar Temperatura</h1>
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

                         <form action="../controladores/controladorTemperatura.php" method="POST">
                        <div class="panel-body">
                                <div class="row">

                                     <div class="col-xs-4">
                                         <div class="input-group">
                                             
											 <label for="Id_tipoU">Ingresar la temperatura máxima</label>
											<input type="number" name="tempMax" id="tempMax" class="form-control" placeholder="36.1">
											 
										 </div>	 
                                     
                                   </div>
                                      <div class="col-xs-4">
                                          <div class="input">

                                              <label for="nickname">Ingresar la temperatura mínima </label>
                                              <input type="number" name="tempMin" id="tempMin" class="form-control" placeholder="16.2">
                                  
                                    </div>
                                   </div>

                              <div class="col-xs-4">
                           <div class="input-group">
						         
								 

                                  
                                  <label for="HR">Fecha</label>
                                  <input type="date" name="fecha" id="fecha" class="form-control"/>
								  
								  
                                
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