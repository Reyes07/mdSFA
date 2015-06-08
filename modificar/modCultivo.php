<?php 
	include("../datos/cConexion.php"); 
	$con=new cConexion();
	$con->conectar();
	$query="select * from cultivo where Id_cultivo=".$_GET["clave"];
	$tabla=$con->consulta($query);
	$reg=$con->fetch_array($tabla);
?>

	<form id="formulario" action="../controladores/controladorCultivo.php" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="ope" value="3">
	<table border="0">
		
				<input type="hidden" id="Id_cultivo" name="Id_cultivo" value="<?php echo $reg["Id_cultivo"];?>"/>
			
				
				<tr><td><p class="contact"><label for="nombre">Nombre</label></p></td>
				<td><input id="campos" name="nombre" type="text" value="<?php echo $reg["nombre"];?>"/></td>
				</tr>
				
				<tr><td><p class="contact"><label for="name">Cargar imagen:</label></p></td>
    			<td><!--input id="direccion" name="direccion" type="file" value="<?php #echo $reg["direccion"];?-->" placeholder="<?php echo $reg["direccion"];?>"/!--> 
    				<input type="hidden" name="direccion" value="<?php echo $reg['direccion'];?>" >
    				<img src="<?php echo $reg['direccion'];?>" width="120px"></img>
				</td></tr>
				
				<tr><td><p class="contact"><label for="name">Humedad Relativa:</label></p></td>
    			<td><input id="campos" name="HR" type="text" value="<?php echo $reg["HR"];?>"/>
				°</td></tr>
				
                <tr><td><p class="contact"><label for="name">Precipitacion Pluvial:</label></p></td>
    			<td><input id="campos" name="pre_pluvial" type="text" value="<?php echo $reg["pre_pluvial"];?>"/>
				MM.</td></tr>
                
                 <tr><td><p class="contact"><label for="name">Temperatura Maxima:</label></p></td>
    			<td><input id="campos" name="tempMax" type="text" value="<?php echo $reg["tempMax"];?>"/>
				°</td></tr>
                
                <tr><td><p class="contact"><label for="name">Temperatura Minima:</label></p></td>
    			<td><input id="campos" name="tempMin" type="text" value="<?php echo $reg["tempMin"];?>"/>
				°</td></tr>

				<tr><td><p class="contact"><label for="name">Temperatura Recomendada:</label></p></td>
    			<td><input id="campos" name="tempRecomendada" type="text" value="<?php echo $reg["tempRecomendada"];?>"/>
				°</td></tr>

				<tr><td><p class="contact"><label for="name">Estatus: </label></p></td>
				<td><select class="form-control" id="status" name="status">
											      <?php
                                                        include("../clases/cEstatus.php");	
                                                        $tipo=new cEstatus(null);
								                        $lista=$tipo->listarEstatus("select status,descripcion from estatus",'0','0');
								                        foreach($lista as $elemento)
							                            echo "<option value=".$elemento->getstatus().">".$elemento->getdescripcion()."</option>";
								 													
												  ?>
                                               </select>
                                    </div>
                                   </div>

                            

                        
                   </div> <!-- Termina la clase de row -->
				</td></tr>
				
				
				
				<tr><td>
			<br/>
		
	</td></tr>
 </form> 