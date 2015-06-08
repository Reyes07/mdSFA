<html>
<head>
<title>Usuarios</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<script src="../js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="../js/jquery.easing.min.js" type="text/javascript"></script>

</head>
<body>
<div id="mhead"><h2> <span class="red"></span></h2></div>
<div id="container">
<p id="msg"></p>
<ul id='navigate'>
  <li class="navi_sec active"><a id="add_user">Agregar usuario</a></li>
  <li class="navi_sec"><a id='show_user'>Todos los usuarios</a></li>
</ul>
<div id="add_user_sec" class="user_section">
   <form name='signup' id='signup'>
      <div class='row'>
	       <p><label for='nombre'>Nombre(s)</label>
		    <input type='text' name='nombre' id='nombre' value='' placeholder='Registre su nombre' /></p>
	   </div>
	   <div class='row'>
	       <p><label for='apellidop'>Apellido Paterno</label>
		    <input type='text' name='apellidop' id='apellidop' value='' placeholder='Registre su apellido paterno' /></p>
	   </div>
	   <div class='row'>
	       <p><label for='email'>Apellido Materno</label>
		    <input type='text' name='email' id='email' value='' placeholder='Enter Email' /></p>
	   </div>
	   <div class='row'>
	        <p><label for='favjob'>Favourite Job</label>
			 <input type='text' name='favjob' id='favjob' value='' placeholder='Enter Favorite Job' /></p>
	      
	   </div>
	   <input type="hidden" name="actionfunction" value="saveData" />
	   <div class='row'>
	       <input type='button' id='formsubmit' class='submit' value='Submit' />
		   
	   </div>
   </form>
</div>
<div id="show_user_sec" class="user_section">
<table id='userists' cellspacing="0">
      
</table>
</div>
<div id="update_user_sec" class="user_section">

</div>
</div>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>