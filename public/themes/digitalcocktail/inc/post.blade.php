<article class="entradilla-post bloque-interno">
	<header>
		<h1><a href="{{ url('blog/'.$post->slug) }}">{{ $post->title }}</a></h1>
	</header>
	<figure><img src="" alt=""></figure>
	{{ $post->parsed_intro }}
	<footer class="metadatos row-fluid">
		<div class="fecha col-xs-6">
			<span class="dia">{{ date("d", strtotime($post->publish_date)) }}</span>
			<span class="mes">{{ date("M", strtotime($post->publish_date)) }}</span>
			<span class="ano">{{ date("Y", strtotime($post->publish_date)) }}</span>
		</div>
		<div class="autor">
			<p><span>Por</span> {{ $post->user->first_name }} {{ $post->user->last_name }}</p>
		</div>
		<div class="comentarios">5</div>
		<div class="leer-mas-articulos col-xs-6"><a href="{{ url('blog/'.$post->slug) }}" class="btn-leer-mas">Leer más</a></div>
	</footer>
</article><!-- Fin artículo -->
