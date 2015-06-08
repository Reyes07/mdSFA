<?php
    session_start();
    $_SESSION['puerta']="pagregistro";
    //$_SESSION['puerta']="index.php";
    
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../imagenes/iconoSFA.png" type="image/x-icon">

    
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="../js/vali/dist/jquery.validate.js"></script>

   <!-- <script type="text/javascript" src="../js/validador.js"></script>-->


<script>
  $(function(){
    //exprecion Regular ejemplo

    /*$.validator.addMethod('Metodo'.function(value,element){
        return this.optional(element)|| /exprecion/test(value);
    });
    //se importa el id del boton a enviar
    $("#btn btn-lg btn-success btn-block")on("click", function(){
      //se importa el id del formulario a validar
      $("#form-login").validate
      ({ */

        $.validator.addMethod('nickname', function(value, element)
        {
        return this.optional(element) || /^[0-9a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]+$/ test(value);
        });
         //se importa el id del boton a enviar
        $("#btn")on("click", function(){
          //se importa el id del formulario a validar
          $("#login").validate
          ({



        rules:
        {

              email:{ required: true, email: true, minlength:8, maxlength:80}

              numeros:{ required: true, numeros:true, minlength:2, maxlength:4}

              latinos:{ required: true, latinos:true, minlength:3, maxlength:50}

        }

        messages:
        {
            email: {required: 'El campo email es obligatorio', email: 'El formato de email es incorrecto insertalo nuevamente', minlength:'El minimo permitido son 8 caracteres', maxlength:'El maximo permitido son 80 caracteres'}
            numeros:{ required: 'El campo es requerido', digits:'Solo se aceptan numeros',minlength:'El minimo requerido son 2 numeros', maxlength:'El maximo permitido son 4 numeros '}
            nickname:{ required: 'El campo es requerido', nickname:'solo se aceptan caracteres latinos', minlength:'El minimo de caracteres es 3', maxlength:'El maximo de caracteres es 50'}
        }

      });

    });

  });    
</script>

    <title>Ingresar a SFA</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title" align="center">Iniciar Sesión</h1>
						<br>
						
					   <div align="center"> <img src="../imagenes/logosfa.jpg"/></div>
                    </div>
                    <div class="panel-body">
                        <form role="form" form name="login-form" id="login" action="../validar/v1.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <label>Ingresa tu Nombre de usuario</label><input class="form-control" placeholder="Ingresa tu Nickname" id="nickname" name="nickname" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Ingresa tu contraseña</label><input class="form-control" placeholder="Contraseña"  id="contrasenia" name="contrasenia" type="password" value="" required ""/>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Recordarme
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input class="btn btn-lg btn-success btn-block" id="btn" type="submit"name="submit" value="Ingresar"/>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
