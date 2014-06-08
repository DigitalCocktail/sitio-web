@extends('templates/default/layout')
@section("content")
	<section class="blog">
		<aside class="aside-blog">
			<div class="buscador-aside">
				<form role="formulario">
					<input type="text" id="buscador-aside">	
					<button type="submit">Buscar</button>				
				</form>
			</div>
			<div class="suscribete-aside">
				<h3>Suscríbete y recibe los últimos artículos en tu correo</h3>
				<label for="mail-suscripcion"><input type="checkbox">Antes de suscribirte debes estar de acuerdo con nuestra <a href="#">Política de manejo de datos</a></label>
				<input type="mail" id="mail-suscripcion" placeholder="Ingresa tu correo">
				<button type="submit">Evniar</button>
			</div>
		</aside><!-- Fin del aside -->
		<article class="conocenos">
			<figure>
				<img src="" alt="">
			</figure>
			<h1>Conócenos</h1>
			<p>Que bueno que estás aquí, en esta agencia digital nos encantan las visitas, sentarnos a conversar y escuchar tus planes. Creemos que el mejor camino para que tu empresa o proyecto incursione en Internet es saber tus necesidades a fondo; nos tomamos el tiempo de conocerte.</p>

			<p>En Digital Cocktail mezclamos lo mejor de la web para brindarte soluciones profesionales, de alta calidad a precios asequibles. Por medio de la investigación, planeación, ejecución y acompañamiento creamos experiencias pensadas para tu crecimiento empresarial.</p>

			<p>Tenemos muchas cosas para ofrecerte, bienvenido a nuestro espacio</p>
			<div class="bloque btn-preparamos">
				<a href="{{ url('/servicios') }}" class="btn-success text-center">
					<span class="accion"> ¿Qué te quieres tomar?</span>
					<span class="texto-accion">Conoce acá todo lo que podemos hacer por tu negocio</span>
				</a>
			</div>
			<h2>Somos partners de</h2>
			<ul>
				<li><a href=""><img src="" alt=""></a></li>
				<li><a href=""><img src="" alt=""></a></li>
				<li><a href=""><img src="" alt=""></a></li>
			</ul>
		</article>
	</section><!-- Fin del contenedor de los articulos - blog -->
@stop