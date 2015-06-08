function cargarZona(id){
$('#lista').load('../vista/navegacion.php?id='+id);
}

function cargarfuncion(id,nombre){
$('#datos').load('../pages/datoszona.php?id='+id+'&nombre='+nombre);
}


function cargar(id,idzona){
$('#datos').load('../js/tabla1.php?id='+id+'&idzona='+idzona);
$('#graficos').load('../vista/tabla2.php?id='+id+'&idzona='+idzona);
}

function loadzona(){
    $('#area').load('../datos/cargardatoszona.php');
}

function cargardatoszona(limite)
{

    var url="../datos/cargardatoszona.php";
    $.post(url,{limite:limite},function(responseText){
        $("#area").html(responseText);
    });
}

//FUNCION PARA DETERMINAR EL SOPORTE PARA AJAX, DE ACUERDO AL EXPLORADOR.
function ajaxFunction() {
    var xmlHttp;
    try {
            // Firefox, Opera 8.0+, Safari
            xmlHttp=new XMLHttpRequest();
            return xmlHttp;
        } catch (e) {
                // Internet Explorer
                try {
                        xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
                        return xmlHttp;
                } catch (e) {
                        try {
                                xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
                                return xmlHttp;
                            } catch (e) {
                                alert("Tu navegador no soporta AJAX!");
                                return false;
                            }
                }
       }
}


function Enviar(_pagina,capa,metodo) {
    var ajax;
    ajax = ajaxFunction();
    if(metodo=='GET'){
        //alert(_pagina);
        ajax.open("GET", _pagina, true);
    }
    else if(metodo=='POST'){
        ajax.open("POST", _pagina, true);    
    }    
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    ajax.onreadystatechange = function()
        {
            if (ajax.readyState == 4)
                {
                    document.getElementById(capa).innerHTML = ajax.responseText;
                }
        }
    ajax.send(null);
}
//FUNCION PARA CARGAR UNA PAGINA EN EL CONTENIDO
function Enviar1(_pagina,capa,metodo) {
    var ajax;
    ajax = ajaxFunction();
    if(metodo=='GET'){
		//alert(_pagina);
        ajax.open("GET", _pagina, true);
    }
    else if(metodo=='POST'){
        ajax.open("POST", _pagina, true);    
    }    
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    ajax.onreadystatechange = function()
        {
            if (ajax.readyState == 4)
                {
                    document.getElementById(capa).innerHTML = ajax.responseText;
                }
        }
    ajax.send(null);
}
/////////////////////////////FORMULARIOS
//FORMULARIO
function gradient(id, level)
{
	var box = document.getElementById(id);
	box.style.opacity = level;
	box.style.MozOpacity = level;
	box.style.KhtmlOpacity = level;
	box.style.filter = "alpha(opacity=" + level * 100 + ")";
	box.style.display="block";
	return;
}
function fadein(id) 
{
	var level = 0;
	while(level <= 1)
	{
		setTimeout( "gradient('" + id + "'," + level + ")", (level* 1000) + 10);
		level += 0.01;
	}
}

