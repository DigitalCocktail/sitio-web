@extends('templates/default/layout')
@section("content")
	<section class="servicios">
		<article class="estrategia-digital">
			<h1>Estrategia digital</h1>
			<div class="compartir">
				<ul>
					<li class="twitter">Twitter</li>
					<li class="facebook">Facebook</li>
					<li class="google">Google+</li>
				</ul>
			</div>
			<figure class="img-servicios">
				<img src="#" alt="Estrategia digital">
			</figure>
			<h2>En saber elegir está la clave</h2>
			<div class="texto-servicios">
				<p>Encontramos los ingredientes apropiados y la medida justa que necesitas para que tus proyectos tengan el mejor impacto web.</p>
				<p>Sentémonos a tomar algo y a crear la mezcla perfecta.</p>
				<!-- Twitter -->
				<a href="https://twitter.com/share" class="twitter-share-button" data-lang="es">Twittear</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
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
			</div>
			<div class="btn-contacto">
				<button type="button">Me interesa</button>
				<form role="Formulario">
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
					<div class="recibirinfo-servicios">
						<label><input type="checkbox">Me gustaría recibir información de Digital Cocktail</label>
					</div>
					<div class="enviar-servicios">
						<button type="submit">Enviar</button>
					</div>
				</form>
			</div><!-- Fin del botón de contacto -->
		</article><!-- Fin de estrategia digital -->
	</section><!-- Fin del contenedor de los servicios -->
	<div class="menu-servicios">
		<ul>
			<li><a href="#" class="ed">Estrategia Digital</a></li>
			<li><a href="#" class="dw">Desarrollo web</a></li>
			<li><a href="#" class="cd">Consultoría digital</a></li>
			<li><a href="#" class="em">E-mail Marketing</a></li>
			<li><a href="#" class="con">Contenidos</a></li>
			<li><a href="#" class="rs">Redes Sociales</a></li>
			<li><a href="#" class="se">SEO</a></li>
			<li><a href="#" class="po">Publicidad Online</a></li>
			<li><a href="#" class="aw">Anañitica web</a></li>
			<li><a href="#" class="an">Apps en la nube</a></li>
		</ul>
	</div><!-- fin de menu-servicios -->
@stop