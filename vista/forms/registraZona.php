<?php


echo"
   <form id='guardar' action='../controlador/controladorzona.php' method='POST' rol='form' style='text-align:center;'>
     <center>
      <div class='row'>
      <input type='hidden' name='ope' value='1'>
	       <p><label for='nombre'>Nombre Zona</label>
		    <input type='text' name='nombre' id='nombre'  placeholder='Registre una zona' class='col-sm-3 control-label'/></p>
	   </div>
	   <div class='row'>
	       <p><label for='latitud'>Latitud</label>
		    <input type='text' name='latitud' id='latitud'  placeholder='Escriba la latitud' class='col-sm-3 control-label' /></p>
	   </div>
	  <div class='row'>
	       <p><label for='longitud'>Longitud</label>
		    <input type='text' name='longitud' id='longitud'  placeholder='Escriba la longitud' class='col-sm-3 control-label' /></p>
	   </div>
	  
	   	   <div class='modal-footer'>
	       <input type='submit' class='btn btn-default' value='Guardar' />
	       <input type='reset' class='btn btn-default' value='Restablecer' />

		   
	   </div>
	   </center>
   </form>"; 

?>