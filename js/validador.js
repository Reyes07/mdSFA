

  $(function(){
  	//exprecion Regular ejemplo

  	/*$.validator.addMethod('Metodo'.function(value,element){
        return this.optional(element)|| /exprecion/test(value);
  	});
    //se importa el id del boton a enviar
  	$("#btn btn-lg btn-success btn-block")on("click", function(){
      //se importa el id del formulario a validar
      $("#form-login").validate
      ({ */

      	$.validator.addMethod('nickname'.function(value,element){
        return this.optional(element)|| /^[0-9a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]+$/ test(value);
       	});
         //se importa el id del boton a enviar
  	    $("#btn btn-lg btn-success btn-block")on("click", function(){
          //se importa el id del formulario a validar
          $("#form-login").validate
          ({

       	rules:
      	{

              email:{ required: true, email: true, minlength:8, maxlength:80}

              numeros:{ required: true, numeros:true, minlength:2, maxlength:4}

              latinos:{ required: true, latinos:true, minlength:3, maxlength:50}

      	}

      	messages:
      	{
      		email: {required: 'El campo email es obligatorio', email: 'El formato de email es incorrecto insertalo nuevamente', minlength:'El minimo permitido son 8 caracteres', maxlength:'El maximo permitido son 80 caracteres'}
      		numeros:{ required: 'El campo es requerido', digits:'Solo se aceptan numeros',minlength:'El minimo requerido son 2 numeros', maxlength:'El maximo permitido son 4 caracteres '}
            latinos:{ required: 'El campo es requerido', latinos:'solo se aceptan caracteres latinos', minlength:'El minimo de caracteres es 3', maxlength:'El maximo de caracteres es 50'}
      	}

      });

  	});

  }); 	 
