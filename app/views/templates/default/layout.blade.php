<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Digital Cocktail</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{{ HTML::style('assets/css/bootstrap.css', array('media' => 'screen')) }}
</head>
<body>
@include("templates/default/partials/header")
	@yield("content")
@include("templates/default/partials/footer")	
</body>
</html>