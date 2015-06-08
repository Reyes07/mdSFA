<?php 

include_once '../datos/cConexion.php';
$campo=$_REQUEST['id'];
$idcampo=utf8_encode($_REQUEST['idzona']);
# $idcampo;
$con=null;
echo '
   <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ["Año",  "Humedad Relativa"],';
          
          $con= new cConexion(null);
          $con->conectar();
          #$sql=;
          #echo $sql;
          $res=$con->consulta("select Id_Zona,avg(`".$idcampo."`) as campo,Year(fecha) as anio from geozona where Id_Zona=".$campo." group by year(fecha)");

          while($fila=$con->fetch_array($res))
            {

              
          echo "['".$fila['anio']."',".$fila['campo']."],";
       
            }
          $con->desconectar();
        echo "]);

        var options = {
          title: 'Datos historicos',
          hAxis: {title: 'Año',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('graf'));
        chart.draw(data, options);
      }
    </script>";

     ?>
     <div class="graf"></div>