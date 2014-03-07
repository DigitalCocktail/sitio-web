@extends('templates/default/layout')
@section("content")	
	<section class="blog">
		<aside class="aside-blog">
			<div class="buscador-aside">
				<form role="formulario">
					<input type="text" id="buscador-aside">	
					<button type="submit">Buscar</button>				
				</form>
			</div>
			<div class="etiquetas-aside">
				<h3>Etiquetas</h3>
				<a href="#" class="etiqueta">web</a>
				<a href="#" class="etiqueta">web</a>
				<a href="#" class="etiqueta">web</a>
			</div>
			<div class="suscribete-aside">
				<h3>Suscríbete y recibe los últimos artículos en tu correo</h3>
				<label for="mail-suscripcion"><input type="checkbox">Antes de suscribirte debes estar de acuerdo con nuestra <a href="#">Política de manejo de datos</a></label>
				<input type="mail" id="mail-suscripcion" placeholder="Ingresa tu correo">
				<button type="submit">Evniar</button>
			</div>
		</aside><!-- Fin del aside -->
		<article>
			<header>
				<h1>Este es el título de un artículo con un texto bien largo</h1>
			</header>
			<figure><img src="" alt=""></figure>
			<p>Párrafo de entradilla de un artículo</p>
			<footer class="metadatos">
				<div class="fecha">
					<span class="dia">28</span>
					<span class="mes">Mar</span>
					<span class="ano">2014</span>
				</div>
				<div class="autor">
					<p><span>Por</span>Vanessa Reyes</p>
				</div>
				<div class="comentarios">5</div>
				<div class="leer-mas-articulos"><a href="#" class="btn-leer-mas">Leer más</a></div>
			</footer>
		</article><!-- Fin artículo -->
		<article>
			<header>
				<h1>Este es el título de un artículo con un texto bien largo</h1>
			</header>
			<figure><img src="" alt=""></figure>
			<p>Párrafo de entradilla de un artículo</p>
			<footer class="metadatos">
				<div class="fecha">
					<span class="dia">28</span>
					<span class="mes">Mar</span>
					<span class="ano">2014</span>
				</div>
				<div class="autor">
					<p><span>Por</span>Vanessa Reyes</p>
				</div>
				<div class="comentarios">5</div>
				<div class="leer-mas-articulos"><a href="#" class="btn-leer-mas">Leer más</a></div>
			</footer>
		</article><!-- Fin artículo -->
		<article>
			<header>
				<h1>Este es el título de un artículo con un texto bien largo</h1>
			</header>
			<figure><img src="" alt=""></figure>
			<p>Párrafo de entradilla de un artículo</p>
			<footer class="metadatos">
				<div class="fecha">
					<span class="dia">28</span>
					<span class="mes">Mar</span>
					<span class="ano">2014</span>
				</div>
				<div class="autor">
					<p><span>Por</span>Vanessa Reyes</p>
				</div>
				<div class="comentarios">5</div>
				<div class="leer-mas-articulos"><a href="#" class="btn-leer-mas">Leer más</a></div>
			</footer>
		</article><!-- Fin artículo -->
		<div class="ver-mas-blog">
			<a href="#" class="btn-ver-mas-blog">Ver más articulos</a>
		</div><!-- Fin botón Ver más artículos -->
	</section><!-- Fin del contenedor de los articulos - blog -->
@stop