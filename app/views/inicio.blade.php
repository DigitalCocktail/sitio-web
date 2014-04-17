@extends('templates/default/layout')
@section("content")
	<section>
		<article>
			<div class="destacado">
				<h1 class="text-center">Nos encargamos de crear mezclas ideales de servicios para brindarte soluciones y herramientas simples en la web para tu empresa a través de:</h1>
			</div>
			<div class="barra-horizontal visible-xs">
				<div class="verde pull-left"></div>
				<div class="azul pull-left"></div>
				<div class="rojo pull-left"></div>
			</div>
			<div class="row">
				<div class="investigacion bloque text-center col-sm-3">
					<h2>Investigación</h2>
					<figure id="imgInvestigacion">
						<img src="http://lorempixel.com/200/200" alt="">
					</figure>
					<p id="textInvestigacion">
						Nos tomamos el tiempo de conocer tu empresa, tus clientes y tu público para entender a fondo las necesidades que tienes
					</p>
				</div>
				<div class="planeacion bloque text-center col-sm-3">
					<h2>Planeación</h2>
					<figure id="imgPlaneacion">
						<img src="http://lorempixel.com/200/200" alt="">
					</figure>
					<p id="textPlaneacion">
						Creamos y planeamos estrategias digitales basados en el estudio de tus necesidades.
					</p>
				</div>
				<div class="ejecucion bloque text-center col-sm-3">
					<h2>Ejecución</h2>
					<figure id="imgEjecucion">
						<img src="http://lorempixel.com/200/200" alt="">
					</figure>
					<p id="textEjecucion">
						Desarrollamos experiencias de calidad pensadas para tu crecimiento empresarial
					</p>
				</div>
				<div class="acompanamiento bloque text-center col-sm-3">
					<h2>Acompañamiento</h2>
					<figure id="imgAcompanamiento">
						<img src="http://lorempixel.com/200/200" alt="">
					</figure>
					<p id="textAcompanamiento">
						Tu proyecto irá de la mano de nuestra experiencia para que nunca te sientas solo
					</p>
				</div>
			</div>
		</article>
		<div class="bloque">
			<a href="#" class="btn-success text-center">
				<span class="accion">¿Qué te preparamos?</span>
				<span class="texto-accion">Conoce acá todo lo que podemos hacer por tu negocio</span>
			</a>
		</div>
	</section>
@stop