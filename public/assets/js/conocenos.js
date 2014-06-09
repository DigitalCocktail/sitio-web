	$(function() {
	/* Start: Fomulario de Suscripción */
	$("#frm-suscribir").change(function(){
		var selected = [];
		$('.listas-correo input:checked').each(function() {
	    	selected.push($(this).attr('name'));
		});
		if(selected.length <= 0){
			$("#chkSuscripcionContacto").prop('checked', false);
			$("#listasCorreoContacto").removeClass('animated fadeInLeft');
			$("#listasCorreoContacto").addClass('animated fadeOutLeft');
			$("#listasCorreoContacto").hide('slow');
		}
	});

	$("#frm-suscribir").submit(function(e){
		e.preventDefault();
		$(this).hide();
		$("#cargando").show();
		$email = $("#mail-suscripcion");
		var suscribirse = ($("#chkSuscripcionContacto").is(':checked'))? 1 : 0;
		var eventos = ($("#eventos").is(':checked'))? 1 : 0;
		var promociones = ($("#promociones").is(':checked'))? 1 : 0;
		var blog = ($("#blog").is(':checked'))? 1 : 0;
		datos = "email="+$email.val()+"&suscribirse="+suscribirse+"&eventos="+eventos+"&promociones="+promociones+"&blog="+blog;
		error = 0;
		if(isEmpty($email.val())){
	    	$email.addClass("has-error");
	      	error++;
		}
		else if(isEmail($email.val())){
	    	$email.addClass("has-error");
	      	error++;					
		}
		else {
			$email.removeClass("has-error");
		}	
		if(error == 0){
			$.ajax({
				type: "POST",
				dataType: 'json',
				data: datos,
				url: rutaSuscribirse,
				success: function(result){
					$("#cargando").hide();
					$("#success").show();
				}
			});
		}
	});	

	$("#chkSuscripcionContacto").change(function(){
		if($(this).is(":checked")){
			$("#eventos").prop('checked', true);
			$("#promociones").prop('checked', true);
			$("#blog").prop('checked', true);
			$("#listasCorreoContacto").show('slow');
			$("#listasCorreoContacto").removeClass('animated fadeOutLeft');
			$("#listasCorreoContacto").addClass('animated fadeInLeft');
		}
		else{			
			$("#listasCorreoContacto").removeClass('animated fadeInLeft');
			$("#listasCorreoContacto").addClass('animated fadeOutLeft');
			$("#listasCorreoContacto").hide('slow');
		}
	});	

	/* End: Formulario de Suscriptición */

	function isEmpty (mixed_var) {
	  var undef, key, i, len;
	  var emptyValues = [undef, null, false, 0, "", "0"];

	  for (i = 0, len = emptyValues.length; i < len; i++) {
	    if (mixed_var === emptyValues[i]) {
	      return true;
	    }
	  }

	  if (typeof mixed_var === "object") {
	    for (key in mixed_var) {
	      // TODO: should we check for own properties only?
	      //if (mixed_var.hasOwnProperty(key)) {
	      return false;
	      //}
	    }
	    return true;
	  }

	  return false;
	}

	function isEmail(valor){
		// creamos nuestra regla con expresiones regulares.
		var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
		// utilizamos test para comprobar si el parametro valor cumple la regla
		if(filter.test(valor))
			return false;
		else
			return true;
	}

	function cargando(frm){
		$frm = $(frm);
		$frm.hide();
		$cargando = $("#cargando");
		$cargando.show();
	}

	function success(){
		$cargando = $("#cargando");
		$cargando.hide();		
		$success = $("#success");
		$success.show();		
	}	
});