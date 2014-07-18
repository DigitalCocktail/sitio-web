@extends(theme_view('layout'))

@section('description')
{{ trim(substr($post->content, 0, 156)) }}
@stop

@section('title')
{{ $post->title }}
@stop

@section('description')
{{ trim(substr($post->content, 0, 156)) }}
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
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('blog/'.$post->slug) }}" data-via="DCocktailco" data-lang="es" data-count="vertical">Twittear</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</li>
				<li class="twitter hidden-xs">
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('blog/'.$post->slug) }}" data-via="DCocktailco" data-lang="es">Twittear</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>						
				</li><!-- Botón de compartir para tabletas y PC -->
				<li class="facebook visible-xs">
					<!-- Facebook -->
					<div class="fb-like" data-href="{{ url('blog/'.$post->slug) }}" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div>
				</li>
				<li class="facebook hidden-xs">
					<div class="fb-share-button" data-href="{{ url('blog/'.$post->slug) }}" data-type="button_count"></div>		
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
		{{ $post->parsed_content }}
		<div class="compartir">
			<ul>
				<li class="twitter visible-xs">
					<!-- Twitter -->
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('blog/'.$post->slug) }}" data-via="DCocktailco" data-lang="es" data-count="vertical">Twittear</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</li>
				<li class="twitter hidden-xs">
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('blog/'.$post->slug) }}" data-via="DCocktailco" data-lang="es">Twittear</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>						
				</li><!-- Botón de compartir para tabletas y PC -->
				<li class="facebook visible-xs">
					<!-- Facebook -->
					<div class="fb-like" data-href="{{ url('blog/'.$post->slug) }}" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div>
				</li>
				<li class="facebook hidden-xs">
					<div class="fb-share-button" data-href="{{ url('blog/'.$post->slug) }}" data-type="button_count"></div>		
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
			<form id="frm-suscribir" role="Formulario">
				<label class="check-box"><input id="chkSuscripcionContacto" type="checkbox" checked>Me gustaría recibir información de Digital Cocktail</label>
				<div id="listasCorreoContacto" class="listas-correo">
					<label class="check-box listas"><input type="checkbox" id="eventos" checked>Eventos y actividades</label>
					<label class="check-box listas"><input type="checkbox" id="promociones" checked>Promociones</label>
					<label class="check-box listas"><input type="checkbox" id="blog" checked>Últimos artículos del blog</label>
				</div>
				<p>Al de suscribirte indicas estar de acuerdo con nuestra <a href="#" target="_blank">Política de manejo de datos</a></p>
				<div class="campo-correo">
					<input class="ingrese-correo" type="mail" id="mail-suscripcion" placeholder="Ingresa tu correo">
					<button type="submit" class=""></button>
				</div>
			</form>
			<div id="cargando" class="oculto">
				<div class="spinner">
				  <div class="cube1"></div>
				  <div class="cube2"></div>
				</div>						
				<h2>Enviando...</h2>
				<p class="subtitulo">pronto estarás enterado de nuestras novedades</p>
			</div>
			<div id="success" class="oculto">					
				<h2>Envío Exitoso</h2>
			</div>			
		</div>
		<div>
		@foreach ($articulosRelacionados as $articulo)
			@if($articulo->id != $post->id)
				<a href="{{ url('blog/'.$post->slug) }}">
					<img src="{{ Util::get_src_first_image($articulo->parsed_content) }}" class="img-responsive">
				</a>
				<h6><a href="{{ url('blog/'.$post->slug) }}">{{ $articulo->title }}</a></h6>
			@endif
		@endforeach
		</div>
	</aside><!-- Fin del aside -->
	<script type="text/javascript">
	var rutaSuscribirse = "{{ URL::route('contacto/suscribirse') }}";
	</script>	
@stop

