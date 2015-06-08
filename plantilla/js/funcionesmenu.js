/*
var aux=jQuery.noConflict();
aux(function (){
   
   aux("#cultivo").click(function(){
     
        aux("#area").load("../formularios/registraCultivo.php");
   });

});
*/
function cargarcultivo(limite)
{

  var url="../vista/listarcultivos.php";
  $.post(url,{limite:limite},function(responseText){
    $("#area").html(responseText);
  })
}




$(function (){
   
   $("#cultivo").click(function(){
     
        $("#area").load("formCultivo.php");
   });

});
 
   $(function (){
   
   $("#ListaZona").click(function(){
     
        $("#area").load("../zona.php");
   });

});
  


 $(function (){
   
   $("#listacultivo").click(function(){
     
        $("#area").load("../vista/listarCultivos.php");
   });

});




$(function (){
   
   $("#nuevoU").click(function(){
     
        $("#area").load("../pages/formUsuario.php");
   });

});

$(function (){
   
   $("#temp").click(function(){
     
        $("#area").load("../pages/formTemperatura.php");
   });

});