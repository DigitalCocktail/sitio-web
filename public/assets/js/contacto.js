$(function() {
	/* Start: Interacción Contacto */
	$("#btnTrabaja").click(function(){
		$("#frmContacto").removeClass('animated fadeInRight');
		$("#frmContacto").addClass('animated fadeOutLeft');
		$("#frmContacto").css('display','none');
		$("#frmTrabaja").css('display','block');
		$("#frmTrabaja").removeClass('animated fadeOutLeft');
		$("#frmTrabaja").addClass('animated fadeInRight');
		$("#btnEscribenos").removeClass('active');
		$("#btnEscribenos").addClass('trabaja');
		$(this).removeClass("trabaja");
		$(this).addClass("active");
	});
	$("#btnEscribenos").click(function(){
		$("#frmTrabaja").removeClass('animated fadeInRight');
		$("#frmTrabaja").addClass('animated fadeOutLeft');
		$("#frmTrabaja").css('display','none');
		$("#frmContacto").css('display','block');
		$("#frmContacto").removeClass('animated fadeOutLeft');
		$("#frmContacto").addClass('animated fadeInRight');
		$("#btnTrabaja").removeClass('active');
		$("#btnTrabaja").addClass('trabaja');
		$(this).removeClass("trabaja");
		$(this).addClass("active");
	});	

	$("#chkSuscripcionTrabaja").change(function(){
		if($(this).is(":checked")){
			$("#listasCorreoTrabaja").show('slow');
			$("#listasCorreoTrabaja").removeClass('animated fadeOutLeft');
			$("#listasCorreoTrabaja").addClass('animated fadeInLeft');
		}
		else{			
			$("#listasCorreoTrabaja").removeClass('animated fadeInLeft');
			$("#listasCorreoTrabaja").addClass('animated fadeOutLeft');
			$("#listasCorreoTrabaja").hide('slow');
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

	$("#frm-contacto").submit(function(e){
		e.preventDefault();
		$nombre = $("#nombre-contacto");
		$email = $("#correo-contacto");
		$interes = $("#interesa-contacto :selected");
		$mensaje = $("#mensaje-contacto");
		var suscribirse = ($("#chkSuscripcionContacto").is(':checked'))? 1 : 0;
		var eventos = ($("#eventos").is(':checked'))? 1 : 0;
		var promociones = ($("#promociones").is(':checked'))? 1 : 0;
		var blog = ($("#blog").is(':checked'))? 1 : 0;
		datos = "nombre="+$nombre.val()+"&email="+$email.val()+"&interes="+$interes.text()+"&mensaje="+$mensaje.val()+"&suscribirse="+suscribirse+"&eventos="+eventos+"&promociones="+promociones+"&blog="+blog;
		error = 0;
		if(isEmpty($nombre.val())){
			error ++;
			$nombre.addClass('has-error');
		}
		else{
			$nombre.removeClass('has-error');
		}
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
			cargando('#frm-contacto');
			$.ajax({
				type: "POST",
				dataType: 'json',
				data: datos,
				url: rutaContactarServicio,
				success: function(result){
					success();
				}
			});
		}
	});		

	$("#frm-contacto").change(function(){
		selected = [];
		$('#listasCorreoContacto input:checked').each(function() {
	    	selected.push($(this).attr('name'));
		});
		if(selected.length <= 0){
			$("#chkSuscripcionContacto").prop('checked', false);
			$("#listasCorreoContacto").removeClass('animated fadeInLeft');
			$("#listasCorreoContacto").addClass('animated fadeOutLeft');
			$("#listasCorreoContacto").hide('slow');
		}
	});

	/* End: Interacción Contacto */	

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