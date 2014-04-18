@extends('templates/default/layout')
@section("content")
	<section class="servicios text-center container">
		<article class="estrategia-digital">
			<div class="row">
				<div class="col-sm-5 left-content">
					<h1 class="bloque">Estrategia digital</h1>
					<figure class="img-servicios bloque-interno">
						<img src="http://lorempixel.com/200/100" alt="Estrategia digital">
					</figure>
				</div>
				<div class="col-sm-7 right-content">
					<h2 class="bloque-interno"><strong>En saber elegir está la clave</strong></h2>
					<div class="texto-servicios bloque-interno">
						<p>Encontramos los ingredientes apropiados y la medida justa que necesitas para que tus proyectos tengan el mejor impacto web.</p>
						<p>Sentémonos a tomar algo y a crear la mezcla perfecta.</p>
					</div>
					<div class="btn-contacto bloque-interno">
						<button id="btnShow" type="button" class="btn-success">Me interesa</button>
						<form id="frm" role="Formulario">
							<div class="nombre-servicios">
								<label for="nombre-servicios">Nombre*</label>
								<input type="text" id="nombre-servicios" placeholder="Mucho gusto, tú eres...">
							</div>
							<div class="email-servicios">
								<label for="email-servicios">E-mail*</label>
								<input type="email" id="email-servicios" placeholder="Para seguir en contacto">
							</div>
							<div class="tel-servicios">
								<label for="tel-servicios">Teléfono</label>
								<input type="tel" id="tel-servicios" placeholder="Si lo consideras necesario">
							</div>
							<div class="recibirinfo-servicios text-left form-dc">
									<h3>Suscríbete</h3>
									<label class="check-box"><input type="checkbox" id="chkSuscripcion" checked>Me gustaría recibir información de Digital Cocktail</label>
									<div class="listas-correo">
										<label class="check-box listas"><input type="checkbox" checked>Eventos y actividades</label>
										<label class="check-box listas"><input type="checkbox" checked>Promociones</label>
										<label class="check-box listas"><input type="checkbox" checked>Últimos artículos del blog</label>
									</div>
									<p>Antes de suscribirte debes estar de acuerdo con nuestra <a href="#" target="_blank">Política de manejo de datos</a></p>
							</div>
							<div class="enviar-servicios bloque-interno">
								<button class="btn-success" type="submit">Enviar</button>
							</div>
						</form>
					</div><!-- Fin del botón de contacto -->
					<div class="compartir bloque">
						<p><strong>Comparte</strong></p>
						<ul>
							<li class="twitter visible-xs">
								<!-- Twitter -->
								<a href="https://twitter.com/share" class="twitter-share-button" data-lang="es">Twittear</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							</li>
							<li class="twitter hidden-xs">Twitter</li><!-- Botón de compartir para tabletas y PC -->
							<li class="facebook visible-xs">
									<!-- Facebook -->
								<div id="fb-root"></div>
								<script>(function(d, s, id) {
								  var js, fjs = d.getElementsByTagName(s)[0];
								  if (d.getElementById(id)) return;
								  js = d.createElement(s); js.id = id;
								  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1&appId=1477313795816778";
								  fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));</script>			
								<div class="fb-like" data-href="http://digitalcocktail.co" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div>
							</li>
							<li class="facebook hidden-xs">Facebook</li><!-- Botón de compartir para tabletas y PC -->
							<li class="google visible-xs">
								<!-- Google Plus -->
								<div class="g-plusone" data-size="tall"></div>

								<!-- Place this tag after the last +1 button tag. -->
								<script type="text/javascript">
								  window.___gcfg = {lang: 'es-419'};

								  (function() {
								    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
								    po.src = 'https://apis.google.com/js/platform.js';
								    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
								  })();
								</script>
							</li>
							<li class="google hidden-xs">Google+</li><!-- Botón de compartir para tabletas y PC -->
						</ul>
					</div><!-- Fin de Compartir -->
				</div>
			</div>
		</article><!-- Fin de estrategia digital -->
	</section><!-- Fin del contenedor de los servicios -->
	<div class="capa-opacidad"></div>
	<div class="btn-cerrar"><a href="#">+<span>Servicios</span></a></div>
	<div class="menu-servicios">
		<ul>
			<li><a href="#" class="ed active">Estrategia Digital</a></li>
			<li><a href="#" class="dw">Desarrollo web</a></li>
			<li><a href="#" class="cd">Consultoría digital</a></li>
			<li><a href="#" class="em">E-mail Marketing</a></li>
			<li><a href="#" class="con">Contenidos</a></li>
			<li><a href="#" class="rs">Redes Sociales</a></li>
			<li><a href="#" class="se">SEO</a></li>
			<li><a href="#" class="po">Publicidad Online</a></li>
			<li><a href="#" class="aw">Analítica web</a></li>
			<li><a href="#" class="an">Apps en la nube</a></li>
		</ul>
	</div><!-- fin de menu-servicios -->
@stop