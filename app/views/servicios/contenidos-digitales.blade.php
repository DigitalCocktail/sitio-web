@extends('templates/default/layout')
@section('title')
Contenidos digitales - Digital Cocktail
@stop

@section('description')
Diseñamos y creamos tus contenidos digitales como videos, fotografías, textos, infografías de alta calidad y pensados para Internet.
@stop

@section('twitter-card')
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@dCocktailCo">
	<meta name="twitter:creator" content="@dCocktailCo">
	<meta name="twitter:title" content="Contenidos digitales - Digital Cocktail">
	<meta name="twitter:description" content="Diseñamos y creamos tus contenidos digitales como videos, fotografías, textos, infografías de alta calidad y pensados para Internet.">
	<meta name="twitter:image:src" content="{{url('/assets/images/contenidos-digital-cocktail.jpg')}}">
@stop

@section("content")
	<section class="servicios text-center container">
		<article class="contenidos centrar-vertical">
			<div class="row-fluid">
				<div class="col-sm-5 left-content">
					<h1 class="bloque">Contenidos digitales</h1>
					<figure class="img-servicios bloque-interno">
						{{ HTML::image("assets/images/contenidos-digital-cocktail.jpg", "Generación de contenidos - Digital Cocktail") }}
					</figure>
				</div>
				<div class="col-sm-7 right-content">
					<h2 class="bloque-interno"><strong>Tu imagen siempre fresca y vigente</strong></h2>
					<div class="texto-servicios bloque-interno">
						<p>Verte atractivo es cuestión de saberte expresar. Lo que dices, lo que muestras, lo que compartes y cómo lo haces, es clave para comunicarte con los otros. Hazles llegar el mensaje que quieres y de la manera más acertada a través de medios digitales. </p>
						<p>¡Diseñamos y creamos tus contenidos digitales!</p>
					</div>
					<div class="btn-contacto bloque-interno">
						<button type="button" class="btn-success btnShow">Me interesa</button>
						<form id="frm-contenidos" role="Formulario">
							<div class="nombre-servicios">
								<label for="co-nombre-servicios">Nombre*</label>
								<input type="text" id="co-nombre-servicios" placeholder="Mucho gusto, tú eres...">
							</div>
							<div class="email-servicios">
								<label for="co-email-servicios">E-mail*</label>
								<input type="email" id="co-email-servicios" placeholder="Para seguir en contacto">
							</div>
							<div class="tel-servicios">
								<label for="co-tel-servicios">Teléfono</label>
								<input type="tel" id="co-tel-servicios" placeholder="Si lo consideras necesario">
							</div>
							<div class="recibirinfo-servicios text-left form-dc">
									<h3>Suscríbete</h3>
									<label class="check-box"><input type="checkbox" class="chkSuscripcion" id="co-suscribirse" checked>Me gustaría recibir información de Digital Cocktail</label>
									<div class="listas-correo" id="listas-correo-co">
										<label class="check-box listas"><input type="checkbox" id="co-eventos" checked>Eventos y actividades</label>
										<label class="check-box listas"><input type="checkbox" id="co-promociones" checked>Promociones</label>
										<label class="check-box listas"><input type="checkbox" id="co-blog" checked>Últimos artículos del blog</label>
									</div>
									<p>Al suscribirte indicas estar de acuerdo con nuestra <a href="{{url("/terminos-y-condiciones")}}" target="_blank">Política de manejo de datos</a></p>
							</div>
							<div class="enviar-servicios bloque-interno">
								<button class="btn-success" type="submit">Enviar</button>
							</div>
						</form>
						<div id="co-cargando" class="oculto cargando">
							<div class="spinner">
							  <div class="cube1"></div>
							  <div class="cube2"></div>
							</div>						
							<h2>Enviando...</h2>
							<p class="subtitulo">pronto estarás enterado de nuestras novedades</p>
						</div>
						<div id="co-success" class="oculto success">					
							<h2>Envío Exitoso</h2>
						</div>						
					</div><!-- Fin del botón de contacto -->
					<div class="compartir bloque">
						<p class="visible-xs"><strong>Comparte</strong></p>
						<ul>
							<li class="texto-compartir hidden-xs">
								Comparte
							</li>
							<li class="twitter visible-xs">
								<!-- Twitter -->
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('/') }}/servicios/contenidos-digitales" data-via="DCocktailco" data-lang="es" data-count="vertical">Twittear</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							</li>
							<li class="twitter hidden-xs">
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('/') }}/servicios/contenidos-digitales" data-via="DCocktailco" data-lang="es">Twittear</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>							
							</li><!-- Botón de compartir para tabletas y PC -->
							<li class="facebook visible-xs">
								<!-- Facebook -->		
								<div class="fb-like" data-href="{{ url('/') }}/servicios/contenidos-digitales" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div>
							</li>
							<li class="facebook hidden-xs">
								<div class="fb-share-button" data-href="{{ url('/') }}/servicios/contenidos-digitales" data-type="button_count"></div>		
							</li><!-- Botón de compartir para tabletas y PC -->
							<li class="google visible-xs">
								<!-- Google Plus -->
								<div class="g-plusone" data-size="tall" data-href="{{ url('/') }}/servicios/contenidos-digitales"></div>
							</li>
							<li class="google hidden-xs">
								<div class="g-plusone" data-size="medium" data-href="{{ url('/') }}/servicios/contenidos-digitales"></div>								
							</li><!-- Botón de compartir para tabletas y PC -->
						</ul>
					</div><!-- Fin de Compartir -->
				</div>
			</div>
		</article><!-- Fin de Contenidos -->			
	</section><!-- Fin del contenedor de los servicios -->
	<div class="capa-opacidad"></div>
	<div class="btn-cerrar"><a href="#">+<span>Servicios</span></a></div>
	<div class="menu-servicios">
		<ul>
			<li><a href="{{url('/servicios/estrategia-digital')}}" class="ed">Estrategia digital</a></li>
			<li><a href="{{url('/servicios/desarrollo-web')}}" class="dw">Desarrollo web</a></li>
			<li><a href="{{url('/servicios/consultoria-digital')}}" class="cd">Consultoría digital</a></li>
			<li><a href="{{url('/servicios/email-marketing')}}" class="em">E-mail marketing</a></li>
			<li><a href="{{url('/servicios/contenidos-digitales')}}" class="con active">Contenidos</a></li>
			<li><a href="{{url('/servicios/redes-sociales')}}" class="rs">Redes sociales</a></li>
			<li><a href="{{url('/servicios/seo')}}" class="se">SEO</a></li>
			<li><a href="{{url('/servicios/publicidad-online')}}" class="po">Publicidad online</a></li>
			<li><a href="{{url('/servicios/analitica-web')}}" class="aw">Analítica web</a></li>
			<li><a href="{{url('/servicios/apps-nube')}}" class="an">Apps en la nube</a></li>
		</ul>
	</div><!-- fin de menu-servicios -->
	<script type="text/javascript">
	var h = 'contenidos';
	var cl = 'co';
	var rutaContactarServicio = "{{ URL::route('contacto/servicios') }}";
	</script>
@stop