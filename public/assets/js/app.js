$(function() {

	/* Start: Animaciones Flip del Home */
	$("#imgInvestigacion").hover(function(){
		$(this).removeClass('animated flipInY');
		$(this).addClass('animated flipOutY');

		$("#textInvestigacion").removeClass('animated flipOutY');
		$("#textInvestigacion").show().addClass('animated flipInY');
	}, function(){
		$("#textInvestigacion").removeClass('animated flipInY');
		$("#textInvestigacion").addClass('animated flipOutY');	

		$(this).removeClass('animated flipOutY');
		$(this).addClass('animated flipInY');			
	});

	$("#imgPlaneacion").hover(function(){
		$(this).removeClass('animated flipInY');
		$(this).addClass('animated flipOutY');

		$("#textPlaneacion").removeClass('animated flipOutY');
		$("#textPlaneacion").show().addClass('animated flipInY');
	}, function(){
		$("#textPlaneacion").removeClass('animated flipInY');
		$("#textPlaneacion").addClass('animated flipOutY');	

		$(this).removeClass('animated flipOutY');
		$(this).addClass('animated flipInY');			
	});	

	$("#imgEjecucion").hover(function(){
		$(this).removeClass('animated flipInY');
		$(this).addClass('animated flipOutY');

		$("#textEjecucion").removeClass('animated flipOutY');
		$("#textEjecucion").show().addClass('animated flipInY');
	}, function(){
		$("#textEjecucion").removeClass('animated flipInY');
		$("#textEjecucion").addClass('animated flipOutY');	

		$(this).removeClass('animated flipOutY');
		$(this).addClass('animated flipInY');			
	});	

	$("#imgAcompanamiento").hover(function(){
		$(this).removeClass('animated flipInY');
		$(this).addClass('animated flipOutY');

		$("#textAcompanamiento").removeClass('animated flipOutY');
		$("#textAcompanamiento").show().addClass('animated flipInY');
	}, function(){
		$("#textAcompanamiento").removeClass('animated flipInY');
		$("#textAcompanamiento").addClass('animated flipOutY');	

		$(this).removeClass('animated flipOutY');
		$(this).addClass('animated flipInY');			
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
			$(".btn-cerrar > a").html("x <span>Servicios</span>");
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
		$("#frm").addClass('animated bounceInUp');
	});
	/* End: Formulario Servicios */

	/* Start: Suscripción Boletín Servicios */
	$("#chkSuscripcion").change(function(){
		if($(this).is(":checked")){
			$(".listas-correo").removeClass('animated bounceOutDown');
			$(".listas-correo").addClass('animated bounceInUp');
		}
		else{
			$(".listas-correo").removeClass('animated bounceInUp');
			$(".listas-correo").addClass('animated bounceOutDown');
		}
	});
	/* Start: Suscripción Boletín Servicios */
});