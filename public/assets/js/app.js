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
			$(".menu-servicios").animate({
				marginLeft: '-30%',
				zIndex: '12'
			});
			$(".btn-cerrar > a").animate({
				left: '0%'
			});			
			$(".capa-opacidad").hide(1,'linear');
			$(".btn-cerrar > a").html("+ <span>Servicios</span>");
			open = 0;
		}
	});	

	$(".capa-opacidad").click(function(){
		$(".menu-servicios").animate({
			marginLeft: '-30%',
			zIndex: '12'
		});
		$(".btn-cerrar > a").animate({
			left: '0%'
		});			
		$(".capa-opacidad").hide(1,'linear');
		$(".btn-cerrar > a").html("+ <span>Servicios</span>");
		open = 0;
	});
	/* End: Menú Lateral Servicios Móvil */

	/* Start: Suscripción Boletín Servicios */
	$("#chkSuscripcion").change(function(){
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
	if(hash == ""){
		hash = "estrategia-digital";
	}
	else if(hash == 'desarrollo-web'){
		cl = 'dw';
	}
	else if(hash == 'consultoria-digital'){
		cl = 'cd';
	}
	else if(hash == 'email-marketing'){
		cl = 'em';
	}
	else if(hash == 'contenidos'){
		cl = 'con';
	}
	else if(hash == 'redes-sociales'){
		cl = 'rs';
	}
	else if(hash == 'seo'){
		cl = 'se';
	}
	else if(hash == 'publicidad-online'){
		cl = 'po';
	}
	else if(hash == 'analitica-web'){
		cl = 'aw';
	}
	else {
		cl = 'an';
	}
	ocultar();
	$("." + hash).addClass('mostrar animated fadeInDown');
	$("." + cl).addClass('active');
	$('.ed').click(function(){
		ocultar();
		$(".estrategia-digital").addClass('mostrar animated fadeInDown');
		$(this).addClass('active');
		cerrarMenu();
	});
	$('.dw').click(function(){
		ocultar(hash);
		$(".desarrollo-web").addClass('mostrar animated fadeInDown');
		$(this).addClass('active');
		cerrarMenu();
	});	
	$('.cd').click(function(){
		ocultar(hash);
		$(".consultoria-digital").addClass('mostrar animated fadeInDown');
		$(this).addClass('active');
		cerrarMenu();
	});		
	$('.em').click(function(){
		ocultar(hash);
		$(".email-marketing").addClass('mostrar animated fadeInDown');
		$(this).addClass('active');
		cerrarMenu();
	});
	$('.con').click(function(){
		ocultar(hash);
		$(".contenidos").addClass('mostrar animated fadeInDown');
		$(this).addClass('active');
		cerrarMenu();
	});
	$('.rs').click(function(){
		ocultar(hash);
		$(".redes-sociales").addClass('mostrar animated fadeInDown');
		$(this).addClass('active');
		cerrarMenu();
	});
	$('.se').click(function(){
		ocultar(hash);
		$(".seo").addClass('mostrar animated fadeInDown');
		$(this).addClass('active');
		cerrarMenu();
	});
	$('.po').click(function(){
		ocultar(hash);
		$(".publicidad-online").addClass('mostrar animated fadeInDown');
		$(this).addClass('active');
		cerrarMenu();
	});
	$('.aw').click(function(){
		ocultar(hash);
		$(".analitica-web").addClass('mostrar animated fadeInDown');
		$(this).addClass('active');
		cerrarMenu();
	});					
	$('.an').click(function(){
		ocultar(hash);
		$(".apps-nube").addClass('mostrar animated fadeInDown');
		$(this).addClass('active');
		cerrarMenu();
	});	

	function ocultar(){
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
		$(".menu-servicios").animate({
			marginLeft: '-30%',
			zIndex: '12'
		});
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
		$("#frm-" + hash).css('display','block');
		$("html, body").animate({ scrollTop: $('#frm').offset().top }, 1000);
		$("#frm-" + hash).addClass('animated tada');
	});
	/* End: Formulario Servicios */	
});