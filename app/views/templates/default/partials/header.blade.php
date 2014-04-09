@section("header")
	<div id="container">
		<video width="100%" autoplay loop poster="bg.jpg">
			<source src="{{url()}}/christmas_snow.ogv" type="video/ogg" />
			<source src="{{url()}}/christmas_snow.webm" type="video/webm" />
			<source src="{{url()}}/christmas_snow.mp4" type="video/mp4" />
		</video> 
	</div>
	<header>
		<div class="logo-contenedor">
			<a href="http://www.digitalcocktail.co" class="logo"></a>
		</div>
		<nav class="menu">
			<ul>
				<li>{{ HTML::link('/', 'Inicio') }}</li>
				<li>{{ HTML::link('/servicios', 'Servicios') }}</li>
				<li>{{ HTML::link('/blog', 'Blog') }}</li>
				<li>{{ HTML::link('/contacto', 'Contacto') }}</li>
			</ul>
		</nav>
	</header>
@show