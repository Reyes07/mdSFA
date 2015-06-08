<?php 
include_once '../datos/cConexion.php';
$con=null;
echo '
<html>
  <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ["Año",  "Humedad Relativa"],';
          
          $con= new cConexion(null);
          $con->conectar();
          $res=$con->consulta("select Id_Zona,avg(`humedadRelativa`) as hr,Year(fecha) as anio from geozona where Id_Zona=2 group by year(fecha) ");

          while($fila=$con->fetch_array($res))
            {

              
          echo "['".$fila['anio']."',".$fila['hr']."],";
       
            }
          $con->desconectar();
        echo "]);

        var options = {
          title: 'Humedad relativa',
          hAxis: {title: 'Año',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id='chart_div' style='width: 900px; height: 500px;'></div>
  </body>
</html>";

?>