@extends(theme_view('layout'))

@section('description')
{{ trim(substr($post->content, 0, 156)) }}
@stop

@section('title')
{{ $post->title }}
@stop

@section('content')
	<article class="post-completo col-sm-9 col-sm-push-3">
		<header class="articulo-header">
			<h1>{{ $post->title }}</h1>
		</header>
		<div class="compartir">
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
		{{ $post->parsed_content }}
		<div class="compartir">
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
		<footer class="metadatos row-fluid">
		<div class="fecha col-xs-6">
			<span class="dia">{{ date("d", strtotime($post->publish_date)) }}</span>
			<span class="mes">{{ date("M", strtotime($post->publish_date)) }}</span>
			<span class="ano">{{ date("Y", strtotime($post->publish_date)) }}</span>
		</div>
		<div class="autor col-xs-6">
			<span>Por {{ $post->user->first_name }} {{ $post->user->last_name }}</span> 
		</div>
		<div class="comentarios">5</div>
		<div class="leer-mas-articulos col-xs-6"><a href="{{ url('blog/'.$post->slug) }}" class="btn-leer-mas">Leer más</a></div>
		</footer>		
		<div class="fb-comments" data-href="{{ url('/').'/blog/'.$post->slug }}" data-numposts="10" data-colorscheme="light"></div>			
	</article>
	<aside class="aside-blog aside-post col-sm-3 col-sm-pull-9">
		
		<div class="etiquetas-aside">
			<h3>Etiquetas</h3>
			@include(theme_view('inc.tags'))
		</div>
		<div class="suscribete-aside text-left form-dc">
			<h3>Suscríbete y recibe los últimos artículos en tu correo</h3>
			<form role="Formulario">
				<label class="check-box"><input id="chkSuscripcionContacto" type="checkbox" checked>Me gustaría recibir información de Digital Cocktail</label>
				<div id="listasCorreoContacto" class="listas-correo">
					<label class="check-box listas"><input type="checkbox" checked>Eventos y actividades</label>
					<label class="check-box listas"><input type="checkbox" checked>Promociones</label>
					<label class="check-box listas"><input type="checkbox" checked>Últimos artículos del blog</label>
				</div>
				<p>Antes de suscribirte debes estar de acuerdo con nuestra <a href="#" target="_blank">Política de manejo de datos</a></p>
				<div class="campo-correo">
					<input class="ingrese-correo" type="mail" id="mail-suscripcion" placeholder="Ingresa tu correo">
					<button type="submit" class=""></button>
				</div>
			</form>
		</div>
	</aside><!-- Fin del aside -->
@stop

