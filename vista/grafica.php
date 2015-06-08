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
<script type="text/javascript" src="js/jqplot.highlighter.min.js"></script>';
echo "
<script>
var aux=jQuery.noConflict();
aux(document).ready(function(){
  var line1 = [";
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


  
 echo "];
  var plot1 = aux.jqplot('graficos', [line1], {
      title: '".$titulo."', 
      seriesDefaults: { 
        showMarker:false,
        pointLabels: { show:true } 
      }
  });
});
</script>
";