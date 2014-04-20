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

	/* Start: Formulario Servicios */
	$("#frm").css('display','none');
	$("#btnShow").click(function(){
		$("#frm").css('display','block');
		$("#frm").addClass('animated tada');
	});
	/* End: Formulario Servicios */

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
	/* End: Interacción Contacto */
});