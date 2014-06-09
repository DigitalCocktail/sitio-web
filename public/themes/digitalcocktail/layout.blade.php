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
	<style type="text/css">
	.oculto{
		display: none;
	}
	.spinner {
	  margin: 100px auto;
	  width: 32px;
	  height: 32px;
	  position: relative;
	}

	.cube1, .cube2 {
	  background-color: #333;
	  width: 10px;
	  height: 10px;
	  position: absolute;
	  top: 0;
	  left: 0;
	  
	  -webkit-animation: cubemove 1.8s infinite ease-in-out;
	  animation: cubemove 1.8s infinite ease-in-out;
	}

	.cube2 {
	  -webkit-animation-delay: -0.9s;
	  animation-delay: -0.9s;
	}

	@-webkit-keyframes cubemove {
	  25% { -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5) }
	  50% { -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg) }
	  75% { -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5) }
	  100% { -webkit-transform: rotate(-360deg) }
	}

	@keyframes cubemove {
	  25% { 
	    transform: translateX(42px) rotate(-90deg) scale(0.5);
	    -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5);
	  } 50% { 
	    transform: translateX(42px) translateY(42px) rotate(-179deg);
	    -webkit-transform: translateX(42px) translateY(42px) rotate(-179deg);
	  } 50.1% { 
	    transform: translateX(42px) translateY(42px) rotate(-180deg);
	    -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg);
	  } 75% { 
	    transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
	    -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
	  } 100% { 
	    transform: rotate(-360deg);
	    -webkit-transform: rotate(-360deg);
	  }
	}
	</style>	
</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48508126-1', 'digitalcocktail.co');
  ga('send', 'pageview');

</script>
@include(theme_view("inc.facebookcomments"))
@include("templates/default/partials/header")

	<section class="blog row-fluid">
		@yield('content')
	</section><!-- Fin del contenedor de los articulos - blog -->

@include("templates/default/partials/footer")
<script src="//code.jquery.com/jquery-2.0.2.min.js"></script>
{{ HTML::script('assets/js/bootstrap.min.js') }}
{{ HTML::script('assets/js/app.js') }}
<script type="text/javascript" src="https://apis.google.com/js/platform.js">
  {lang: 'es-419'}
</script>	
</body>
</html>
