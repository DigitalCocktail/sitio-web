@extends('templates/default/layout')
@section("content")
	<section class="servicios text-center container">
		<article class="estrategia-digital centrar-vertical">
			<div class="row-fluid">
				<div class="col-sm-5 left-content">
					<h1 class="bloque">Estrategia digital</h1>
					<figure class="img-servicios bloque-interno">
						{{ HTML::image("assets/images/estrategia-digital-cocktail.jpg", "Estrategia Digital - Digital Cocktail") }}
					</figure>
				</div>
				<div class="col-sm-7 right-content">
					<h2 class="bloque-interno"><strong>En saber elegir está la clave</strong></h2>
					<div class="texto-servicios bloque-interno">
						<p>Encontramos los ingredientes apropiados y la medida justa que necesitas para que tus proyectos tengan el mejor impacto web.</p>
						<p>Sentémonos a tomar algo y a crear la mezcla perfecta.</p>
					</div>
					<div class="btn-contacto bloque-interno">
						<button type="button" class="btn-success btnShow">Me interesa</button>
						<form id="frm-estrategia-digital" role="Formulario" novalidate>
							<div class="nombre-servicios">
								<label for="ed-nombre-servicios">Nombre*</label>
								<input type="text" id="ed-nombre-servicios" placeholder="Mucho gusto, tú eres...">
							</div>
							<div class="email-servicios">
								<label for="ed-email-servicios">E-mail*</label>
								<input type="email" id="ed-email-servicios" placeholder="Para seguir en contacto">
							</div>
							<div class="tel-servicios">
								<label for="ed-tel-servicios">Teléfono</label>
								<input type="tel" id="ed-tel-servicios" placeholder="Si lo consideras necesario">
							</div>
							<div class="recibirinfo-servicios text-left form-dc">
									<h3>Suscríbete</h3>
									<label class="check-box"><input type="checkbox" id="ed-suscribirse" class="chkSuscripcion" checked>Me gustaría recibir información de Digital Cocktail</label>
									<div class="listas-correo">
										<label class="check-box listas"><input type="checkbox" id="ed-eventos" checked>Eventos y actividades</label>
										<label class="check-box listas"><input type="checkbox" id="ed-promociones" checked>Promociones</label>
										<label class="check-box listas"><input type="checkbox" id="ed-blog" checked>Últimos artículos del blog</label>
									</div>
									<p>Antes de suscribirte debes estar de acuerdo con nuestra <a href="#" target="_blank">Política de manejo de datos</a></p>
							</div>
							<div class="enviar-servicios bloque-interno">
								<button class="btn-success" type="submit">Enviar</button>
							</div>
						</form>
						<div id="ed-cargando" class="oculto">
							<div class="spinner">
							  <div class="cube1"></div>
							  <div class="cube2"></div>
							</div>						
							<h2>Enviando...</h2>
							<p class="subtitulo">pronto estarás enterado de nuestras novedades</p>
						</div>
						<div id="ed-success" class="oculto">					
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
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('/') }}/servicios#estrategia-digital" data-via="DCocktailco" data-lang="es" data-count="vertical">Twittear</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							</li>
							<li class="twitter hidden-xs">
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('/') }}/servicios#estrategia-digital" data-via="DCocktailco" data-lang="es">Twittear</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>							
							</li><!-- Botón de compartir para tabletas y PC -->
							<li class="facebook visible-xs">
								<!-- Facebook -->		
								<div class="fb-like" data-href="{{ url('/') }}/servicios#estrategia-digital" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div>
							</li>
							<li class="facebook hidden-xs">
								<div class="fb-share-button" data-href="{{ url('/') }}/servicios#estrategia-digital" data-type="button_count"></div>		
							</li><!-- Botón de compartir para tabletas y PC -->
							<li class="google visible-xs">
								<!-- Google Plus -->
								<div class="g-plusone" data-size="tall" data-href="{{ url('/') }}/servicios#estrategia-digital"></div>
							</li>
							<li class="google hidden-xs">
								<div class="g-plusone" data-size="medium" data-href="{{ url('/') }}/servicios#estrategia-digital"></div>								
							</li><!-- Botón de compartir para tabletas y PC -->
						</ul>
					</div><!-- Fin de Compartir -->
				</div>
			</div>
		</article><!-- Fin de estrategia digital -->
		<article class="desarrollo-web centrar-vertical">
			<div class="row-fluid">
				<div class="col-sm-5 left-content">
					<h1 class="bloque">Desarrollo web</h1>
					<figure class="img-servicios bloque-interno">
						{{ HTML::image("assets/images/desarrollo-web-digital-cocktail.jpg", "Estrategia Digital - Digital Cocktail") }}
					</figure>
				</div>
				<div class="col-sm-7 right-content">
					<h2 class="bloque-interno"><strong>Un espacio agradable para compartir con tus invitados…</strong></h2>
					<div class="texto-servicios bloque-interno">
						<p>Tu sitio web será impecable, eficaz y organizado. un lugar agradable y útil para tus visitantes y tu empresa,  y lo mejor, es que lo verán bien ¡desde cualquier dispositivo! </p>
					</div>
					<div class="btn-contacto bloque-interno">
						<button id="btnShow" type="button" class="btn-success btnShow">Me interesa</button>
						<form id="frm-desarrollo-web" role="Formulario">
							<div class="nombre-servicios">
								<label for="dw-nombre-servicios">Nombre*</label>
								<input type="text" id="dw-nombre-servicios" placeholder="Mucho gusto, tú eres...">
							</div>
							<div class="email-servicios">
								<label for="dw-email-servicios">E-mail*</label>
								<input type="email" id="dw-email-servicios" placeholder="Para seguir en contacto">
							</div>
							<div class="tel-servicios">
								<label for="dw-tel-servicios">Teléfono</label>
								<input type="tel" id="dw-tel-servicios" placeholder="Si lo consideras necesario">
							</div>
							<div class="recibirinfo-servicios text-left form-dc">
									<h3>Suscríbete</h3>
									<label class="check-box"><input type="checkbox" class="chkSuscripcion" id="dw-suscribirse" checked>Me gustaría recibir información de Digital Cocktail</label>
									<div class="listas-correo">
										<label class="check-box listas"><input type="checkbox" id="dw-eventos" checked>Eventos y actividades</label>
										<label class="check-box listas"><input type="checkbox" id="dw-promociones" checked>Promociones</label>
										<label class="check-box listas"><input type="checkbox" id="dw-blog" checked>Últimos artículos del blog</label>
									</div>
									<p>Antes de suscribirte debes estar de acuerdo con nuestra <a href="#" target="_blank">Política de manejo de datos</a></p>
							</div>
							<div class="enviar-servicios bloque-interno">
								<button class="btn-success" type="submit">Enviar</button>
							</div>
						</form>
						<div id="dw-cargando" class="oculto">
							<div class="spinner">
							  <div class="cube1"></div>
							  <div class="cube2"></div>
							</div>						
							<h2>Enviando...</h2>
							<p class="subtitulo">pronto estarás enterado de nuestras novedades</p>
						</div>
						<div id="dw-success" class="oculto">					
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
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('/') }}/servicios#desarrollo-web" data-via="DCocktailco" data-lang="es" data-count="vertical">Twittear</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							</li>
							<li class="twitter hidden-xs">
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('/') }}/servicios#desarrollo-web" data-via="DCocktailco" data-lang="es">Twittear</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>							
							</li><!-- Botón de compartir para tabletas y PC -->
							<li class="facebook visible-xs">
								<!-- Facebook -->		
								<div class="fb-like" data-href="{{ url('/') }}/servicios#desarrollo-web" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div>
							</li>
							<li class="facebook hidden-xs">
								<div class="fb-share-button" data-href="{{ url('/') }}/servicios#desarrollo-web" data-type="button_count"></div>		
							</li><!-- Botón de compartir para tabletas y PC -->
							<li class="google visible-xs">
								<!-- Google Plus -->
								<div class="g-plusone" data-size="tall" data-href="{{ url('/') }}/servicios#desarrollo-web"></div>
							</li>
							<li class="google hidden-xs">
								<div class="g-plusone" data-size="medium" data-href="{{ url('/') }}/servicios#desarrollo-web"></div>								
							</li><!-- Botón de compartir para tabletas y PC -->
						</ul>
					</div><!-- Fin de Compartir -->
				</div>
			</div>
		</article><!-- Fin de Desarrollo Web -->	
		<article class="consultoria-digital centrar-vertical">
			<div class="row-fluid">
				<div class="col-sm-5 left-content">
					<h1 class="bloque">Consultoría Digital</h1>
					<figure class="img-servicios bloque-interno">
						{{ HTML::image("assets/images/consultoria-digital-cocktail.jpg", "Consultoría Digital - Digital Cocktail") }}
					</figure>
				</div>
				<div class="col-sm-7 right-content">
					<h2 class="bloque-interno"><strong>La fiesta perfecta con la ayuda apropiada...</strong></h2>
					<div class="texto-servicios bloque-interno">
						<p>Realizamos un diagnóstico para encontrar justo lo que necesitas para que tus proyectos tengan la mejor presencia en la web, ¡déjanos acompañarte! encontremos el mejor camino para que incursiones en Internet de manera estratégica.</p>
					</div>
					<div class="btn-contacto bloque-interno">
						<button type="button" class="btn-success btnShow">Me interesa</button>
						<form id="frm-consultoria-digital" role="Formulario">
							<div class="nombre-servicios">
								<label for="cd-nombre-servicios">Nombre*</label>
								<input type="text" id="cd-nombre-servicios" placeholder="Mucho gusto, tú eres...">
							</div>
							<div class="email-servicios">
								<label for="cd-email-servicios">E-mail*</label>
								<input type="email" id="cd-email-servicios" placeholder="Para seguir en contacto">
							</div>
							<div class="tel-servicios">
								<label for="cd-tel-servicios">Teléfono</label>
								<input type="tel" id="cd-tel-servicios" placeholder="Si lo consideras necesario">
							</div>
							<div class="recibirinfo-servicios text-left form-dc">
									<h3>Suscríbete</h3>
									<label class="check-box"><input type="checkbox" class="chkSuscripcion" id="cd-suscribirse" checked>Me gustaría recibir información de Digital Cocktail</label>
									<div class="listas-correo">
										<label class="check-box listas"><input type="checkbox" id="cd-eventos" checked>Eventos y actividades</label>
										<label class="check-box listas"><input type="checkbox" id="cd-promociones" checked>Promociones</label>
										<label class="check-box listas"><input type="checkbox" id="cd-blog" checked>Últimos artículos del blog</label>
									</div>
									<p>Antes de suscribirte debes estar de acuerdo con nuestra <a href="#" target="_blank">Política de manejo de datos</a></p>
							</div>
							<div class="enviar-servicios bloque-interno">
								<button class="btn-success" type="submit">Enviar</button>
							</div>
						</form>
						<div id="cd-cargando" class="oculto">
							<div class="spinner">
							  <div class="cube1"></div>
							  <div class="cube2"></div>
							</div>						
							<h2>Enviando...</h2>
							<p class="subtitulo">pronto estarás enterado de nuestras novedades</p>
						</div>
						<div id="cd-success" class="oculto">					
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
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('/') }}/servicios#consultoria-digital" data-via="DCocktailco" data-lang="es" data-count="vertical">Twittear</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							</li>
							<li class="twitter hidden-xs">
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('/') }}/servicios#consultoria-digital" data-via="DCocktailco" data-lang="es">Twittear</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>							
							</li><!-- Botón de compartir para tabletas y PC -->
							<li class="facebook visible-xs">
								<!-- Facebook -->		
								<div class="fb-like" data-href="{{ url('/') }}/servicios#consultoria-digital" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div>
							</li>
							<li class="facebook hidden-xs">
								<div class="fb-share-button" data-href="{{ url('/') }}/servicios#consultoria-digital" data-type="button_count"></div>		
							</li><!-- Botón de compartir para tabletas y PC -->
							<li class="google visible-xs">
								<!-- Google Plus -->
								<div class="g-plusone" data-size="tall" data-href="{{ url('/') }}/servicios#consultoria-digital"></div>
							</li>
							<li class="google hidden-xs">
								<div class="g-plusone" data-size="medium" data-href="{{ url('/') }}/servicios#consultoria-digital"></div>								
							</li><!-- Botón de compartir para tabletas y PC -->
						</ul>
					</div><!-- Fin de Compartir -->
				</div>
			</div>
		</article><!-- Fin de Consultoría Digital -->
		<article class="email-marketing centrar-vertical">
			<div class="row-fluid">
				<div class="col-sm-5 left-content">
					<h1 class="bloque">E-mail Marketing</h1>
					<figure class="img-servicios bloque-interno">
						{{ HTML::image("assets/images/email-marketing-digital-cocktail.jpg", "E-mail Marketing - Digital Cocktail") }}
					</figure>
				</div>
				<div class="col-sm-7 right-content">
					<h2 class="bloque-interno"><strong>Que se enteren de tus novedades y te visiten…</strong></h2>
					<div class="texto-servicios bloque-interno">
						<p>Mantente en contacto con todos, cuéntales tus noticias más recientes, envíales invitaciones a las que no se puedan resistir y saca el mejor beneficio de ello.</p>
					</div>
					<div class="btn-contacto bloque-interno">
						<button type="button" class="btn-success btnShow">Me interesa</button>
						<form id="frm-email-marketing" role="Formulario">
							<div class="nombre-servicios">
								<label for="em-nombre-servicios">Nombre*</label>
								<input type="text" id="em-nombre-servicios" placeholder="Mucho gusto, tú eres...">
							</div>
							<div class="email-servicios">
								<label for="em-email-servicios">E-mail*</label>
								<input type="email" id="em-email-servicios" placeholder="Para seguir en contacto">
							</div>
							<div class="tel-servicios">
								<label for="em-tel-servicios">Teléfono</label>
								<input type="tel" id="em-tel-servicios" placeholder="Si lo consideras necesario">
							</div>
							<div class="recibirinfo-servicios text-left form-dc">
									<h3>Suscríbete</h3>
									<label class="check-box"><input type="checkbox" class="chkSuscripcion" id="em-suscribirse" checked>Me gustaría recibir información de Digital Cocktail</label>
									<div class="listas-correo">
										<label class="check-box listas"><input type="checkbox" id="em-eventos" checked>Eventos y actividades</label>
										<label class="check-box listas"><input type="checkbox" id="em-promociones" checked>Promociones</label>
										<label class="check-box listas"><input type="checkbox" id="em-blog" checked>Últimos artículos del blog</label>
									</div>
									<p>Antes de suscribirte debes estar de acuerdo con nuestra <a href="#" target="_blank">Política de manejo de datos</a></p>
							</div>
							<div class="enviar-servicios bloque-interno">
								<button class="btn-success" type="submit">Enviar</button>
							</div>
						</form>
						<div id="em-cargando" class="oculto">
							<div class="spinner">
							  <div class="cube1"></div>
							  <div class="cube2"></div>
							</div>						
							<h2>Enviando...</h2>
							<p class="subtitulo">pronto estarás enterado de nuestras novedades</p>
						</div>
						<div id="em-success" class="oculto">					
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
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('/') }}/servicios#email-marketing" data-via="DCocktailco" data-lang="es" data-count="vertical">Twittear</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							</li>
							<li class="twitter hidden-xs">
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('/') }}/servicios#email-marketing" data-via="DCocktailco" data-lang="es">Twittear</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>							
							</li><!-- Botón de compartir para tabletas y PC -->
							<li class="facebook visible-xs">
								<!-- Facebook -->		
								<div class="fb-like" data-href="{{ url('/') }}/servicios#email-marketing" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div>
							</li>
							<li class="facebook hidden-xs">
								<div class="fb-share-button" data-href="{{ url('/') }}/servicios#email-marketing" data-type="button_count"></div>		
							</li><!-- Botón de compartir para tabletas y PC -->
							<li class="google visible-xs">
								<!-- Google Plus -->
								<div class="g-plusone" data-size="tall" data-href="{{ url('/') }}/servicios#email-marketing"></div>
							</li>
							<li class="google hidden-xs">
								<div class="g-plusone" data-size="medium" data-href="{{ url('/') }}/servicios#email-marketing"></div>								
							</li><!-- Botón de compartir para tabletas y PC -->
						</ul>
					</div><!-- Fin de Compartir -->
				</div>
			</div>
		</article><!-- Fin de E-mail Marketing -->
		<article class="contenidos centrar-vertical">
			<div class="row-fluid">
				<div class="col-sm-5 left-content">
					<h1 class="bloque">Contenidos Digitales</h1>
					<figure class="img-servicios bloque-interno">
						{{ HTML::image("assets/images/contenidos-digital-cocktail.jpg", "Generación de contenidos - Digital Cocktail") }}
					</figure>
				</div>
				<div class="col-sm-7 right-content">
					<h2 class="bloque-interno"><strong>Verte atractivo es cuestión de saberte expresar…</strong></h2>
					<div class="texto-servicios bloque-interno">
						<p>Lo que dices, lo que muestras, lo que compartes y como lo haces, es clave para comunicarte con los otros,  hazles llegar el mensaje que quieres y de la manera más acertada a través de medios digitales. </p>
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
									<div class="listas-correo">
										<label class="check-box listas"><input type="checkbox" id="co-eventos" checked>Eventos y actividades</label>
										<label class="check-box listas"><input type="checkbox" id="co-promociones" checked>Promociones</label>
										<label class="check-box listas"><input type="checkbox" id="co-blog" checked>Últimos artículos del blog</label>
									</div>
									<p>Antes de suscribirte debes estar de acuerdo con nuestra <a href="#" target="_blank">Política de manejo de datos</a></p>
							</div>
							<div class="enviar-servicios bloque-interno">
								<button class="btn-success" type="submit">Enviar</button>
							</div>
						</form>
						<div id="co-cargando" class="oculto">
							<div class="spinner">
							  <div class="cube1"></div>
							  <div class="cube2"></div>
							</div>						
							<h2>Enviando...</h2>
							<p class="subtitulo">pronto estarás enterado de nuestras novedades</p>
						</div>
						<div id="co-success" class="oculto">					
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
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('/') }}/servicios#contenidos" data-via="DCocktailco" data-lang="es" data-count="vertical">Twittear</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							</li>
							<li class="twitter hidden-xs">
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('/') }}/servicios#contenidos" data-via="DCocktailco" data-lang="es">Twittear</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>							
							</li><!-- Botón de compartir para tabletas y PC -->
							<li class="facebook visible-xs">
								<!-- Facebook -->		
								<div class="fb-like" data-href="{{ url('/') }}/servicios#contenidos" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div>
							</li>
							<li class="facebook hidden-xs">
								<div class="fb-share-button" data-href="{{ url('/') }}/servicios#contenidos" data-type="button_count"></div>		
							</li><!-- Botón de compartir para tabletas y PC -->
							<li class="google visible-xs">
								<!-- Google Plus -->
								<div class="g-plusone" data-size="tall" data-href="{{ url('/') }}/servicios#contenidos"></div>
							</li>
							<li class="google hidden-xs">
								<div class="g-plusone" data-size="medium" data-href="{{ url('/') }}/servicios#contenidos"></div>								
							</li><!-- Botón de compartir para tabletas y PC -->
						</ul>
					</div><!-- Fin de Compartir -->
				</div>
			</div>
		</article><!-- Fin de Contenidos -->
		<article class="redes-sociales centrar-vertical">
			<div class="row-fluid">
				<div class="col-sm-5 left-content">
					<h1 class="bloque">Redes Sociales</h1>
					<figure class="img-servicios bloque-interno">
						{{ HTML::image("assets/images/redes-sociales-digital-cocktail.jpg", "Estrategias redes sociales - Digital Cocktail") }}
					</figure>
				</div>
				<div class="col-sm-7 right-content">
					<h2 class="bloque-interno"><strong>Te quieren por tu personalidad...</strong></h2>
					<div class="texto-servicios bloque-interno">
						<p>Tus redes sociales son la vía más efectiva y rápida para interactuar con tu público, crea lazos con ellos y alcanza logros efectivos para tu marca. </p>
					</div>
					<div class="btn-contacto bloque-interno">
						<button type="button" class="btn-success btnShow">Me interesa</button>
						<form id="frm-redes-sociales" role="Formulario">
							<div class="nombre-servicios">
								<label for="rs-nombre-servicios">Nombre*</label>
								<input type="text" id="rs-nombre-servicios" placeholder="Mucho gusto, tú eres...">
							</div>
							<div class="email-servicios">
								<label for="rs-email-servicios">E-mail*</label>
								<input type="email" id="rs-email-servicios" placeholder="Para seguir en contacto">
							</div>
							<div class="tel-servicios">
								<label for="rs-tel-servicios">Teléfono</label>
								<input type="tel" id="rs-tel-servicios" placeholder="Si lo consideras necesario">
							</div>
							<div class="recibirinfo-servicios text-left form-dc">
									<h3>Suscríbete</h3>
									<label class="check-box"><input type="checkbox" class="chkSuscripcion" id="rs-suscribirse" checked>Me gustaría recibir información de Digital Cocktail</label>
									<div class="listas-correo">
										<label class="check-box listas"><input type="checkbox" id="rs-eventos" checked>Eventos y actividades</label>
										<label class="check-box listas"><input type="checkbox" id="rs-promociones" checked>Promociones</label>
										<label class="check-box listas"><input type="checkbox" id="rs-blog" checked>Últimos artículos del blog</label>
									</div>
									<p>Antes de suscribirte debes estar de acuerdo con nuestra <a href="#" target="_blank">Política de manejo de datos</a></p>
							</div>
							<div class="enviar-servicios bloque-interno">
								<button class="btn-success" type="submit">Enviar</button>
							</div>
						</form>
						<div id="rs-cargando" class="oculto">
							<div class="spinner">
							  <div class="cube1"></div>
							  <div class="cube2"></div>
							</div>						
							<h2>Enviando...</h2>
							<p class="subtitulo">pronto estarás enterado de nuestras novedades</p>
						</div>
						<div id="rs-success" class="oculto">					
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
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('/') }}/servicios#redes-sociales" data-via="DCocktailco" data-lang="es" data-count="vertical">Twittear</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							</li>
							<li class="twitter hidden-xs">
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('/') }}/servicios#redes-sociales" data-via="DCocktailco" data-lang="es">Twittear</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>							
							</li><!-- Botón de compartir para tabletas y PC -->
							<li class="facebook visible-xs">
								<!-- Facebook -->		
								<div class="fb-like" data-href="{{ url('/') }}/servicios#redes-sociales" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div>
							</li>
							<li class="facebook hidden-xs">
								<div class="fb-share-button" data-href="{{ url('/') }}/servicios#redes-sociales" data-type="button_count"></div>		
							</li><!-- Botón de compartir para tabletas y PC -->
							<li class="google visible-xs">
								<!-- Google Plus -->
								<div class="g-plusone" data-size="tall" data-href="{{ url('/') }}/servicios#redes-sociales"></div>
							</li>
							<li class="google hidden-xs">
								<div class="g-plusone" data-size="medium" data-href="{{ url('/') }}/servicios#redes-sociales"></div>								
							</li><!-- Botón de compartir para tabletas y PC -->
						</ul>
					</div><!-- Fin de Compartir -->
				</div>
			</div>
		</article><!-- Fin de Redes Sociales -->
		<article class="seo centrar-vertical">
			<div class="row-fluid">
				<div class="col-sm-5 left-content">
					<h1 class="bloque">SEO</h1>
					<figure class="img-servicios bloque-interno">
						{{ HTML::image("assets/images/seo-digital-cocktail.jpg", "SEO - Digital Cocktail") }}
					</figure>
				</div>
				<div class="col-sm-7 right-content">
					<h2 class="bloque-interno"><strong>Serás el más buscado de la fiesta…</strong></h2>
					<div class="texto-servicios bloque-interno">
						<p>Tus productos y servicios estarán listos para ser encontrados en la web, mejorarás tu popularidad en buscadores como Google, y cuando alguien necesite algo que tú le puedes ofrecer, más personas te encontrarán. </p>
					</div>
					<div class="btn-contacto bloque-interno">
						<button type="button" class="btn-success btnShow">Me interesa</button>
						<form id="frm-seo" role="Formulario">
							<div class="nombre-servicios">
								<label for="se-nombre-servicios">Nombre*</label>
								<input type="text" id="se-nombre-servicios" placeholder="Mucho gusto, tú eres...">
							</div>
							<div class="email-servicios">
								<label for="se-email-servicios">E-mail*</label>
								<input type="email" id="se-email-servicios" placeholder="Para seguir en contacto">
							</div>
							<div class="tel-servicios">
								<label for="se-tel-servicios">Teléfono</label>
								<input type="tel" id="se-tel-servicios" placeholder="Si lo consideras necesario">
							</div>
							<div class="recibirinfo-servicios text-left form-dc">
									<h3>Suscríbete</h3>
									<label class="check-box"><input type="checkbox" class="chkSuscripcion" id="se-suscribirse" checked>Me gustaría recibir información de Digital Cocktail</label>
									<div class="listas-correo">
										<label class="check-box listas"><input type="checkbox" id="se-eventos" checked>Eventos y actividades</label>
										<label class="check-box listas"><input type="checkbox" id="se-promociones" checked>Promociones</label>
										<label class="check-box listas"><input type="checkbox" id="se-blog" checked>Últimos artículos del blog</label>
									</div>
									<p>Antes de suscribirte debes estar de acuerdo con nuestra <a href="#" target="_blank">Política de manejo de datos</a></p>
							</div>
							<div class="enviar-servicios bloque-interno">
								<button class="btn-success" type="submit">Enviar</button>
							</div>
						</form>
						<div id="se-cargando" class="oculto">
							<div class="spinner">
							  <div class="cube1"></div>
							  <div class="cube2"></div>
							</div>						
							<h2>Enviando...</h2>
							<p class="subtitulo">pronto estarás enterado de nuestras novedades</p>
						</div>
						<div id="se-success" class="oculto">					
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
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('/') }}/servicios#seo" data-via="DCocktailco" data-lang="es" data-count="vertical">Twittear</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							</li>
							<li class="twitter hidden-xs">
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('/') }}/servicios#seo" data-via="DCocktailco" data-lang="es">Twittear</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>							
							</li><!-- Botón de compartir para tabletas y PC -->
							<li class="facebook visible-xs">
								<!-- Facebook -->		
								<div class="fb-like" data-href="{{ url('/') }}/servicios#seo" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div>
							</li>
							<li class="facebook hidden-xs">
								<div class="fb-share-button" data-href="{{ url('/') }}/servicios#seo" data-type="button_count"></div>		
							</li><!-- Botón de compartir para tabletas y PC -->
							<li class="google visible-xs">
								<!-- Google Plus -->
								<div class="g-plusone" data-size="tall" data-href="{{ url('/') }}/servicios#seo"></div>
							</li>
							<li class="google hidden-xs">
								<div class="g-plusone" data-size="medium" data-href="{{ url('/') }}/servicios#seo"></div>								
							</li><!-- Botón de compartir para tabletas y PC -->
						</ul>
					</div><!-- Fin de Compartir -->
				</div>
			</div>
		</article><!-- Fin de SEO -->
		<article class="publicidad-online centrar-vertical">
			<div class="row-fluid">
				<div class="col-sm-5 left-content">
					<h1 class="bloque">Publicidad Online</h1>
					<figure class="img-servicios bloque-interno">
						{{ HTML::image("assets/images/publicidad-online-digital-cocktail.jpg", "Publicidad Online - Digital Cocktail") }}
					</figure>
				</div>
				<div class="col-sm-7 right-content">
					<h2 class="bloque-interno"><strong>Una mezcla muy rentable... </strong></h2>
					<div class="texto-servicios bloque-interno">
						<p>Una campaña de publicidad en medios digitales que abra el camino para mejorar el retorno de tu inversión, pautar en diferentes espacios online hará que más personas conozcan tu empresa o proyecto y mejorar tus ventas. </p>
						<p>¡Es momento de mezclar! </p>
					</div>
					<div class="btn-contacto bloque-interno">
						<button type="button" class="btn-success btnShow">Me interesa</button>
						<form id="frm-publicidad-online" role="Formulario">
							<div class="nombre-servicios">
								<label for="po-nombre-servicios">Nombre*</label>
								<input type="text" id="po-nombre-servicios" placeholder="Mucho gusto, tú eres...">
							</div>
							<div class="email-servicios">
								<label for="po-email-servicios">E-mail*</label>
								<input type="email" id="po-email-servicios" placeholder="Para seguir en contacto">
							</div>
							<div class="tel-servicios">
								<label for="po-tel-servicios">Teléfono</label>
								<input type="tel" id="po-tel-servicios" placeholder="Si lo consideras necesario">
							</div>
							<div class="recibirinfo-servicios text-left form-dc">
									<h3>Suscríbete</h3>
									<label class="check-box"><input type="checkbox" class="chkSuscripcion" id="po-suscribirse" checked>Me gustaría recibir información de Digital Cocktail</label>
									<div class="listas-correo">
										<label class="check-box listas"><input type="checkbox" id="po-eventos" checked>Eventos y actividades</label>
										<label class="check-box listas"><input type="checkbox" id="po-promociones" checked>Promociones</label>
										<label class="check-box listas"><input type="checkbox" id="po-blog" checked>Últimos artículos del blog</label>
									</div>
									<p>Antes de suscribirte debes estar de acuerdo con nuestra <a href="#" target="_blank">Política de manejo de datos</a></p>
							</div>
							<div class="enviar-servicios bloque-interno">
								<button class="btn-success" type="submit">Enviar</button>
							</div>
						</form>
						<div id="po-cargando" class="oculto">
							<div class="spinner">
							  <div class="cube1"></div>
							  <div class="cube2"></div>
							</div>						
							<h2>Enviando...</h2>
							<p class="subtitulo">pronto estarás enterado de nuestras novedades</p>
						</div>
						<div id="po-success" class="oculto">					
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
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('/') }}/servicios#publicidad-online" data-via="DCocktailco" data-lang="es" data-count="vertical">Twittear</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							</li>
							<li class="twitter hidden-xs">
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('/') }}/servicios#publicidad-online" data-via="DCocktailco" data-lang="es">Twittear</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>							
							</li><!-- Botón de compartir para tabletas y PC -->
							<li class="facebook visible-xs">
								<!-- Facebook -->		
								<div class="fb-like" data-href="{{ url('/') }}/servicios#publicidad-online" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div>
							</li>
							<li class="facebook hidden-xs">
								<div class="fb-share-button" data-href="{{ url('/') }}/servicios#publicidad-online" data-type="button_count"></div>		
							</li><!-- Botón de compartir para tabletas y PC -->
							<li class="google visible-xs">
								<!-- Google Plus -->
								<div class="g-plusone" data-size="tall" data-href="{{ url('/') }}/servicios#publicidad-online"></div>
							</li>
							<li class="google hidden-xs">
								<div class="g-plusone" data-size="medium" data-href="{{ url('/') }}/servicios#publicidad-online"></div>								
							</li><!-- Botón de compartir para tabletas y PC -->
						</ul>
					</div><!-- Fin de Compartir -->
				</div>
			</div>
		</article><!-- Fin de Publicidad Online -->
		<article class="analitica-web centrar-vertical">
			<div class="row-fluid">
				<div class="col-sm-5 left-content">
					<h1 class="bloque">Analítica Web</h1>
					<figure class="img-servicios bloque-interno">
						{{ HTML::image("assets/images/metricas-analitica-digital-cocktail.jpg", "Métricas y analítica web - Digital Cocktail") }}
					</figure>
				</div>
				<div class="col-sm-7 right-content">
					<h2 class="bloque-interno"><strong>Todo en su justa medida…</strong></h2>
					<div class="texto-servicios bloque-interno">
						<p>Saber interpretar las métricas de tu empresa te llevará por el camino que quieres, así tus estrategias serán efectivas, potencializa tu redes sociales, sitio web, publicidad online... Recuerda que es importante tener claro cuál es la medida justa para alcanzar lo que necesitas</p>
					</div>
					<div class="btn-contacto bloque-interno">
						<button type="button" class="btn-success btnShow">Me interesa</button>
						<form id="frm-analitica-web" role="Formulario">
							<div class="nombre-servicios">
								<label for="aw-nombre-servicios">Nombre*</label>
								<input type="text" id="aw-nombre-servicios" placeholder="Mucho gusto, tú eres...">
							</div>
							<div class="email-servicios">
								<label for="aw-email-servicios">E-mail*</label>
								<input type="email" id="aw-email-servicios" placeholder="Para seguir en contacto">
							</div>
							<div class="tel-servicios">
								<label for="aw-tel-servicios">Teléfono</label>
								<input type="tel" id="aw-tel-servicios" placeholder="Si lo consideras necesario">
							</div>
							<div class="recibirinfo-servicios text-left form-dc">
									<h3>Suscríbete</h3>
									<label class="check-box"><input type="checkbox" class="chkSuscripcion" id="aw-suscribirse" checked>Me gustaría recibir información de Digital Cocktail</label>
									<div class="listas-correo">
										<label class="check-box listas"><input type="checkbox" id="aw-eventos" checked>Eventos y actividades</label>
										<label class="check-box listas"><input type="checkbox" id="aw-promociones" checked>Promociones</label>
										<label class="check-box listas"><input type="checkbox" id="aw-blog" checked>Últimos artículos del blog</label>
									</div>
									<p>Antes de suscribirte debes estar de acuerdo con nuestra <a href="#" target="_blank">Política de manejo de datos</a></p>
							</div>
							<div class="enviar-servicios bloque-interno">
								<button class="btn-success" type="submit">Enviar</button>
							</div>
						</form>
						<div id="aw-cargando" class="oculto">
							<div class="spinner">
							  <div class="cube1"></div>
							  <div class="cube2"></div>
							</div>						
							<h2>Enviando...</h2>
							<p class="subtitulo">pronto estarás enterado de nuestras novedades</p>
						</div>
						<div id="aw-success" class="oculto">					
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
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('/') }}/servicios#analitica-web" data-via="DCocktailco" data-lang="es" data-count="vertical">Twittear</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							</li>
							<li class="twitter hidden-xs">
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('/') }}/servicios#analitica-web" data-via="DCocktailco" data-lang="es">Twittear</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>							
							</li><!-- Botón de compartir para tabletas y PC -->
							<li class="facebook visible-xs">
								<!-- Facebook -->		
								<div class="fb-like" data-href="{{ url('/') }}/servicios#analitica-web" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div>
							</li>
							<li class="facebook hidden-xs">
								<div class="fb-share-button" data-href="{{ url('/') }}/servicios#analitica-web" data-type="button_count"></div>		
							</li><!-- Botón de compartir para tabletas y PC -->
							<li class="google visible-xs">
								<!-- Google Plus -->
								<div class="g-plusone" data-size="tall" data-href="{{ url('/') }}/servicios#analitica-web"></div>
							</li>
							<li class="google hidden-xs">
								<div class="g-plusone" data-size="medium" data-href="{{ url('/') }}/servicios#analitica-web"></div>								
							</li><!-- Botón de compartir para tabletas y PC -->
						</ul>
					</div><!-- Fin de Compartir -->
				</div>
			</div>
		</article><!-- Fin de Analítica Web -->	
		<article class="apps-nube centrar-vertical">
			<div class="row-fluid">
				<div class="col-sm-5 left-content">
					<h1 class="bloque">Apps en la Nube</h1>
					<figure class="img-servicios bloque-interno">
						{{ HTML::image("assets/images/apps-nube-digital-cocktail.jpg", "Aplicaciones en la nube - Digital Cocktail") }}
					</figure>
				</div>
				<div class="col-sm-7 right-content">
					<h2 class="bloque-interno"><strong>Lo importante no es sólo lo que va por fuera…</strong></h2>
					<div class="texto-servicios bloque-interno">
						<p>Detrás de una gran estrategia hay un grupo de aplicaciones en la nube que te facilita todo, desde la gestión de tus proyectos hasta el manejo de las relaciones con tus clientes, además, podrás acceder a todo desde cualquier lugar a través de Internet ¡Encontremos juntos lo que necesita tu empresa! </p>
					</div>
					<div class="btn-contacto bloque-interno">
						<button type="button" class="btn-success btnShow">Me interesa</button>
						<form id="frm-apps-nube" role="Formulario">
							<div class="nombre-servicios">
								<label for="an-nombre-servicios">Nombre*</label>
								<input type="text" id="an-nombre-servicios" placeholder="Mucho gusto, tú eres...">
							</div>
							<div class="email-servicios">
								<label for="an-email-servicios">E-mail*</label>
								<input type="email" id="an-email-servicios" placeholder="Para seguir en contacto">
							</div>
							<div class="tel-servicios">
								<label for="an-tel-servicios">Teléfono</label>
								<input type="tel" id="an-tel-servicios" placeholder="Si lo consideras necesario">
							</div>
							<div class="recibirinfo-servicios text-left form-dc">
									<h3>Suscríbete</h3>
									<label class="check-box"><input type="checkbox" class="chkSuscripcion" id="an-suscribirse" checked>Me gustaría recibir información de Digital Cocktail</label>
									<div class="listas-correo">
										<label class="check-box listas"><input type="checkbox" id="an-eventos" checked>Eventos y actividades</label>
										<label class="check-box listas"><input type="checkbox" id="an-promociones" checked>Promociones</label>
										<label class="check-box listas"><input type="checkbox" id="an-blog" checked>Últimos artículos del blog</label>
									</div>
									<p>Antes de suscribirte debes estar de acuerdo con nuestra <a href="#" target="_blank">Política de manejo de datos</a></p>
							</div>
							<div class="enviar-servicios bloque-interno">
								<button class="btn-success" type="submit">Enviar</button>
							</div>
						</form>
						<div id="an-cargando" class="oculto">
							<div class="spinner">
							  <div class="cube1"></div>
							  <div class="cube2"></div>
							</div>						
							<h2>Enviando...</h2>
							<p class="subtitulo">pronto estarás enterado de nuestras novedades</p>
						</div>
						<div id="an-success" class="oculto">					
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
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('/') }}/servicios#apps-nube" data-via="DCocktailco" data-lang="es" data-count="vertical">Twittear</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							</li>
							<li class="twitter hidden-xs">
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('/') }}/servicios#apps-nube" data-via="DCocktailco" data-lang="es">Twittear</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>							
							</li><!-- Botón de compartir para tabletas y PC -->
							<li class="facebook visible-xs">
								<!-- Facebook -->		
								<div class="fb-like" data-href="{{ url('/') }}/servicios#apps-nube" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div>
							</li>
							<li class="facebook hidden-xs">
								<div class="fb-share-button" data-href="{{ url('/') }}/servicios#apps-nube" data-type="button_count"></div>		
							</li><!-- Botón de compartir para tabletas y PC -->
							<li class="google visible-xs">
								<!-- Google Plus -->
								<div class="g-plusone" data-size="tall" data-href="{{ url('/') }}/servicios#apps-nube"></div>
							</li>
							<li class="google hidden-xs">
								<div class="g-plusone" data-size="medium" data-href="{{ url('/') }}/servicios#apps-nube"></div>								
							</li><!-- Botón de compartir para tabletas y PC -->
						</ul>
					</div><!-- Fin de Compartir -->
				</div>
			</div>
		</article><!-- Fin de Apps en la nube -->					
	</section><!-- Fin del contenedor de los servicios -->
	<div class="capa-opacidad"></div>
	<div class="btn-cerrar"><a href="#">+<span>Servicios</span></a></div>
	<div class="menu-servicios">
		<ul>
			<li><a href="#estrategia-digital" class="ed active">Estrategia Digital</a></li>
			<li><a href="#desarrollo-web" class="dw">Desarrollo web</a></li>
			<li><a href="#consultoria-digital" class="cd">Consultoría digital</a></li>
			<li><a href="#email-marketing" class="em">E-mail Marketing</a></li>
			<li><a href="#contenidos" class="con">Contenidos</a></li>
			<li><a href="#redes-sociales" class="rs">Redes Sociales</a></li>
			<li><a href="#seo" class="se">SEO</a></li>
			<li><a href="#publicidad-online" class="po">Publicidad Online</a></li>
			<li><a href="#analitica-web" class="aw">Analítica web</a></li>
			<li><a href="#apps-nube" class="an">Apps en la nube</a></li>
		</ul>
	</div><!-- fin de menu-servicios -->
	<script type="text/javascript">
	var rutaContactarServicio = "{{ URL::route('contacto/servicios') }}";
	</script>
@stop