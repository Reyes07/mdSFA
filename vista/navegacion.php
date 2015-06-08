 <?php 
 $var=$_REQUEST['id'];
 include_once '../datos/cConexion.php';
 $con= new cConexion(null);
          $con->conectar();
          $sql="select latitud,longitud from zona where Id_Zona=".$var.";";
          
          $res=$con->consulta($sql);
          #echo $sql;
          while($fila=$con->fetch_array($res))
            {

              
          
       
          

 echo "<a onclick=\"cargar(".$var.",'precipitacionPluvial')\" class=\"list-group-item\">
        <span class=\"glyphicon glyphicon-leaf\"></span> Precipitación Pluvial <span class=\"badge\"></span>
    </a>
    <a  onclick=\"cargar(".$var.",'humedadRelativa')\"  class=\"list-group-item\">
        <span class=\"glyphicon glyphicon-leaf\" type=\"button\" id=\"boton\"></span> Humedad Relativa <span class=\"badge\"></span>
    </a>
    <a onclick=\"cargar(".$var.",'radSolar')\"  class=\"list-group-item\">
        <span class=\"glyphicon glyphicon-leaf\"></span>Radiación Solar  <span class=\"badge\"></span>
    </a>
    <a class=\"list-group-item\">
        <span class=\"glyphicon glyphicon-leaf\"></span> Datos Geologicos <span class=\"badge\"></span><br/>
        Latitud:<span class=\"badge\">".$fila['latitud']."</span><br/>
        Longitud:<span class=\"badge\">".$fila['longitud']."</span>
    </a>";
    }
          $con->desconectar();
    
    ?>