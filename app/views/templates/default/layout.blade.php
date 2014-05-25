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
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1&appId=1477313795816778";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>	
	@include("templates/default/partials/header") 
	@yield("content") 
	@include("templates/default/partials/footer")
	<script src="//code.jquery.com/jquery-2.0.2.min.js"></script>
	{{ HTML::script('assets/js/bootstrap.min.js') }}
	{{ HTML::script('assets/js/app.js') }}
	<script type="text/javascript" src="https://apis.google.com/js/platform.js">
	  {lang: 'es-419'}
	</script>	
</body>
</html>