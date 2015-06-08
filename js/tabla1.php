<?php 
include_once '../datos/cConexion.php';
$campo=$_REQUEST['id'];
$idcampo=$_REQUEST['idzona'];

switch ($idcampo) {

  case 'radSolar':
    # code...
  $titulo='Radiación Solar';
    break;

  case 'precipitacionPluvial':
    # code...
  $titulo='Precipitación Pluvial';
    break;

    case 'humedadRelativa':
    # code...
  $titulo='Humedad Relativa';
    break;
  default:
    # code...
  $titulo='Error';
    break;
}
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

    echo '<table class="table table-striped table-bordered table-responsive">
        <thead>
          <tr>
            <th>Año</th>
            <th>'.$titulo.'</th>
          </tr>
        </thead>
        <tbody>
          ';

          $con2=new cConexion(null);
          $con2->conectar();
          #$sql2="select Id_Zona,avg(`".$idcampo."`) as campo,Year(fecha) as anio from geozona where Id_Zona=".$campo." group by year(fecha)";
          #echo $sql2;
          $res1=$con2->consulta("select Id_Zona,avg(`".$idcampo."`) as campo,Year(fecha) as anio from geozona where Id_Zona=".$campo." group by year(fecha)");

          while($fi=$con2->fetch_array($res1))
            {

             # $nombre=$con->consulta('select nombre from geozona where Id_Zona=');
         # echo "['".."',".."],";
        
            echo '<tr><td>'.$fi['anio'].'</td><td>'.$fi['campo'].'</td></tr>';
            }
        $con2->desconectar();
            echo'
         
          
          
        </tbody>
      </table>';

     ?>