$(function() {
	$("#btnServicios").click(function(){
		trak.io.track('Clic en Botón ¿Qué te Preparamos?')
	});
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
});