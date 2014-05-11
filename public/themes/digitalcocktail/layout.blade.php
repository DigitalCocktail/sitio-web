<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="description" content="@yield('description')"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{{ HTML::style('assets/css/bootstrap.css', array('media' => 'screen')) }}
	{{ HTML::style('assets/css/styles.css', array('media' => 'screen')) }}
	{{ HTML::style('assets/css/animate.css', array('media' => 'screen')) }}
	{{ HTML::style('assets/css/jquery.fs.naver.css', array('media' => 'screen')) }}

	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
@include(theme_view("inc.facebookcomments"))
@include("templates/default/partials/header")

	<section class="blog row-fluid">
		@yield('content')
	</section><!-- Fin del contenedor de los articulos - blog -->

@include("templates/default/partials/footer")
<script src="//code.jquery.com/jquery-2.0.2.min.js"></script>
{{ HTML::script('assets/js/bootstrap.min.js') }}
{{ HTML::script('assets/js/app.js') }}
</body>
</html>
