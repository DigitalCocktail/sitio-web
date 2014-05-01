@extends('templates/default/layout')
@section("content")
	<section class="servicios text-center container">
		<article class="estrategia-digital centrar-vertical">
			<div class="row-fluid">
				<div class="col-sm-5 left-content">
					<h1 class="bloque">Estrategia digital</h1>
					<figure class="img-servicios bloque-interno">
						{{ HTML::image("assets/images/desarrollo-web-digital-cocktail.jpg", "Estrategia Digital - Digital Cocktail") }}
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
						<form id="frm-estrategia-digital" role="Formulario">
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
		<article class="desarrollo-web centrar-vertical">
			<div class="row-fluid">
				<div class="col-sm-5 left-content">
					<h1 class="bloque">Desarrollo web</h1>
					<figure class="img-servicios bloque-interno">
						{{ HTML::image("assets/images/desarrollo-web-digital-cocktail.jpg", "Estrategia Digital - Digital Cocktail") }}
					</figure>
				</div>
				<div class="col-sm-7 right-content">
					<h2 class="bloque-interno"><strong>Un espacio agradable para compartir con tus invitados…
</strong></h2>
					<div class="texto-servicios bloque-interno">
						<p>Tu sitio web será impecable, eficaz y organizado. un lugar agradable y útil para tus visitantes y tu empresa,  y lo mejor, es que lo verán bien ¡desde cualquier dispositivo! </p>
					</div>
					<div class="btn-contacto bloque-interno">
						<button id="btnShow" type="button" class="btn-success">Me interesa</button>
						<form id="frm-desarrollo-web" role="Formulario">
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
		</article><!-- Fin de Desarrollo Web -->	
		<article class="consultoria-digital centrar-vertical">
			<div class="row-fluid">
				<div class="col-sm-5 left-content">
					<h1 class="bloque">Consultoría Digital</h1>
					<figure class="img-servicios bloque-interno">
						{{ HTML::image("assets/images/desarrollo-web-digital-cocktail.jpg", "Estrategia Digital - Digital Cocktail") }}
					</figure>
				</div>
				<div class="col-sm-7 right-content">
					<h2 class="bloque-interno"><strong>La fiesta perfecta con la ayuda apropiada...
</strong></h2>
					<div class="texto-servicios bloque-interno">
						<p>Realizamos un diagnóstico para encontrar justo lo que necesitas para que tus proyectos tengan la mejor presencia en la web, ¡déjanos acompañarte! encontremos el mejor camino para que incursiones en Internet de manera estratégica.</p>
					</div>
					<div class="btn-contacto bloque-interno">
						<button type="button" class="btn-success btnShow">Me interesa</button>
						<form id="frm-consultoria-digital" role="Formulario">
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
		</article><!-- Fin de E-mail Marketing -->
		<article class="contenidos centrar-vertical">
			<div class="row-fluid">
				<div class="col-sm-5 left-content">
					<h1 class="bloque">Contenidos Digitales</h1>
					<figure class="img-servicios bloque-interno">
						{{ HTML::image("assets/images/desarrollo-web-digital-cocktail.jpg", "Estrategia Digital - Digital Cocktail") }}
					</figure>
				</div>
				<div class="col-sm-7 right-content">
					<h2 class="bloque-interno"><strong>Verte atractivo es cuestión de saberte expresar…
</strong></h2>
					<div class="texto-servicios bloque-interno">
						<p>Lo que dices, lo que muestras, lo que compartes y como lo haces, es clave para comunicarte con los otros,  hazles llegar el mensaje que quieres y de la manera más acertada a través de medios digitales. </p>
					</div>
					<div class="btn-contacto bloque-interno">
						<button type="button" class="btn-success btnShow">Me interesa</button>
						<form id="frm-contenidos" role="Formulario">
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
		</article><!-- Fin de Contenidos -->
		<article class="redes-sociales centrar-vertical">
			<div class="row-fluid">
				<div class="col-sm-5 left-content">
					<h1 class="bloque">Redes Sociales</h1>
					<figure class="img-servicios bloque-interno">
						{{ HTML::image("assets/images/desarrollo-web-digital-cocktail.jpg", "Estrategia Digital - Digital Cocktail") }}
					</figure>
				</div>
				<div class="col-sm-7 right-content">
					<h2 class="bloque-interno"><strong>Te quieren por tu personalidad... </strong></h2>
					<div class="texto-servicios bloque-interno">
						<p>Tus redes sociales son la vía más efectiva y rápida para interactuar con tu público, crea lazos con ellos y alcanza logros efectivos para tu marca. </p>
					</div>
					<div class="btn-contacto bloque-interno">
						<button type="button" class="btn-success btnShow">Me interesa</button>
						<form id="frm-redes-sociales" role="Formulario">
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
		</article><!-- Fin de Redes Sociales -->
		<article class="seo centrar-vertical">
			<div class="row-fluid">
				<div class="col-sm-5 left-content">
					<h1 class="bloque">SEO</h1>
					<figure class="img-servicios bloque-interno">
						{{ HTML::image("assets/images/desarrollo-web-digital-cocktail.jpg", "Estrategia Digital - Digital Cocktail") }}
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
		</article><!-- Fin de SEO -->
		<article class="publicidad-online centrar-vertical">
			<div class="row-fluid">
				<div class="col-sm-5 left-content">
					<h1 class="bloque">Publicidad Online</h1>
					<figure class="img-servicios bloque-interno">
						{{ HTML::image("assets/images/desarrollo-web-digital-cocktail.jpg", "Estrategia Digital - Digital Cocktail") }}
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
		</article><!-- Fin de Publicidad Online -->
		<article class="analitica-web centrar-vertical">
			<div class="row-fluid">
				<div class="col-sm-5 left-content">
					<h1 class="bloque">Analítica Web</h1>
					<figure class="img-servicios bloque-interno">
						{{ HTML::image("assets/images/desarrollo-web-digital-cocktail.jpg", "Estrategia Digital - Digital Cocktail") }}
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
		</article><!-- Fin de Analítica Web -->	
		<article class="apps-nube centrar-vertical">
			<div class="row-fluid">
				<div class="col-sm-5 left-content">
					<h1 class="bloque">Apps en la Nube</h1>
					<figure class="img-servicios bloque-interno">
						{{ HTML::image("assets/images/desarrollo-web-digital-cocktail.jpg", "Estrategia Digital - Digital Cocktail") }}
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
@stop