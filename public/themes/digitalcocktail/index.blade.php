@extends(theme_view('layout'))

@section('title')
	{{ site_title() }}
@stop

@section('content')
	<div class="buscador-aside-movil bloque-interno">
		{{ Form::open(array('url'=>'archivo','role'=>'formulario', 'method' => 'GET')) }}
			{{ Form::text('q', NULL, array(
				'class' => 'buscador',
				'id' => 'buscador',
				'placeholder' => '¿Qué estás buscando?'
			)) }}
			<button class="btn-buscar" type="submit"></button>
		{{ Form::close() }}
	</div>
	<section class="home col-sm-9 col-sm-push-3">
		@foreach ($posts as $post)
			@include(theme_view('inc.post'))
		@endforeach

		{{ $posts->links() }}
		<div class="ver-mas-blog">
			<a href="#" class="btn-ver-mas-blog btn-info">Ver más articulos</a>
		</div><!-- Fin botón Ver más artículos -->
	</section>
	<aside class="aside-blog col-sm-3 col-sm-pull-9">
		<div class="buscador-aside bloque-interno">
			{{ Form::open(array('url'=>'archivo','role'=>'formulario', 'method' => 'GET')) }}
				{{ Form::text('q', NULL, array(
					'class' => 'buscador',
					'id' => 'buscador',
					'placeholder' => '¿Qué estás buscando?'
				)) }}
				<button class="btn-buscar" type="submit"></button>
			{{ Form::close() }}
		</div>
		<div class="etiquetas-aside">
			<h3>Etiquetas del blog</h3>
			@foreach (Wardrobe::tags() as $item)
				@if ($item['tag'] != "")
					<a href="{{ Wardrobe::route('posts.tags', $item['tag']) }}" class="etiqueta">{{ $item['tag'] }}</a>
				@endif
			@endforeach
		</div>
		<!-- <div class="suscribete-aside">
			<h3>Suscríbete y recibe los últimos artículos en tu correo</h3>
			<label for="mail-suscripcion"><input type="checkbox">Antes de suscribirte debes estar de acuerdo con nuestra <a href="#">Política de manejo de datos</a></label>
			<input type="mail" id="mail-suscripcion" placeholder="Ingresa tu correo">
			<button type="submit">Evniar</button>
		</div> -->
		<div class="suscribete-aside text-left form-dc">
			<h3>Suscríbete y recibe los últimos artículos en tu correo</h3>
			<form role="Formulario">
				<label class="check-box"><input id="chkSuscripcionContacto" type="checkbox" checked>Me gustaría recibir información de Digital Cocktail</label>
				<div id="listasCorreoContacto" class="listas-correo">
					<label class="check-box listas"><input type="checkbox" checked>Eventos y actividades</label>
					<label class="check-box listas"><input type="checkbox" checked>Promociones</label>
					<label class="check-box listas"><input type="checkbox" checked>Últimos artículos del blog</label>
				</div>
				<p>Antes de suscribirte debes estar de acuerdo con nuestra <a href="#" target="_blank">Política de manejo de datos</a></p>
				<div class="campo-correo">
					<input class="ingrese-correo" type="mail" id="mail-suscripcion" placeholder="Ingresa tu correo">
					<button type="submit" class=""></button>
				</div>
			</form>
		</div>

	</aside><!-- Fin del aside -->
@stop
