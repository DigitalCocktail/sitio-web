@extends('templates/default/layout')
@section("content")
	<section>
		<article>
			<div class="destacado">
				<h1 class="textcenter">Nos encargamos de crear mezclas ideales de servicios para brindarte soluciones y herramientas simples en la web para tu empresa a través de:</h1>
			</div>
			<div class="investigacion">
				<h2>Investigación</h2>
				<figure id="imgInvestigacion">
					<img src="http://lorempixel.com/200/200" alt="">
				</figure>
				<p id="textInvestigacion" style="display:none">
					Nos tomamos el tiempo de conocer tu empresa, tus clientes y tu público para entender a fondo las necesidades que tienes
				</p>
			</div>
			<div class="planeacion">
				<figure>
					<img src="http://lorempixel.com/200/200" alt="">
				</figure>
				<h2>Planeación</h2>
			</div>
			<div class="ejecucion">
				<figure>
					<img src="img/ajecucion.png" alt="">
				</figure>
				<h2>Ejecución</h2>
			</div>
			<div class="aconpanamiento">
				<figure>
					<img src="img/acompanamiento.png" alt="">
				</figure>
				<h2>Acompañamiento</h2>
			</div>
		</article>
		<div class="btn-accion">
			<a href="#" class="btn-tomar">¿Qué te quieres tomar?</a>
		</div>
	</section>
@stop