<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Digital Cocktail</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		body{
			margin: 0 0 0 0;
			padding: 0 0 0 0;
		}
		#container{
			position: fixed;
			height: 100%;
			width: 100%;
			top: 0;
			left: 0;
			z-index: -1;
		}	
	</style>
	{{ HTML::style('assets/css/bootstrap.css', array('media' => 'screen')) }}
	{{ HTML::style('assets/css/styles.css', array('media' => 'screen')) }}
	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
@include("templates/default/partials/header")
	@yield("content")
@include("templates/default/partials/footer")	
</body>
</html>