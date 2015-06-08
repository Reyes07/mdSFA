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
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--<script src="../js/validation/bootstrapValidator.js"></script>-->

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
                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                    <h1 class="page-header">Registra los datos del usuario</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Datos del Usuario
                        </div>

                         <form action="../controladores/controladorDatosUsuario.php" method="POST">
                        <div class="panel-body">
                                <div class="row">

                                     <div class="col-xs-4">
                                       <div class="input-group">
                                               
                                               <label for="nombre">Nombre</label>
                                                   <input type="text" style="color: #333;" name="nombre" id="nombre" class="form-control" placeholder="Nombre" data-bv-notempty="true" data-bv-notempty-message="Campo obligatorio">
                                     </div>
                                   </div>
                                      <div class="col-xs-4">
                                          <div class="input-group">

                                              <label for="apPat">Apellido paterno</label>
                                              <input type="text" name="apPat" id="apPat" class="form-control" placeholder="apellido paterno">
                                  
                                    </div>
                                   </div>

                              <div class="col-xs-4">
                           <div class="input-group">
                                  
                                  <label for="apMat">Apellido Materno</label>
                                  <input type="text" name="apMat" id="apMat" class="form-control" placeholder="apellido materno">
                                
                          </div>
                         </div>
                   </div> <!-- Termina la clase de row -->
                    <br>
                    <br>
                   <div class="row">

                                     <div class="col-xs-4">
                                       <div class="input-group">
                                               
                                               <label for="inputEmail">e-mail</label>
                                                   <input type="email" name="email" id="email" class="form-control" placeholder="ejemplo@utcv.edu.com">
                                     </div>
                                   </div>
								   
                                      <div class="col-xs-4">
                                          <div class="input-group">

                                              
                                                <label for="Id_tipoU">Seleccione el nombre de usuario</label>
											   
											   <select class="form-control" id="Id_usuario" name="Id_usuario">
											      <?php
                                                        include("../clases/cUsuario.php");	
                                                        $tipo=new cUsuario(null);
								                        $lista=$tipo->listartodos("select Id_usuario,nickname from usuario",'0','0');
								                        foreach($lista as $elemento)
							                            echo "<option value=".$elemento->getId_usuario().">".$elemento->getnickname()."</option>";
								 													
												  ?>
                                               </select>
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
