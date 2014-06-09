@extends('templates/default/layout')

@section('title')Estrategia Digital, Desarrollo web y Redes Sociales - Digital Cocktail @stop

@section('description')Nos encargamos de encontrar las herramientas ideales para brindarte una solución para hacer crecer tu negocio @stop

@section("content")
	<div class="bg-990 visible-sm"></div>
	<video id="video_background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0" poster="{{url("/assets/images/bg-poster.jpg")}}"> 
		<source src="{{url("/assets/videos/BGHomeDC.mp4")}}" type="video/mp4">
		<source src="{{url("/assets/videos/BGHomeDC.ogv")}}" type="video/ogv">
		<source src="{{url("/assets/videos/BGHomeDC.webm")}}" type="video/wemb">
		 Video not supported 
	</video>
	<div id="video_pattern"></div>
	<section class="container home">
		<article class="contenido">
			<div class="destacado">
				<h1 class="text-center">Nos encargamos de crear mezclas ideales de servicios para brindarte soluciones y herramientas simples en la web para tu empresa a través de:</h1>
			</div>
			<div class="barra-horizontal visible-xs">
				<div class="verde pull-left"></div>
				<div class="azul pull-left"></div>
				<div class="rojo pull-left"></div>
			</div>
			<div class="row-fluid procesos">
				<div class="investigacion bloque text-center col-sm-3">
					<h2>Investigación</h2>
					<figure id="imgInvestigacion">
						{{ HTML::image("assets/images/investigacion.png", "Intensos procesos de investigación - Digital Cocktail") }}
					</figure>
					<p id="textInvestigacion">
						Nos tomamos el tiempo de conocer tu empresa, tus clientes y tu público para entender a fondo las necesidades que tienes
					</p>
				</div>
				<div class="planeacion bloque text-center col-sm-3">
					<h2>Planeación</h2>
					<figure id="imgPlaneacion">
						{{ HTML::image("assets/images/planeacion.png", "El factor más importante de nuestros procesos - Digital Cocktail") }}
					</figure>
					<p id="textPlaneacion">
						Creamos y planeamos estrategias digitales basados en el estudio de tus necesidades.
					</p>
				</div>
				<div class="ejecucion bloque text-center col-sm-3">
					<h2>Ejecución</h2>
					<figure id="imgEjecucion">
						{{ HTML::image("assets/images/ejecucion.png", "Nos esforzamos por sentirnos orgullosos de todos nuestros trabajos - Digital Cocktail") }}
					</figure>
					<p id="textEjecucion">
						Desarrollamos experiencias de calidad pensadas para tu crecimiento empresarial
					</p>
				</div>
				<div class="acompanamiento bloque text-center col-sm-3">
					<h2>Acompañamiento</h2>
					<figure id="imgAcompanamiento">
						{{ HTML::image("assets/images/aconpanamiento.png", "Nos encanta compartir nuestro conocimiento durante el proceso - Digital Cocktail") }}
					</figure>
					<p id="textAcompanamiento">
						Tu proyecto irá de la mano de nuestra experiencia para que nunca te sientas solo
					</p>
				</div>
			</div>
			<div class="bloque btn-preparamos">
				<a id="btnServicios" href="{{ url('/servicios') }}" class="btn-success text-center">
					<span class="accion">¿Qué te preparamos?</span>
					<span class="texto-accion">Conoce acá todo lo que podemos hacer por tu negocio</span>
				</a>
			</div>
		</article>
	</section>
@stop