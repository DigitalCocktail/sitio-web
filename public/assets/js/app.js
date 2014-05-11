$(function() {

	/* Start: Animaciones Flip del Home */
	$(".investigacion").hover(function(){
		$("#imgInvestigacion").removeClass('animated flipInY');
		$("#imgInvestigacion").addClass('animated flipOutY');

		$("#textInvestigacion").removeClass('animated flipOutY');
		$("#textInvestigacion").show().addClass('animated flipInY');
	}, function(){
		$("#textInvestigacion").removeClass('animated flipInY');
		$("#textInvestigacion").addClass('animated flipOutY');	

		$("#imgInvestigacion").removeClass('animated flipOutY');
		$("#imgInvestigacion").addClass('animated flipInY');			
	});

	$(".planeacion").hover(function(){
		$("#imgPlaneacion").removeClass('animated flipInY');
		$("#imgPlaneacion").addClass('animated flipOutY');

		$("#textPlaneacion").removeClass('animated flipOutY');
		$("#textPlaneacion").show().addClass('animated flipInY');
	}, function(){
		$("#textPlaneacion").removeClass('animated flipInY');
		$("#textPlaneacion").addClass('animated flipOutY');	

		$("#imgPlaneacion").removeClass('animated flipOutY');
		$("#imgPlaneacion").addClass('animated flipInY');			
	});	

	$(".ejecucion").hover(function(){
		$("#imgEjecucion").removeClass('animated flipInY');
		$("#imgEjecucion").addClass('animated flipOutY');

		$("#textEjecucion").removeClass('animated flipOutY');
		$("#textEjecucion").show().addClass('animated flipInY');
	}, function(){
		$("#textEjecucion").removeClass('animated flipInY');
		$("#textEjecucion").addClass('animated flipOutY');	

		$("#imgEjecucion").removeClass('animated flipOutY');
		$("#imgEjecucion").addClass('animated flipInY');			
	});	

	$(".acompanamiento").hover(function(){
		$("#imgAcompanamiento").removeClass('animated flipInY');
		$("#imgAcompanamiento").addClass('animated flipOutY');

		$("#textAcompanamiento").removeClass('animated flipOutY');
		$("#textAcompanamiento").show().addClass('animated flipInY');
	}, function(){
		$("#textAcompanamiento").removeClass('animated flipInY');
		$("#textAcompanamiento").addClass('animated flipOutY');	

		$("#imgAcompanamiento").removeClass('animated flipOutY');
		$("#imgAcompanamiento").addClass('animated flipInY');			
	});			
	/* End: Animaciones Flip del Home */

	/* Start: Menú Lateral Servicios Móvil */
	var open = 0;
	$(".btn-cerrar").click(function(){	
		if(open == 0){
			$(".menu-servicios").animate({
				marginLeft: '0%',
				zIndex: '13'
			});
			$(".btn-cerrar > a").animate({
				left: '30%'
			});
			$(".capa-opacidad").show(1,'linear');
			$(".btn-cerrar > a").html("x <span>Cerrar</span>");
			open = 1;
		}
		else{
			cerrarMenu();
		}
	});	

	$(".capa-opacidad").click(function(){
		cerrarMenu();
	});
	/* End: Menú Lateral Servicios Móvil */

	/* Start: Suscripción Boletín Servicios */
	$(".chkSuscripcion").change(function(){
		if($(this).is(":checked")){
			$(".listas-correo").show('slow');
			$(".listas-correo").removeClass('animated fadeOutLeft');
			$(".listas-correo").addClass('animated fadeInLeft');
		}
		else{			
			$(".listas-correo").removeClass('animated fadeInLeft');
			$(".listas-correo").addClass('animated fadeOutLeft');
			$(".listas-correo").hide('slow');
		}
	});
	/* End: Suscripción Boletín Servicios */

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
	/* End: Interacción Contacto */

	/* Start: Servicios */
	var hash = window.location.hash.slice(1);
	var cl = 'ed';
	var h = 'estrategia-digital';
	if(hash == ""){
		hash = "estrategia-digital";
		cl = 'ed';
		h = 'estrategia-digital';
	}
	else if(hash == "estrategia-digital"){
		cl = 'ed';
		h = 'estrategia-digital';
	}	
	else if(hash == 'desarrollo-web'){
		cl = 'dw';
		h = 'desarrollo-web';
	}
	else if(hash == 'consultoria-digital'){
		cl = 'cd';
		h = 'consultoria-digital';
	}
	else if(hash == 'email-marketing'){
		cl = 'em';
		h = 'email-marketing';
	}
	else if(hash == 'contenidos'){
		cl = 'con';
		h = 'contenidos';
	}
	else if(hash == 'redes-sociales'){
		cl = 'rs';
		h = 'redes-sociales';
	}
	else if(hash == 'seo'){
		cl = 'se';
		h = 'seo';
	}
	else if(hash == 'publicidad-online'){
		cl = 'po';
		h = 'publicidad-online';
	}
	else if(hash == 'analitica-web'){
		cl = 'aw';
		h = 'analitica-web';
	}
	else if(hash == 'apps-nube'){
		cl = 'an';
		h = 'apps-nube';
	}
	ocultar();
	$("." + hash).addClass('mostrar animated fadeInDown');
	$("." + cl).addClass('active');
	$('.ed').click(function(){
		ocultar();
		$(".estrategia-digital").addClass('mostrar animated fadeInDown');
		h = "estrategia-digital";
		$(this).addClass('active');
		cerrarMenu();
	});
	$('.dw').click(function(){
		ocultar(hash);
		$(".desarrollo-web").addClass('mostrar animated fadeInDown');
		h = "desarrollo-web";
		$(this).addClass('active');
		cerrarMenu();
	});	
	$('.cd').click(function(){
		ocultar(hash);
		$(".consultoria-digital").addClass('mostrar animated fadeInDown');
		h = "consultoria-digital";
		$(this).addClass('active');
		cerrarMenu();
	});		
	$('.em').click(function(){
		ocultar(hash);
		$(".email-marketing").addClass('mostrar animated fadeInDown');
		h = "email-marketing";
		$(this).addClass('active');
		cerrarMenu();
	});
	$('.con').click(function(){
		ocultar(hash);
		$(".contenidos").addClass('mostrar animated fadeInDown');
		h = "contenidos";
		$(this).addClass('active');
		cerrarMenu();
	});
	$('.rs').click(function(){
		ocultar(hash);
		$(".redes-sociales").addClass('mostrar animated fadeInDown');
		h = "redes-sociales";
		$(this).addClass('active');
		cerrarMenu();
	});
	$('.se').click(function(){
		ocultar(hash);
		$(".seo").addClass('mostrar animated fadeInDown');
		h = "seo";
		$(this).addClass('active');
		cerrarMenu();
	});
	$('.po').click(function(){
		ocultar(hash);
		$(".publicidad-online").addClass('mostrar animated fadeInDown');
		h = "publicidad-online";
		$(this).addClass('active');
		cerrarMenu();
	});
	$('.aw').click(function(){
		ocultar(hash);
		$(".analitica-web").addClass('mostrar animated fadeInDown');
		h = "analitica-web";
		$(this).addClass('active');
		cerrarMenu();
	});					
	$('.an').click(function(){
		ocultar(hash);
		$(".apps-nube").addClass('mostrar animated fadeInDown');
		h = "apps-nube";
		$(this).addClass('active');
		cerrarMenu();
	});	

	function resetSuscripcion(){
		$(".chkSuscripcion").prop('checked',true);
		$(".listas-correo").removeClass('animated fadeOutLeft');
		$(".listas-correo").show('slow');
	}

	function ocultar(){
		resetSuscripcion();
		$(".estrategia-digital").removeClass('mostrar animated fadeInDown');
		$(".ed").removeClass('active');
		$(".desarrollo-web").removeClass('mostrar animated fadeInDown');
		$(".dw").removeClass('active');
		$(".consultoria-digital").removeClass('mostrar animated fadeInDown');
		$(".cd").removeClass('active');	
		$(".email-marketing").removeClass('mostrar animated fadeInDown');
		$(".em").removeClass('active');
		$(".contenidos").removeClass('mostrar animated fadeInDown');
		$(".con").removeClass('active');
		$(".redes-sociales").removeClass('mostrar animated fadeInDown');
		$(".rs").removeClass('active');
		$(".seo").removeClass('mostrar animated fadeInDown');
		$(".se").removeClass('active');
		$(".publicidad-online").removeClass('mostrar animated fadeInDown');
		$(".po").removeClass('active');	
		$(".analitica-web").removeClass('mostrar animated fadeInDown');
		$(".aw").removeClass('active');
		$(".apps-nube").removeClass('mostrar animated fadeInDown');
		$(".an").removeClass('active');
	}

	function cerrarMenu(){
		if (Modernizr.mq('(max-width: 991px)')){
			$(".menu-servicios").animate({
				marginLeft: '-30%',
				zIndex: '12'
			});
		}
		else{
			$(".menu-servicios").animate({
				zIndex: '12'
			});
		}

		$(".btn-cerrar > a").animate({
			left: '0%'
		});			
		$(".capa-opacidad").hide(1,'linear');
		$(".btn-cerrar > a").html("+ <span>Servicios</span>");
		open = 0;
	};
	/* End: Servicios */
	
	/* Start: Formulario Servicios */
	$(".btnShow").click(function(){
		$("#frm-" + h).css('display','block');
		$("html, body").animate({ scrollTop: $("#frm-" + h).offset().top }, 1000);
		$("#frm-" + h).addClass('animated tada');
	});

	$("#frm-estrategia-digital").submit(function(e){
		e.preventDefault();
		$nombre = $("#ed-nombre-servicios");
		$email = $("#ed-email-servicios");
		$telefono = $("#ed-tel-servicios");
		$suscribirse = $("#ed-suscribirse");
		$eventos = $("#ed-eventos");
		$promociones = $("#ed-promociones");
		$blog = $("#ed-blog");
		datos = "nombre="+$nombre.val()+"&email="+$email.val()+"&telefono="+$telefono.val()+"&suscribirse="+$suscribirse.val()+"&eventos="+$eventos.val()+"&promociones="+$promociones.val()+"&blog="+$blog.val()+"&s=ed";
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
			cargando('#ed', '#frm-estrategia-digital');
			$.ajax({
				type: "POST",
				dataType: 'json',
				data: datos,
				url: rutaContactarServicio,
				success: function(result){
					success('#ed');
				}
			});
		}
	});

	$("#frm-desarrollo-web").submit(function(e){
		e.preventDefault();
		$nombre = $("#dw-nombre-servicios");
		$email = $("#dw-email-servicios");
		$telefono = $("#dw-tel-servicios");
		$suscribirse = $("#dw-suscribirse");
		$eventos = $("#dw-eventos");
		$promociones = $("#dw-promociones");
		$blog = $("#dw-blog");
		datos = "nombre="+$nombre.val()+"&email="+$email.val()+"&telefono="+$telefono.val()+"&suscribirse="+$suscribirse.val()+"&eventos="+$eventos.val()+"&promociones="+$promociones.val()+"&blog="+$blog.val()+"&s=dw";
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
			cargando('#dw', '#frm-desarrollo-web');
			$.ajax({
				type: "POST",
				dataType: 'json',
				data: datos,
				url: rutaContactarServicio,
				success: function(result){
					success('#dw');
				}
			});
		}
	});

	$("#frm-consultoria-digital").submit(function(e){
		e.preventDefault();
		$nombre = $("#cd-nombre-servicios");
		$email = $("#cd-email-servicios");
		$telefono = $("#cd-tel-servicios");
		$suscribirse = $("#cd-suscribirse");
		$eventos = $("#cd-eventos");
		$promociones = $("#cd-promociones");
		$blog = $("#cd-blog");
		datos = "nombre="+$nombre.val()+"&email="+$email.val()+"&telefono="+$telefono.val()+"&suscribirse="+$suscribirse.val()+"&eventos="+$eventos.val()+"&promociones="+$promociones.val()+"&blog="+$blog.val()+"&s=cd";
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
			cargando('#cd', '#frm-consultoria-digital');
			$.ajax({
				type: "POST",
				dataType: 'json',
				data: datos,
				url: rutaContactarServicio,
				success: function(result){
					success('#cd');
				}
			});
		}
	});

	$("#frm-email-marketing").submit(function(e){
		e.preventDefault();
		$nombre = $("#em-nombre-servicios");
		$email = $("#em-email-servicios");
		$telefono = $("#em-tel-servicios");
		$suscribirse = $("#em-suscribirse");
		$eventos = $("#em-eventos");
		$promociones = $("#em-promociones");
		$blog = $("#em-blog");
		datos = "nombre="+$nombre.val()+"&email="+$email.val()+"&telefono="+$telefono.val()+"&suscribirse="+$suscribirse.val()+"&eventos="+$eventos.val()+"&promociones="+$promociones.val()+"&blog="+$blog.val()+"&s=em";
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
			cargando('#em', '#frm-email-marketing');
			$.ajax({
				type: "POST",
				dataType: 'json',
				data: datos,
				url: rutaContactarServicio,
				success: function(result){
					success('#em');
				}
			});
		}
	});

	$("#frm-contenidos").submit(function(e){
		e.preventDefault();
		$nombre = $("#co-nombre-servicios");
		$email = $("#co-email-servicios");
		$telefono = $("#co-tel-servicios");
		$suscribirse = $("#co-suscribirse");
		$eventos = $("#co-eventos");
		$promociones = $("#co-promociones");
		$blog = $("#co-blog");
		datos = "nombre="+$nombre.val()+"&email="+$email.val()+"&telefono="+$telefono.val()+"&suscribirse="+$suscribirse.val()+"&eventos="+$eventos.val()+"&promociones="+$promociones.val()+"&blog="+$blog.val()+"&s=co";
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
			cargando('#co', '#frm-contenidos');
			$.ajax({
				type: "POST",
				dataType: 'json',
				data: datos,
				url: rutaContactarServicio,
				success: function(result){
					success('#co');
				}
			});
		}
	});

	$("#frm-redes-sociales").submit(function(e){
		e.preventDefault();
		$nombre = $("#rs-nombre-servicios");
		$email = $("#rs-email-servicios");
		$telefono = $("#rs-tel-servicios");
		$suscribirse = $("#rs-suscribirse");
		$eventos = $("#rs-eventos");
		$promociones = $("#rs-promociones");
		$blog = $("#rs-blog");
		datos = "nombre="+$nombre.val()+"&email="+$email.val()+"&telefono="+$telefono.val()+"&suscribirse="+$suscribirse.val()+"&eventos="+$eventos.val()+"&promociones="+$promociones.val()+"&blog="+$blog.val()+"&s=rs";
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
			cargando('#rs', '#frm-redes-sociales');
			$.ajax({
				type: "POST",
				dataType: 'json',
				data: datos,
				url: rutaContactarServicio,
				success: function(result){
					success('#rs');
				}
			});
		}
	});

	$("#frm-seo").submit(function(e){
		e.preventDefault();
		$nombre = $("#se-nombre-servicios");
		$email = $("#se-email-servicios");
		$telefono = $("#se-tel-servicios");
		$suscribirse = $("#se-suscribirse");
		$eventos = $("#se-eventos");
		$promociones = $("#se-promociones");
		$blog = $("#se-blog");
		datos = "nombre="+$nombre.val()+"&email="+$email.val()+"&telefono="+$telefono.val()+"&suscribirse="+$suscribirse.val()+"&eventos="+$eventos.val()+"&promociones="+$promociones.val()+"&blog="+$blog.val()+"&s=se";
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
			cargando('#se', '#frm-seo');
			$.ajax({
				type: "POST",
				dataType: 'json',
				data: datos,
				url: rutaContactarServicio,
				success: function(result){
					success('#se');
				}
			});
		}
	});

	$("#frm-publicidad-online").submit(function(e){
		e.preventDefault();
		$nombre = $("#po-nombre-servicios");
		$email = $("#po-email-servicios");
		$telefono = $("#po-tel-servicios");
		$suscribirse = $("#po-suscribirse");
		$eventos = $("#po-eventos");
		$promociones = $("#po-promociones");
		$blog = $("#po-blog");
		datos = "nombre="+$nombre.val()+"&email="+$email.val()+"&telefono="+$telefono.val()+"&suscribirse="+$suscribirse.val()+"&eventos="+$eventos.val()+"&promociones="+$promociones.val()+"&blog="+$blog.val()+"&s=po";
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
			cargando('#po', '#frm-publicidad-online');
			$.ajax({
				type: "POST",
				dataType: 'json',
				data: datos,
				url: rutaContactarServicio,
				success: function(result){
					success('#po');
				}
			});
		}
	});

	$("#frm-analitica-web").submit(function(e){
		e.preventDefault();
		$nombre = $("#aw-nombre-servicios");
		$email = $("#aw-email-servicios");
		$telefono = $("#aw-tel-servicios");
		$suscribirse = $("#aw-suscribirse");
		$eventos = $("#aw-eventos");
		$promociones = $("#aw-promociones");
		$blog = $("#aw-blog");
		datos = "nombre="+$nombre.val()+"&email="+$email.val()+"&telefono="+$telefono.val()+"&suscribirse="+$suscribirse.val()+"&eventos="+$eventos.val()+"&promociones="+$promociones.val()+"&blog="+$blog.val()+"&s=aw";
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
			cargando('#aw', '#frm-analitica-web');
			$.ajax({
				type: "POST",
				dataType: 'json',
				data: datos,
				url: rutaContactarServicio,
				success: function(result){
					success('#aw');
				}
			});
		}
	});

	$("#frm-apps-nube").submit(function(e){
		e.preventDefault();
		$nombre = $("#an-nombre-servicios");
		$email = $("#an-email-servicios");
		$telefono = $("#an-tel-servicios");
		$suscribirse = $("#an-suscribirse");
		$eventos = $("#an-eventos");
		$promociones = $("#an-promociones");
		$blog = $("#an-blog");
		datos = "nombre="+$nombre.val()+"&email="+$email.val()+"&telefono="+$telefono.val()+"&suscribirse="+$suscribirse.val()+"&eventos="+$eventos.val()+"&promociones="+$promociones.val()+"&blog="+$blog.val()+"&s=an";
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
			cargando('#an', '#frm-apps-nube');
			$.ajax({
				type: "POST",
				dataType: 'json',
				data: datos,
				url: rutaContactarServicio,
				success: function(result){
					success('#an');
				}
			});
		}
	});
	/* End: Formulario Servicios */	

	/* Funciones útiles */
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

	function cargando(slug, frm){
		$frm = $(frm);
		$frm.hide();
		$cargando = $(slug + "-cargando");
		$cargando.show();
	}

	function success(slug){
		$cargando = $(slug + "-cargando");
		$cargando.hide();		
		$success = $(slug + "-success");
		$success.show();		
	}
});