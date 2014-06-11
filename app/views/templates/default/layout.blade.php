<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	{{ HTML::script('assets/js/modernizr.min.js') }}
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="@yield('description')"/>
	<link rel="image_src" href="@yield('imagefb')"/>
	{{ HTML::style('assets/css/bootstrap.css', array('media' => 'screen')) }}
	{{ HTML::style('assets/css/styles.css', array('media' => 'screen')) }}
	{{ HTML::style('assets/css/animate.css', array('media' => 'screen')) }}

	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
	<style type="text/css">
	.oculto{
		display: none;
	}
	.spinner {
	  margin: 40px auto;
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
	<script type="text/javascript">
	var trak=trak||[];trak.io=trak.io||{};trak.io.load=function(e){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src=("https:"===document.location.protocol?"https://":"http://")+"d29p64779x43zo.cloudfront.net/v1/trak.io.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(t,n);var r=function(e){return function(){trak.push([e].concat(Array.prototype.slice.call(arguments,0)))}},i=["initialize","identify","track","alias","channel","source","host","protocol","page_view"];for(var s=0;s<i.length;s++) trak.io[i[s]]=r(i[s]);trak.io.initialize.apply(trak.io,arguments)};
	trak.io.load('b6ee014113349372a31f59c76f91c506ec1539c8');	
	</script>
</head>
<body>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-48508126-1', 'digitalcocktail.co');
	  ga('require', 'displayfeatures');
	  ga('send', 'pageview');

	</script>
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
	<script type="text/javascript" src="https://apis.google.com/js/platform.js">
	  {lang: 'es-419'}
	</script>	
	@if($active == 1)
	{{ HTML::script('assets/js/home.js') }}
	@endif	
	@if($active == 2)
	{{ HTML::script('assets/js/conocenos.js') }}
	@endif	
	@if($active == 3)
	{{ HTML::script('assets/js/servicios.js') }}
	@endif
	@if($active == 5)
	{{ HTML::script('assets/js/contacto.js') }}
	@endif	
</body>
</html>