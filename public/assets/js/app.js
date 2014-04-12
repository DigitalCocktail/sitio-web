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
});