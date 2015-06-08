<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Formulario de Cultivo</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
   <!-- <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">-->

    <!--<link href="css/base.min.css" rel="stylesheet"> -->

    <script src="../js/jquery-2.1.0.min.js" type="text/javascript"></script>
  <script src="../js/jquery-1.9.1.min.js" type="text/javascript"></script>
	
	<!-- paquete de iconos para el menu 
	<link href="../dist/css/iconos/fonts.css" rel="stylesheet">-->
	

    <!-- Custom Fonts -->
   <!-- <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
   

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  
  
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-green" >
                        <div class="panel-heading">
                            Formulario de Cultivo
                        </div>

                         <form action="../controladores/controladorCultivo.php" method="POST" enctype="multipart/form-data">
                        <div class="panel-body">
                                <div class="row">

                                     <div class="col-xs-4">
                                       <div class="input-group">
                                               
                                               <label for="nombre">Nombre del cultivo</label>
                                                   <input type="text" style="color: #333;" name="nombre" id="nombre" class="form-control" placeholder="Ingresa el nombre del cultivo" data-bv-notempty="true" data-bv-notempty-message="Campo obligatorio">
                                     </div>
                                   </div>
                                      <div class="col-xs-4">
                                          <div class="input-group">

                                              <label for="direccion">Ingresa la imagen del cultivo</label>
                                              <input type="file" name="direccion" id="direccion" class="form-control" placeholder="cultivo.jpg">
                                  
                                    </div>
                                   </div>

                              <div class="col-xs-4">
                           <div class="input-group">
                                  
                                  <label for="HR">Humedad Relativa</label>
                                  <input type="number" name="HR" id="HR" class="form-control" placeholder="ingresa el valor de la humedad relativa">
                                
                          </div>
                         </div>
                   </div> <!-- Termina la clase de row -->
                    <br>
                    <br>
                   <div class="row">

                                     <div class="col-xs-4">
                                       <div class="input-group">
                                               
                                               <label for="pre_pluvial">Presipitación Pluvial</label>
                                                   <input type="number" name="pre_pluvial" id="pre_pluvial" class="form-control" placeholder="Ingresa la presipitación pluvial">
                                     </div>
                                   </div>
                                      <div class="col-xs-4">
                                          <div class="input-group">

                                              <label for="tempMax">Ingresa la Temperatura Máxima</label>
                                              <input type="number" name="tempMax" id="tempMax" class="form-control" placeholder="Ingresa la temperatura máxima del cultivo">
                                  
                                    </div>
                                   </div>

                              <div class="col-xs-4">
                           <div class="input-group">
                                  
                                  <label for="tempMin">Ingresa la Temperatura Mínima</label>
                                  <input type="number" name="tempMin" id="tempMin" class="form-control" placeholder="Ingresa la temperatura mínima del cultivo">
                                
                          </div>
                         </div>

                        
                   </div> <!-- Termina la clase de row -->
                   
                   <br>
                   <br>
                   <div class="row">

                                     

                              <div class="col-xs-4">
                           <div class="input-group">
                                  
                                  <label for="tempRecomendada">Ingresa la Temperatura Recomendada</label>
                                  <input type="number" name="tempRecomendada" id="tempRecomendada" class="form-control" placeholder="Ingresa la temperatura recomendada">
                                
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
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <!--<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>-->

    <!-- Custom Theme JavaScript -->
    <!--<script src="../dist/js/sb-admin-2.js"></script>-->

</body>

</html>
