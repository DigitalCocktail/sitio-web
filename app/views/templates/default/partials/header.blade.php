@section("header")
	<header>
		<div class="logo-contenedor">
			<a href="{{ url('/') }}" class="logo">{{ HTML::image("assets/images/logo-digital-cocktail-horizontal-blanco.png", "Logo Digital Cocktail") }}</a>
		</div>
		<nav class="navbar navbar-default menu" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		      <button type="button" class="navbar-toggle" >
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <p class="navbar-brand visible-xs">Menú</a>
		   </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right text-center">
		        <li @if($active == 1)class="active" @endif>{{ HTML::link('/', 'Inicio') }}</li>
				<li @if($active == 2)class="active" @endif>{{ HTML::link('/conocenos', 'Conócenos') }}</li>		        
		        <li @if($active == 3)class="active" @endif>{{ HTML::link('/servicios/estrategia-digital', 'Servicios') }}</li>
		        <li @if($active == 4)class="active" @endif>{{ HTML::link('/blog', 'Blog') }}</li>
		        <li @if($active == 5)class="active" @endif>{{ HTML::link('/contacto', 'Contacto') }}</li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</header>
@show