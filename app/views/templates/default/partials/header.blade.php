@section("header")
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