function closebox()
{
   document.getElementById('box').style.display='none';
   document.getElementById('shadowing').style.display='none';
}
function EnviarForm(_pagina,capa,metodo,formtitle,fadin) {
    var ajax;
    ajax = ajaxFunction();
    if(metodo=='GET'){
        ajax.open("GET", _pagina, true);	
    }
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    ajax.onreadystatechange = function()
        {
            if (ajax.readyState == 4)
                {
                      document.getElementById(capa).innerHTML = ajax.responseText;
					  var box = document.getElementById('box'); 
					  document.getElementById('shadowing').style.display='block';
					
					  var btitle = document.getElementById('boxtitle');
					  btitle.innerHTML = formtitle;
					  
					  if(fadin)
					  {
						 gradient("box", 0);
						 fadein("box");
					  }
					  else
					  { 	
						box.style.display='block';
					  }  	
                }
        }
    ajax.send(null);
}


  function EnviarParametros(_pagina,formulario,capa,metodo) {
    var ajax;
    var post="";
	var mensaje="";
    var frm;
    
    ajax = ajaxFunction();
    if (ajax==false) {
    	alert("Exception AJAX");
    	return;
    }
    if(formulario!=''){
     	frm = document.getElementById(formulario);	
    		for (i=0;i<frm.elements.length;i++)
    		{
    			if((frm.elements[i].type == "textarea") ||(frm.elements[i].type == "date") || (frm.elements[i].type == "time") || (frm.elements[i].type == "text")||frm.elements[i].type == "checkbox"|| (frm.elements[i].type == "hidden")||(frm.elements[i].type == "password")||(frm.elements[i].type == "email")||(frm.elements[i].type == "select-one")) {				
					if(frm.elements[i].type=="text" && frm.elements[i].value==""){
						mensaje+="Falta el campo obligatorio: " +frm.elements[i].name  +"\n";
					}
					else{				
						post += frm.elements[i].name + "=";
    					post += frm.elements[i].value ;
    					post += "&";
					}
    			}
    		}
    //		post=post.substring(1,post.length-1);
     	}
	//alert(_pagina+post);
	if(mensaje!=""){alert(mensaje);return;}	
    ajax.open("POST", _pagina, true);    
    ajax.onreadystatechange = function(){
        if (ajax.readyState == 4){
                document.getElementById(capa).innerHTML = ajax.responseText;
	}
    }
	 ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    if(formulario!=''){
    		if(post!=''){
    			ajax.send(post); 		
    		}	
    }
    
   }
   
function EnviarParametros2(_pagina,formulario,capa,metodo) {
    var ajax;
    var post="";
	var mensaje="";
    var frm;
    
    ajax = ajaxFunction();
    if (ajax==false) {
    	alert("Exception AJAX");
    	return;
    }
    if(formulario!=''){
     	frm = document.getElementById(formulario);	
    		for (i=0;i<frm.elements.length;i++)
    		{
    			if((frm.elements[i].type == "textarea") ||(frm.elements[i].type == "date") || (frm.elements[i].type == "time") || (frm.elements[i].type == "text")||frm.elements[i].type == "checkbox"|| (frm.elements[i].type == "hidden")||(frm.elements[i].type == "password")||(frm.elements[i].type == "email")||(frm.elements[i].type == "select-one")) {				
						post += frm.elements[i].name + "=";
    					post += frm.elements[i].value ;
    					post += "&";
    			}
    		}
    //		post=post.substring(1,post.length-1);
     	}
	//alert(_pagina+post);
	if(mensaje!=""){alert(mensaje);return;}	
    ajax.open("POST", _pagina, true);    
    ajax.onreadystatechange = function(){
        if (ajax.readyState == 4){
                document.getElementById(capa).innerHTML = ajax.responseText;
	}
    }
	 ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    if(formulario!=''){
    		if(post!=''){
    			ajax.send(post); 		
    		}	
    }
    
   }
   
   
   
   //CAPAS
   function mostrar(nombreCapa) { 
		nombreCapa=nombreCapa; 
		document.getElementById(nombreCapa).style.display="block"; 
   } 
	
	function cerrar(nombreCapa) { 
	 	nombreCapa=nombreCapa; 
		 document.getElementById(nombreCapa).style.display="none"; 
	} 
	
	function evalua(nombreCapa){ 
		nombreCapa=nombreCapa; 
		if (document.getElementById(nombreCapa).style.display == "none") {                         
		mostrar(nombreCapa); 
		return true;
			} else { 
		cerrar(nombreCapa); 
		return false;
		} 
	}  
	
	function evaluarCapas(nombreCapa1,nombreCapa2){ 
		if (document.getElementById(nombreCapa1).style.display == "none") {                         
			mostrar(nombreCapa1);
			cerrar(nombreCapa2); 
		return true;
			} else { 
			mostrar(nombreCapa2);		
			cerrar(nombreCapa1); 
		return false;
		} 
	}
	   
