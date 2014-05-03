<article class="entradilla-post bloque-interno">
	<header>
		<h1><a href="{{ url('blog/'.$post->slug) }}">{{ $post->title }}</a></h1>
	</header>
	<figure><img src="" alt=""></figure>
	{{ $post->parsed_intro }}
	<footer class="metadatos row-fluid">
		<div class="fecha col-xs-6 col-sm-4 col-md-3">
			<span class="dia">{{ date("d", strtotime($post->publish_date)) }}</span>
			<span class="mes">{{ date("M", strtotime($post->publish_date)) }}</span>
			<span class="ano">{{ date("Y", strtotime($post->publish_date)) }}</span>
		</div>
		<div class="autor col-md-3">
			<span>Por {{ $post->user->first_name }} {{ $post->user->last_name }}</span>
		</div>
		<div class="comentarios col-sm-4 col-md-3">
			<span>
				<fb:comments-count expr:href='{{ url("blog/".$post->slug) }}'></fb:comments-count>
			</span>
		</div>
		<div class="leer-mas-articulos col-xs-6 col-sm-4 col-md-3"><a href="{{ url('blog/'.$post->slug) }}" class="btn-leer-mas">Leer más</a></div>
	</footer>
</article><!-- Fin artículo -->
