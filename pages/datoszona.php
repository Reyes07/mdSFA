<?php 
include_once '../datos/cConexion.php';
$campo=$_REQUEST['id'];
$idcampo=$_REQUEST['nombre'];


/*echo "
<script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
    <script type=\"text/javascript\">
      google.load(\"visualization\", \"1\", {packages:[\"table\"]});
      google.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Año');
        data.addColumn('number', 'Promedio de precipitaciones al año');
        data.addRows([";
          $con2=new cConexion(null);
          $con2->conectar();
          #$sql2="select Id_Zona,avg(`".$idcampo."`) as campo,Year(fecha) as anio from geozona where Id_Zona=".$campo." group by year(fecha)";
          #echo $sql2;
          $res1=$con2->consulta("select Id_Zona,avg(`".$idcampo."`) as campo,Year(fecha) as anio from geozona where Id_Zona=".$campo." group by year(fecha)");

          while($fi=$con2->fetch_array($res1))
            {

             # $nombre=$con->consulta('select nombre from geozona where Id_Zona=');
          echo "['".$fi['anio']."',".$fi['campo']."],";
        }
        $con2->desconectar();

       echo " ]);
        var table = new google.visualization.Table(document.getElementById('datos'));
        table.draw(data, {showRowNumber: true});
      }
    </script>";*/

    echo '<div class="row">
      
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <div class="table-responsive">
      
    <table class="table table-stripped table-bordered table-codensed">
    <caption>Datos de la zona seleccionada</caption>
        <thead>
          
        </thead>
        <tbody>
          ';

          $con2=new cConexion(null);
          $con2->conectar();
          #$sql2="select Id_Zona,avg(`".$idcampo."`) as campo,Year(fecha) as anio from geozona where Id_Zona=".$campo." group by year(fecha)";
          #echo $sql2;
          $res1=$con2->consulta("select Id_Zona,max(humedadRelativa) as hrmax, min(humedadRelativa) as hrmin, avg(humedadRelativa) as hrok, max(precipitacionPluvial) as ppmax, min(precipitacionPluvial) as ppmin,  avg(precipitacionPluvial) as ppok, max(radSolar) as rsmax,
          min(radSolar) as rsmin, avg(radSolar) as rsok from geozona where Id_Zona=".$campo." ");

          while($fi=$con2->fetch_array($res1))
            {

             # $nombre=$con->consulta('select nombre from geozona where Id_Zona=');
         # echo "['".."',".."],";
        
            echo '<tr><th>Zona</th><td>'.$idcampo.'</td>Cultivo Elegido</tr><tr>
            <th>Temperatura mínima</th><td>'.$fi["rsmin"].'</td></tr><tr>
            <th>Temperatura ideal</th><td>'.$fi["rsok"].'</td></tr><tr>
            <th>Temperatura máxima</th><td>'.$fi["rsmax"].'</td></tr><tr>
            <th>Precipitación pluvial mínima</th><td>'.$fi["ppmin"].'</td></tr><tr>
            <th>Precipitación pluvial ideal</th><td>'.$fi["ppok"].'</td></tr><tr>
            <th>Precipitación pluvial máxima</th><td>'.$fi["ppmax"].'</td></tr><tr>
            <th>Humedad relativa mínima </th><td>'.$fi["hrmin"].'</td></tr><tr>
            <th>Humedad relativa ideal</th><td>'.$fi["hrok"].'</td></tr><tr>
            <th>Humedad relativa máxima</th><td>'.$fi["hrmax"].'</td></tr><tr>
          ';
            }
        $con2->desconectar();
            echo'
         
          
          
        </tbody>
      </table> </div></div>
        
   
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
   
 <form action="../controlador/factibilidad.php" method="POST" accept-charset="utf-8">

            <input type="hidden" name="id" value="'.$campo.'">
           <input type="hidden" name="nombre" value="'.$idcampo.'">
            <table class="table table-stripped table-bordered table-codensed">
            <tr><th>Datos cultivo </th><td> </td></tr><tr>
            <th>Temperatura mínima</th>
            <td><input type="text" name="tempMin" value="" placeholder="Temperatura Minima"></td></tr>
            <tr>
            <th>Temperatura ideal</th>
            <td><input type="text" name="tempRecomendada" value="" placeholder="Temperatura Recomendada"></td></tr>
            <tr>
            <th>Temperatura máxima</th>
            <td><input type="text" name="tempMax" value="" placeholder="Temperatura Maxima"></td></tr>
            <tr>
            <th>Precipitación pluvial mínima</th>
            <td><input type="text" name="pre_pluvialmin" value="" placeholder="Precipitación Pluvial Minima "></td></tr>
            <tr>
            <th>Precipitación pluvial ideal</th>
            <td><input type="text" name="pre_pluvial" value="" placeholder="Precipitación Pluvial Ideal"></td></tr>
            <tr>
            <th>Precipitación pluvial máxima</th>
            <td><input type="text" name="pre_pluvialmax" value="" placeholder="Precipitación Pluvial Maxima"></td></tr>
            <tr>
            <th>Humedad relativa mínima </th>
            <td><input type="text" name="hrmin" value="" placeholder="Humedad Relativa minima"></td></tr>
            <tr>
            <th>Humedad relativa ideal</th>
            <td><input type="text" name="HR" value="" placeholder="Humedad Relativa Ideal"></td></tr>
            <tr>
            <th>Humedad relativa máxima</th>
            <td><input type="text" name="hrmax" value="" placeholder="Humedad Relativa Maxima"></td></tr><tr>
             <tr><td colspan="2">
             <input type="submit" name="probar" value="Probar Factibilidad" class="btn btn-danger"></input>
             
             </tr></table><div>
            </form> </div>';
          


  


     ?>