@extends('templates/default/layout')
@section("content")
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
	<section class="blog row-fluid">
		<article class="conocenos col-sm-9 col-sm-push-3 bloque-interno">
			<h1>Conócenos</h1>
			<figure class="img-servicios bloque-interno">
				{{ HTML::image("assets/images/conocenos.jpg", "Conoce a Digital Cocktail") }}
			</figure>
			<p>Que bueno que estás aquí, en esta agencia digital nos encantan las visitas, sentarnos a conversar y escuchar tus planes. Creemos que el mejor camino para que tu empresa o proyecto incursione en Internet es saber tus necesidades a fondo; nos tomamos el tiempo de conocerte. </p>

			<p>En Digital Cocktail mezclamos lo mejor de la web para brindarte soluciones profesionales, de alta calidad a precios asequibles. Por medio de la investigación, planeación, ejecución y acompañamiento creamos estrategias digitales pensadas para tu crecimiento empresarial.</p>

			<p>Tenemos muchas cosas para ofrecerte, bienvenido a nuestro espacio.</p>
			<div class="bloque btn-preparamos">
				<a href="{{ url('/servicios/estrategia-digital') }}" class="btn-success text-center">
					<span class="accion"> ¿Qué te preparamos?</span>
					<span class="texto-accion">Conoce acá todo lo que podemos hacer por tu negocio</span>
				</a>
			</div>
			<!-- <h2>Somos partners de</h2>
			<ul>
				<li><a href=""><img src="" alt=""></a></li>
				<li><a href=""><img src="" alt=""></a></li>
				<li><a href=""><img src="" alt=""></a></li>
			</ul> -->
		</article>
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
			<div class="suscribete-aside text-left form-dc">
			<h3>Suscríbete y recibe los últimos artículos en tu correo</h3>
			<form id="frm-suscribir" role="Formulario">
				<label class="check-box"><input id="chkSuscripcionContacto" type="checkbox" checked>Me gustaría recibir información de Digital Cocktail</label>
				<div id="listasCorreoContacto" class="listas-correo">
					<label class="check-box listas"><input type="checkbox" id="eventos" checked>Eventos y actividades</label>
					<label class="check-box listas"><input type="checkbox" id="promociones" checked>Promociones</label>
					<label class="check-box listas"><input type="checkbox" id="blog" checked>Últimos artículos del blog</label>
				</div>
				<p>Al de suscribirte indicas estar de acuerdo con nuestra <a href="#" target="_blank">Política de manejo de datos</a></p>
				<div class="campo-correo">
					<input class="ingrese-correo" type="mail" id="mail-suscripcion" placeholder="Ingresa tu correo">
					<button type="submit" class=""></button>
				</div>
			</form>
			<div id="cargando" class="oculto">
				<div class="spinner">
				  <div class="cube1"></div>
				  <div class="cube2"></div>
				</div>						
				<h2>Enviando...</h2>
				<p class="subtitulo">pronto estarás enterado de nuestras novedades</p>
			</div>
			<div id="success" class="oculto">					
				<h2>Envío Exitoso</h2>
			</div>				
		</div>
		</aside><!-- Fin del aside -->
	</section><!-- Fin del contenedor de los articulos - blog -->
@stop