@section("header")
	<header>
		<div class="logo-contenedor">
			<a href="http://www.digitalcocktail.co" class="logo">{{ HTML::image("assets/images/logo-digital-cocktail-horizontal-blanco.png", "Logo Digital Cocktail") }}</a>
		</div>
		<!-- <nav class="menu">
			<ul>
				<li>{{ HTML::link('/', 'Inicio') }}</li>
				<li>{{ HTML::link('/servicios', 'Servicios') }}</li>
				<li>{{ HTML::link('/blog', 'Blog') }}</li>
				<li>{{ HTML::link('/contacto', 'Contacto') }}</li>
			</ul>
		</nav> -->
		<nav class="navbar navbar-default menu" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <p class="navbar-brand">Menú</a>
		   </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right text-center">
		        <li class="active">{{ HTML::link('/', 'Inicio') }}</li>
		        <li>{{ HTML::link('/servicios', 'Servicios') }}</li>
		        <li>{{ HTML::link('/blog', 'Blog') }}</li>
		        <li>{{ HTML::link('/contacto', 'Contacto') }}</li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</header>
@show