@extends(theme_view('layout'))

@section('title')
	{{ site_title() }}
@stop

@section('content')
	<aside class="aside-blog">
		<div class="buscador-aside bloque-interno">
			{{ Form::open(['url'=>'archivo','role'=>'formulario', 'method' => 'GET']) }}
				{{ Form::text('q', NULL, [
					'class' => 'buscador',
					'id' => 'buscador',
					'placeholder' => '¿Qué estás buscando?'
				]) }}
				<button class="btn-buscar" type="submit"></button>
			{{ Form::close() }}
		</div>
		<div class="etiquetas-aside">
			<h3>Etiquetas</h3>
			<a href="#" class="etiqueta">web</a>
			<a href="#" class="etiqueta">web</a>
			<a href="#" class="etiqueta">web</a>
		</div>
		<div class="suscribete-aside">
			<h3>Suscríbete y recibe los últimos artículos en tu correo</h3>
			<label for="mail-suscripcion"><input type="checkbox">Antes de suscribirte debes estar de acuerdo con nuestra <a href="#">Política de manejo de datos</a></label>
			<input type="mail" id="mail-suscripcion" placeholder="Ingresa tu correo">
			<button type="submit">Evniar</button>
		</div>
	</aside><!-- Fin del aside -->
	<section class="home">
		@foreach ($posts as $post)
			@include(theme_view('inc.post'))
		@endforeach

		{{ $posts->links() }}
	</section>
@stop
