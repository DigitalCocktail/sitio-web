@extends('templates/default/layout')
@section('title')Contáctanos - Digital Cocktail @stop

@section('description')Nos encargamos de encontrar las herramientas ideales para brindarte una solución para hacer crecer tu negocio @stop
@section("content")	
	<section>
		<div class="container">
			<div class="botones-contacto bloque">
				<a id="btnEscribenos" class="active" href="#">Escríbenos</a>
				<a id="btnTrabaja" class="trabaja" href="#">Trabaja con nosotros</a>
			</div>
			<article id="frmContacto" class="container-fluid formulario-contacto">
				<div class="contenedor-escribenos row-fluid">
					<div class="texto bloque-interno col-md-6">
						<p>En Digital Cocktail te escuchamos, te respondemos y generamos una conversacion real. ¿Qué nos quieres contar?</p>
						<p class="contacto-directo">Si deseas, puedes contactarnos directame al <strong>319 247 75 45</strong>, o al correo <a href="mailto:encontacto@digitalcocktail.co">encontacto@digitalcocktail.co</a></p>
					</div>
					<div class="formulario bloque-interno col-md-6">
						<form id="frm-contacto" role="Formulario">
							<div class="nombre-contacto">
								<label for="nombre-contacto">Nombre <span class="obligatorio">*</span></label>
								<input type="text" id="nombre-contacto" placeholder="Mucho gusto, tú eres...">
							</div>
							<div class="correo-contacto">
								<label for="correo-contacto">Correo <span class="obligatorio">*</span></label>
								<input type="email" id="correo-contacto" placeholder="¿Dónde te respondemos?">
							</div>
							<div class="interesa-contacto">
								<label for="interesa-contacto">Me interesa... <span class="obligatorio">*</span></label>
								<select name="asunto" id="interesa-contacto">
									<option value="saludo">Sólo quiero saludar</option>
									<option value="estrategia">Estrategia digital</option>
									<option value="desarrollo-web">Desarrollo web</option>
									<option value="consultoria">Consultoría digital</option>
									<option value="e-mail">E-mail marketing</option>
									<option value="contenidos">Creación de contenidos</option>
									<option value="redes-sociales">Redes Sociales</option>
									<option value="seo">Posicionamiento en buscadores</option>
									<option value="publicidad">Publicidad online</option>
									<option value="analitica">Analítica web</option>
									<option value="nube">Aplicaciones en la nube</option>
								</select>
							</div>
							<div class="mensaje-contacto">
								<label for="mensaje-contacto">Mensaje <span class="obligatorio">*</span></label>
								<textarea name="mensaje" id="mensaje-contacto" cols="30" rows="10" placeholder="Somos todo oídos..."></textarea>
							</div>
							<div class="suscribete-contacto text-left form-dc">
								<h3>Suscríbete</h3>
								<label class="check-box"><input id="chkSuscripcionContacto" type="checkbox" checked>Me gustaría recibir información de Digital Cocktail</label>
								<div id="listasCorreoContacto" class="listas-correo">
									<label class="check-box listas"><input type="checkbox" id="eventos" checked>Eventos y actividades</label>
									<label class="check-box listas"><input type="checkbox" id="promociones" checked>Promociones</label>
									<label class="check-box listas"><input type="checkbox" id="blog" checked>Últimos artículos del blog</label>
								</div>
								<p>Antes de suscribirte debes estar de acuerdo con nuestra <a href="#" target="_blank">Política de manejo de datos</a></p>
							</div>
							<div class="enviar-contacto bloque-interno">
						<button type="submit" class="btn-success">Enviar</button>
					</div>
						</form>
						<div id="cargando" class="oculto cargando">
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
				</div>
			</article><!-- Fin de escribenos -->
			<article id="frmTrabaja" class="container-fluid formulario-trabaja">
				<div class="contenedor-trabaja bloque-interno row-fluid">
					<div class="texto col-md-6">
						<p>En Digital Cocktail siempre estamos buscando nuevos miembros talentosos para el equipo. ¿Te gustaría ayudarnos a mezclar lo mejor de la web para nuestros clientes? </p>
					</div>
					<div class="formulario col-md-6">
						<form role="Formulario">
							<div class="nombre-trabaja">
								<label for="nombre-trabaja">Nombre <span class="obligatorio">*</span></label>
								<input type="text" id="nombre-trabaja" placeholder="Mucho gusto, tú eres...">
							</div>
							<div class="correo-trabaja">
								<label for="correo-trabaja">Correo <span class="obligatorio">*</span></label>
								<input type="email" id="correo-trabaja" placeholder="¿Dónde te respondemos?">
							</div>
							<div class="archivo-trabaja">
								<label for="mensaje-trabaja">Hoja de vida <span class="obligatorio">*</span></label>
								<input type="file" id="archivo-trabaja" ></textarea>
							</div>
							<div class="mensaje-trabaja">
								<label for="mensaje-trabaja">Cuéntanos un poco sobre ti <span class="obligatorio">*</span></label>
								<textarea name="mensaje" id="mensaje-trabaja" cols="30" rows="10" placeholder="Somos todo oídos..."></textarea>
							</div>
							<div class="suscribete-trabaja text-left form-dc">
								<h3>Suscríbete</h3>
								<label class="check-box"><input id="chkSuscripcionTrabaja" type="checkbox" checked>Me gustaría recibir información de Digital Cocktail</label>
								<div id="listasCorreoTrabaja" class="listas-correo">
									<label class="check-box listas"><input type="checkbox" checked>Eventos y actividades</label>
									<label class="check-box listas"><input type="checkbox" checked>Promociones</label>
									<label class="check-box listas"><input type="checkbox" checked>Últimos artículos del blog</label>
								</div>
								<p>Antes de suscribirte debes estar de acuerdo con nuestra <a href="#" target="_blank">Política de manejo de datos</a></p>
							</div>
							<div class="enviar-trabaja bloque-interno">
								<button type="submit" class="btn-success">Enviar</button>
							</div>
						</form>						
					</div>
				</div>
			</article><!-- Fin de Trabaja con nosotros -->
		</div>
	</section>
	<script type="text/javascript">
	var rutaContactarServicio = "{{ URL::route('contacto/contactar') }}";
	</script>	
@stop	