//Confirmacion
function confirmarborrado(ruta, capa, metodo){
	if(confirm('Acaba de elegir eliminar el registro. ¿Desea continuar?')){ 
		Enviar(ruta, capa, metodo);
	}
	else{
			alert('SE CANCELO LA ELIMINACION');
	}
}

function acomodar(){
	if(confirm('Una vez que se ha realizado el acomodo de los usarios, el proceso no se puede deshacer. ¿Está seguro?')){ 
		EnviarParametros2('../controlador/controladorAfiliados.php?ope=2','frmSuscripciones','content','POST');
	}
	else{
			alert('PROCESO CANCELADO');
	}
}


function confirmarEdad(){
	if(confirm('El usuario seleccionado es MENOR DE EDAD. ¿Está seguro de aprobarlo?')){ 
		EnviarParametros('../controlador/controladorAfiliados.php?ope=1','frmAsignar','content','POST');
	}
	else{
			alert('ASIGNACIÓN CANCELADO');
	}
}
function borrar(url){
                if(confirm('Desea eliminar el registro?')){
                
                    document.location=url;
                }
                else{

                    return false;
                }
                }

function confirmarEdad2(){
	if(confirm('CONFIRMADO CORTE. ¿Está seguro de aprobarlo?')){ 
		EnviarParametros2('../controlador/controladorPago.php?ope=6','frmPagos','content','POST');	
	}
	else{
			alert('ASIGNACIÓN CANCELADO');
	}
}

function borrarCORTE(){
	if(confirm('ELIMNANDO CORTE. ¿Está seguro?')){ 
		EnviarParametros2('../controlador/controladorPago.php?ope=7','frmPagos','content','POST');
	}
	else{
			alert('Eliminación cancelada');
	}
}


function confirmarPagos(){
	if(confirm('Una vez realizado el corte de BINARIO, no podrá realizar cambios. ¿Está seguro?')){ 
		EnviarParametros('../controlador/controladorPago.php?ope=4','frmCorte','content','POST');
	}
	else{
			alert('Corte cancelado');
	}
}

function confirmarPagosU(){
	if(confirm('Una vez realizado el corte de UNILEVEL, no podrá realizar cambios. ¿Está seguro?')){ 
		EnviarParametros('../controlador/controladorPago.php?ope=5','frmCorte','content','POST');
	}
	else{
			alert('Corte cancelado');
	}
}

//Cambiar el concepto

function getConceptos(form){
		frm = document.getElementById(form);	
    		for (i=0;i<frm.elements.length;i++)
    		{
					//alert("control"+ frm.elements[i].name  + "Tipo:" + frm.elements[i].type );
    			if(frm.elements[i].type == "select-one"){

					if(frm.elements[i].name =="concepto"){
    					idConcepto= frm.elements[i].value;
						//alert(idConcepto);
					}
					else if(frm.elements[i].name=="monto"){
						frm.elements[i].value=idConcepto;
						break;
					}
				}
			}
}


//Validaciones
function soloNumeros(evt){
//asignamos el valor de la tecla a keynum
if(window.event){// IE
keynum = evt.keyCode;
}else{
keynum = evt.which;
}
//comprobamos si se encuentra en el rango
if(keynum==8) return true;
if(keynum>47 && keynum<58){
return true;
}else{
return false;
}
}


function validarTexto(e, destino) {
    //tecla = (document.all) ? e.keyCode : e.which;
    tecla = e.keyCode ? e.keyCode : e.which
    
    if (tecla==8) return true; //Tecla de retroceso (para poder borrar)
    if (tecla == 13) destino.focus(); 
 	if (tecla == 9) destino.focus(); 
    patron =/[A-Z a-z wáéíóúÁÉÍÓÚ]/; // Solo acepta letras
    te = String.fromCharCode(tecla);
    return patron.test(te);	
 
} 

//MOSTRAR ALERT

function mensaje(mensaje){
	alert(mensaje);
}


function buscador(e, form){ 
     var i; 

     if (e.keyCode) 
         i = e.keyCode; 
     else if (e.which) 
         i = e.which; 
     else 
         return false; 

     if (i == 13) {
		 form.submit(); 
	 }

     return true; 
} 

