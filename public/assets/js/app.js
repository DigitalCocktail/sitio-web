$(function() {
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
});