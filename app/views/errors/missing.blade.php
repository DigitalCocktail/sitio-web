@extends('templates/default/layout')
@section('title')Bueno, parece que hay algo roto - Digital Cocktail @stop

@section('description')No encontramos lo que estás buscando. @stop
@section("content")
	<section class="blog">
		<article class="error-404 row-fluid">
			<div class="col-sm-5 left-content">
				<h1>Error 404</h1>
				<figure>
					{{ HTML::image("assets/images/error.jpg", "Error 404 - Digital Cocktail") }}
				</figure>
			</div>
			<div class="col-sm-7 right-content">
				<p><strong>Bueno, parece que hay algo roto...</strong></p>
				<p>Lo sentimos pero la información a la que tratabas de acceder ya no está disponible. Es posible que lo que buscas esté en los <a href="{{url("/servicios/estrategia-digital")}}">servicios</a> que ofrecemos o en nuestro <a href="{{url("/blog")}}">blog.</a> </p>
				<p>Si definitivamente no encuentras lo que buscas, entonces puedes preguntarnos a través de nuestras redes sociales: <a target="_blank" href="https://twitter.com/dcocktailco" target="_blank" class="tw-icon">Twitter</a>,  <a target="_blank" href="https://www.facebook.com/DigitalCocktail.co" target="_blank" class="fb-icon">Facebook</a> o <a target="_blank" href="https://plus.google.com/116840393490728819745/" target="_blank" class="gp-icon">Google Plus</a></p>
			</div>
		</article>
	</section><!-- Fin del contenedor -->
@stop