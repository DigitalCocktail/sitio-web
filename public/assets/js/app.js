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
			$("#" + cl + "-eventos").prop('checked', true);
			$("#" + cl + "-promociones").prop('checked', true);
			$("#" + cl + "-blog").prop('checked', true);			
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

	$(".estrategia-digital").addClass('mostrar animated fadeInDown');
	$(".desarrollo-web").addClass('mostrar animated fadeInDown');
	$(".consultoria-digital").addClass('mostrar animated fadeInDown');
	$(".email-marketing").addClass('mostrar animated fadeInDown');
	$(".contenidos").addClass('mostrar animated fadeInDown');
	$(".redes-sociales").addClass('mostrar animated fadeInDown');
	$(".seo").addClass('mostrar animated fadeInDown');
	$(".publicidad-online").addClass('mostrar animated fadeInDown');
	$(".analitica-web").addClass('mostrar animated fadeInDown');
	$(".apps-nube").addClass('mostrar animated fadeInDown');

	/* End: Interacción Contacto */

	/* Start: Servicios *
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
		cl = 'co';
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
		cl = 'ed';
	});
	$('.dw').click(function(){
		ocultar(hash);
		$(".desarrollo-web").addClass('mostrar animated fadeInDown');
		h = "desarrollo-web";
		$(this).addClass('active');
		cerrarMenu();
		cl = 'dw';
	});	
	$('.cd').click(function(){
		ocultar(hash);
		$(".consultoria-digital").addClass('mostrar animated fadeInDown');
		h = "consultoria-digital";
		$(this).addClass('active');
		cerrarMenu();
		cl = 'cd';
	});		
	$('.em').click(function(){
		ocultar(hash);
		$(".email-marketing").addClass('mostrar animated fadeInDown');
		h = "email-marketing";
		$(this).addClass('active');
		cerrarMenu();
		cl = 'em';
	});
	$('.con').click(function(){
		ocultar(hash);
		$(".contenidos").addClass('mostrar animated fadeInDown');
		h = "contenidos";
		$(this).addClass('active');
		cerrarMenu();
		cl = 'co';
	});
	$('.rs').click(function(){
		ocultar(hash);
		$(".redes-sociales").addClass('mostrar animated fadeInDown');
		h = "redes-sociales";
		$(this).addClass('active');
		cerrarMenu();
		cl = 'rs';
	});
	$('.se').click(function(){
		ocultar(hash);
		$(".seo").addClass('mostrar animated fadeInDown');
		h = "seo";
		$(this).addClass('active');
		cerrarMenu();
		cl = 'se';
	});
	$('.po').click(function(){
		ocultar(hash);
		$(".publicidad-online").addClass('mostrar animated fadeInDown');
		h = "publicidad-online";
		$(this).addClass('active');
		cerrarMenu();
		cl = 'po';
	});
	$('.aw').click(function(){
		ocultar(hash);
		$(".analitica-web").addClass('mostrar animated fadeInDown');
		h = "analitica-web";
		$(this).addClass('active');
		cerrarMenu();
		cl = 'aw';
	});					
	$('.an').click(function(){
		ocultar(hash);
		$(".apps-nube").addClass('mostrar animated fadeInDown');
		h = "apps-nube";
		$(this).addClass('active');
		cerrarMenu();
		cl = 'an';
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
		var suscribirse = ($("#ed-suscribirse").is(':checked'))? 1 : 0;
		var eventos = ($("#ed-eventos").is(':checked'))? 1 : 0;
		var promociones = ($("#ed-promociones").is(':checked'))? 1 : 0;
		var blog = ($("#ed-blog").is(':checked'))? 1 : 0;
		datos = "nombre="+$nombre.val()+"&email="+$email.val()+"&telefono="+$telefono.val()+"&suscribirse="+suscribirse+"&eventos="+eventos+"&promociones="+promociones+"&blog="+blog+"&s=ed";
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

	$("#frm-estrategia-digital").change(function(){
		selected = [];
		$('#listas-correo-ed input:checked').each(function() {
	    	selected.push($(this).attr('name'));
		});
		if(selected.length <= 0){
			$("#ed-suscribirse").prop('checked', false);
			$("#listas-correo-ed").removeClass('animated fadeInLeft');
			$("#listas-correo-ed").addClass('animated fadeOutLeft');
			$("#listas-correo-ed").hide('slow');
		}
	});

	$("#frm-desarrollo-web").submit(function(e){
		e.preventDefault();
		$nombre = $("#dw-nombre-servicios");
		$email = $("#dw-email-servicios");
		$telefono = $("#dw-tel-servicios");
		var suscribirse = ($("#dw-suscribirse").is(':checked'))? 1 : 0;
		var eventos = ($("#dw-eventos").is(':checked'))? 1 : 0;
		var promociones = ($("#dw-promociones").is(':checked'))? 1 : 0;
		var blog = ($("#dw-blog").is(':checked'))? 1 : 0;
		datos = "nombre="+$nombre.val()+"&email="+$email.val()+"&telefono="+$telefono.val()+"&suscribirse="+suscribirse+"&eventos="+eventos+"&promociones="+promociones+"&blog="+blog+"&s=dw";
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

	$("#frm-desarrollo-web").change(function(){
		selected = [];
		$('#listas-correo-dw input:checked').each(function() {
	    	selected.push($(this).attr('name'));
		});
		if(selected.length <= 0){
			$("#dw-suscribirse").prop('checked', false);
			$("#listas-correo-dw").removeClass('animated fadeInLeft');
			$("#listas-correo-dw").addClass('animated fadeOutLeft');
			$("#listas-correo-dw").hide('slow');
		}
	});

	$("#frm-consultoria-digital").submit(function(e){
		e.preventDefault();
		$nombre = $("#cd-nombre-servicios");
		$email = $("#cd-email-servicios");
		$telefono = $("#cd-tel-servicios");
		var suscribirse = ($("#cd-suscribirse").is(':checked'))? 1 : 0;
		var eventos = ($("#cd-eventos").is(':checked'))? 1 : 0;
		var promociones = ($("#cd-promociones").is(':checked'))? 1 : 0;
		var blog = ($("#cd-blog").is(':checked'))? 1 : 0;
		datos = "nombre="+$nombre.val()+"&email="+$email.val()+"&telefono="+$telefono.val()+"&suscribirse="+suscribirse+"&eventos="+eventos+"&promociones="+promociones+"&blog="+blog+"&s=cd";
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

	$("#frm-consultoria-digital").change(function(){
		selected = [];
		$('#listas-correo-cd input:checked').each(function() {
	    	selected.push($(this).attr('name'));
		});
		if(selected.length <= 0){
			$("#cd-suscribirse").prop('checked', false);
			$("#listas-correo-cd").removeClass('animated fadeInLeft');
			$("#listas-correo-cd").addClass('animated fadeOutLeft');
			$("#listas-correo-cd").hide('slow');
		}
	});

	$("#frm-email-marketing").submit(function(e){
		e.preventDefault();
		$nombre = $("#em-nombre-servicios");
		$email = $("#em-email-servicios");
		$telefono = $("#em-tel-servicios");
		var suscribirse = ($("#em-suscribirse").is(':checked'))? 1 : 0;
		var eventos = ($("#em-eventos").is(':checked'))? 1 : 0;
		var promociones = ($("#em-promociones").is(':checked'))? 1 : 0;
		var blog = ($("#em-blog").is(':checked'))? 1 : 0;
		datos = "nombre="+$nombre.val()+"&email="+$email.val()+"&telefono="+$telefono.val()+"&suscribirse="+suscribirse+"&eventos="+eventos+"&promociones="+promociones+"&blog="+blog+"&s=em";
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

	$("#frm-email-marketing").change(function(){
		selected = [];
		$('#listas-correo-em input:checked').each(function() {
	    	selected.push($(this).attr('name'));
		});
		if(selected.length <= 0){
			$("#em-suscribirse").prop('checked', false);
			$("#listas-correo-em").removeClass('animated fadeInLeft');
			$("#listas-correo-em").addClass('animated fadeOutLeft');
			$("#listas-correo-em").hide('slow');
		}
	});

	$("#frm-contenidos").submit(function(e){
		e.preventDefault();
		$nombre = $("#co-nombre-servicios");
		$email = $("#co-email-servicios");
		$telefono = $("#co-tel-servicios");
		var suscribirse = ($("#co-suscribirse").is(':checked'))? 1 : 0;
		var eventos = ($("#co-eventos").is(':checked'))? 1 : 0;
		var promociones = ($("#co-promociones").is(':checked'))? 1 : 0;
		var blog = ($("#co-blog").is(':checked'))? 1 : 0;
		datos = "nombre="+$nombre.val()+"&email="+$email.val()+"&telefono="+$telefono.val()+"&suscribirse="+suscribirse+"&eventos="+eventos+"&promociones="+promociones+"&blog="+blog+"&s=co";
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

	$("#frm-contenidos").change(function(){
		selected = [];
		$('#listas-correo-co input:checked').each(function() {
	    	selected.push($(this).attr('name'));
		});
		if(selected.length <= 0){
			$("#co-suscribirse").prop('checked', false);
			$("#listas-correo-co").removeClass('animated fadeInLeft');
			$("#listas-correo-co").addClass('animated fadeOutLeft');
			$("#listas-correo-co").hide('slow');
		}
	});

	$("#frm-redes-sociales").submit(function(e){
		e.preventDefault();
		$nombre = $("#rs-nombre-servicios");
		$email = $("#rs-email-servicios");
		$telefono = $("#rs-tel-servicios");
		var suscribirse = ($("#rs-suscribirse").is(':checked'))? 1 : 0;
		var eventos = ($("#rs-eventos").is(':checked'))? 1 : 0;
		var promociones = ($("#rs-promociones").is(':checked'))? 1 : 0;
		var blog = ($("#rs-blog").is(':checked'))? 1 : 0;
		datos = "nombre="+$nombre.val()+"&email="+$email.val()+"&telefono="+$telefono.val()+"&suscribirse="+suscribirse+"&eventos="+eventos+"&promociones="+promociones+"&blog="+blog+"&s=rs";
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

	$("#frm-redes-sociales").change(function(){
		selected = [];
		$('#listas-correo-rs input:checked').each(function() {
	    	selected.push($(this).attr('name'));
		});
		if(selected.length <= 0){
			$("#rs-suscribirse").prop('checked', false);
			$("#listas-correo-rs").removeClass('animated fadeInLeft');
			$("#listas-correo-rs").addClass('animated fadeOutLeft');
			$("#listas-correo-rs").hide('slow');
		}
	});

	$("#frm-seo").submit(function(e){
		e.preventDefault();
		$nombre = $("#se-nombre-servicios");
		$email = $("#se-email-servicios");
		$telefono = $("#se-tel-servicios");
		var suscribirse = ($("#se-suscribirse").is(':checked'))? 1 : 0;
		var eventos = ($("#se-eventos").is(':checked'))? 1 : 0;
		var promociones = ($("#se-promociones").is(':checked'))? 1 : 0;
		var blog = ($("#se-blog").is(':checked'))? 1 : 0;
		datos = "nombre="+$nombre.val()+"&email="+$email.val()+"&telefono="+$telefono.val()+"&suscribirse="+suscribirse+"&eventos="+eventos+"&promociones="+promociones+"&blog="+blog+"&s=se";
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

	$("#frm-seo").change(function(){
		selected = [];
		$('#listas-correo-se input:checked').each(function() {
	    	selected.push($(this).attr('name'));
		});
		if(selected.length <= 0){
			$("#se-suscribirse").prop('checked', false);
			$("#listas-correo-se").removeClass('animated fadeInLeft');
			$("#listas-correo-se").addClass('animated fadeOutLeft');
			$("#listas-correo-se").hide('slow');
		}
	});

	$("#frm-publicidad-online").submit(function(e){
		e.preventDefault();
		$nombre = $("#po-nombre-servicios");
		$email = $("#po-email-servicios");
		$telefono = $("#po-tel-servicios");
		var suscribirse = ($("#po-suscribirse").is(':checked'))? 1 : 0;
		var eventos = ($("#po-eventos").is(':checked'))? 1 : 0;
		var promociones = ($("#po-promociones").is(':checked'))? 1 : 0;
		var blog = ($("#po-blog").is(':checked'))? 1 : 0;
		datos = "nombre="+$nombre.val()+"&email="+$email.val()+"&telefono="+$telefono.val()+"&suscribirse="+suscribirse+"&eventos="+eventos+"&promociones="+promociones+"&blog="+blog+"&s=po";
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

	$("#frm-publicidad-online").change(function(){
		selected = [];
		$('#listas-correo-po input:checked').each(function() {
	    	selected.push($(this).attr('name'));
		});
		if(selected.length <= 0){
			$("#po-suscribirse").prop('checked', false);
			$("#listas-correo-po").removeClass('animated fadeInLeft');
			$("#listas-correo-po").addClass('animated fadeOutLeft');
			$("#listas-correo-po").hide('slow');
		}
	});

	$("#frm-analitica-web").submit(function(e){
		e.preventDefault();
		$nombre = $("#aw-nombre-servicios");
		$email = $("#aw-email-servicios");
		$telefono = $("#aw-tel-servicios");
		var suscribirse = ($("#aw-suscribirse").is(':checked'))? 1 : 0;
		var eventos = ($("#aw-eventos").is(':checked'))? 1 : 0;
		var promociones = ($("#aw-promociones").is(':checked'))? 1 : 0;
		var blog = ($("#aw-blog").is(':checked'))? 1 : 0;
		datos = "nombre="+$nombre.val()+"&email="+$email.val()+"&telefono="+$telefono.val()+"&suscribirse="+suscribirse+"&eventos="+eventos+"&promociones="+promociones+"&blog="+blog+"&s=aw";
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

	$("#frm-analitica-web").change(function(){
		selected = [];
		$('#listas-correo-aw input:checked').each(function() {
	    	selected.push($(this).attr('name'));
		});
		if(selected.length <= 0){
			$("#aw-suscribirse").prop('checked', false);
			$("#listas-correo-aw").removeClass('animated fadeInLeft');
			$("#listas-correo-aw").addClass('animated fadeOutLeft');
			$("#listas-correo-aw").hide('slow');
		}
	});

	$("#frm-apps-nube").submit(function(e){
		e.preventDefault();
		$nombre = $("#an-nombre-servicios");
		$email = $("#an-email-servicios");
		$telefono = $("#an-tel-servicios");
		var suscribirse = ($("#an-suscribirse").is(':checked'))? 1 : 0;
		var eventos = ($("#an-eventos").is(':checked'))? 1 : 0;
		var promociones = ($("#an-promociones").is(':checked'))? 1 : 0;
		var blog = ($("#an-blog").is(':checked'))? 1 : 0;
		datos = "nombre="+$nombre.val()+"&email="+$email.val()+"&telefono="+$telefono.val()+"&suscribirse="+suscribirse+"&eventos="+eventos+"&promociones="+promociones+"&blog="+blog+"&s=an";
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

	$("#frm-apps-nube").change(function(){
		selected = [];
		$('#listas-correo-an input:checked').each(function() {
	    	selected.push($(this).attr('name'));
		});
		if(selected.length <= 0){
			$("#an-suscribirse").prop('checked', false);
			$("#listas-correo-an").removeClass('animated fadeInLeft');
			$("#listas-correo-an").addClass('animated fadeOutLeft');
			$("#listas-correo-an").hide('slow');
		}
	});

	/* End: Formulario Servicios */	

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
	/* End: Formulario de Suscriptición */

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