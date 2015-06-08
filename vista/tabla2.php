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
echo '
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.jqplot.min.js"></script>
<script type="text/javascript" src="js/jqplot.dateAxisRenderer.min.js"></script>
<script type="text/javascript" src="js/jqplot.cursor.min.js"></script>
<script type="text/javascript" src="js/jqplot.highlighter.min.js"></script>
<script type="text/javascript">
var grafica=jQuery.noConflict();
grafica(document).ready(function(){

    grafica.jqplot.config.enablePlugins = true;
    grafica.jqplot._noToImageButton = true;
 
  goog = [';
 $con= new cConexion(null);
          $con->conectar();
          #$sql=;
          #echo $sql;
          $res=$con->consulta("select Id_Zona,avg(`".$idcampo."`) as campo,Year(fecha) as anio from geozona where Id_Zona=".$campo." group by year(fecha)");

          while($fila=$con->fetch_array($res))
            {

              $anio=$fila['anio']+1;
          echo "['".$anio."',".$fila['campo']."],";
       
            }
          $con->desconectar();

  
 echo "];
 
  opts = {
      title: '".$titulo."',
      series: [{
          neighborThreshold: 0
      }],
      axes: {
          xaxis: {
            renderer:grafica.jqplot.DateAxisRenderer,
            min:'2012',
            tickInterval: \"1 year\",
            tickOptions:{formatString:\"%Y\"}
          },
          yaxis: {
              // renderer: grafica.jqplot.LogAxisRenderer,
              tickOptions:{prefix:''}
          }
      },
      cursor:{zoom:true}
  };
 
  plot1 = grafica.jqplot('graficos', [goog], opts);
  });
</script>


";
?>
