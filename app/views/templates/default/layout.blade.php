<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Digital Cocktail</title>
	{{ HTML::script('assets/js/modernizr.min.js') }}
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{{ HTML::style('assets/css/bootstrap.css', array('media' => 'screen')) }}
	{{ HTML::style('assets/css/styles.css', array('media' => 'screen')) }}
	{{ HTML::style('assets/css/animate.css', array('media' => 'screen')) }}
	{{ HTML::style('assets/css/jquery.fs.naver.css', array('media' => 'screen')) }}

	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
@include("templates/default/partials/header") 
@yield("content") 
@include("templates/default/partials/footer")
<script src="//code.jquery.com/jquery-2.0.2.min.js"></script>
{{ HTML::script('assets/js/bootstrap.min.js') }}
{{ HTML::script('assets/js/app.js') }}
</body>
</html>