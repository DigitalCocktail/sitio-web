@extends('templates/default/layout')

@section('imagefb')
{{ url('/assets/images/conocenos.jpg') }}
@stop

@section('title')
Digital Cocktail - Estrategias Digitales de alta calidad pensadas en tu crecimiento empresarial
@stop

@section('description')
Nos encargamos de encontrar las herramientas ideales para brindarte una solución para hacer crecer tu negocio
@stop
@section("content")
<!--
	<div class="buscador-aside-movil bloque-interno">
		{{ Form::open(array('url'=>'archivo','role'=>'formulario', 'method' => 'GET')) }}
			{{ Form::text('q', NULL, array(
				'class' => 'buscador',
				'id' => 'buscador',
				'placeholder' => '¿Qué estás buscando?'
			)) }}
			<button class="btn-buscar" type="submit"></button>
		{{ Form::close() }}
	</div>
-->
	<section class="blog row-fluid terminos">
		<article class="conocenos col-sm-9 col-sm-push-3 bloque-interno">
			<h1>Términos y condiciones del sitio web de Digital Cocktail S.A.S</h1>
			<h2>Aviso Legal y Políticas de Privacidad </h2>
			<p>Hola, nos complace que visites el sitio web de Digital Cocktail S.A.S, agencia digital dedicada a crear estrategias digitales de calidad para el crecimiento empresarial. Por medio del sitio web de Digital Cocktail S.A.S (En adelante llamada “La agencia”, “nosotros”, “nos”) te ofrecemos el portafolio de nuestros servicios, el acceso a contenidos y la posibilidad de suscribirte a nuestros boletines bajo los términos y condiciones que serán descritos en este documento. </p>
			<p>Si tienes alguna duda puedes contactarnos a través del correo electrónico <a href="href="mailto:encontacto@digitalcocktail.co"">encontacto@digitalcocktail.co</a>, llamarnos a los teléfonos 319 2477545 ó 301 2424166, también puedes usar el formulario de <a href="{{url("/contacto")}}">Contáctanos</a> de nuestro sitio web.</p>
			<h2>1. Usuario</strong></h2>

			<p>Al acceder al sitio web de la agencia, debes entender que estás de acuerdo con los  términos y condiciones generales aquí reflejados, que aceptas las obligaciones que estos te exigen y estás de acuerdo con las políticas de protección de datos y demás aspectos descritos en este documento.</p>

			<h2>2. Uso del sitio web</h2>
			    
			<p>En <a href="http://www.digitalcoctail.co" target:"_blank">www.digitalcocktail.co</a> le proporcionamos acceso a múltiple informacion sobre tecnología y pymes, a nuestros servicios, novedades, ofertas y demás datos de interés (en adelante llamados, "los contenidos") que son de creación y propiedad de la agencia.</p>

			<p>Para la difusión de los contenidos y para fines de estrategia digital de la agencia, recolectamos la información que describimos a continuación:</p>
			<ul>
				<li>
					<p><strong>Cookies:</strong> Cuando navegas nuestro sitio web, nosotros recolectamos cierta información que se almacena en tu navegador, por ejemplo desde dónde nos visitas, cuánto tiempo te quedas en nuestro sitio web, desde qué dispositivo llegaste, con el fin de darte una mejor calidad de navegación y poderte dar ofertas y descuentos adaptados a tus intereses; esta información la recopilamos usando la tecnología “Cookies”. </p>
					<p>Las cookies pueden ser bloqueadas desde el navegador que tu usas en el momento que creas conveniente, para hacerlo, puedes dirigirte al espacio de ayuda de tu navegador.</p>
				</li>
				<li>
					<p><strong>Datos de navegación e historial:</strong> Recolectamos información específica sobre tus acciones dentro de nuestro sitio, por ejemplo las páginas que visitas, los botones a los que le das clic, y los servicios que te han interesado, esto nos ayuda al igual que las Cookies a optimizar nuestros contenidos a tus intereses.</p>
				</li>
				<li>
					<p><strong>Datos personales que los usuarios suministran:</strong> Cuando te suscribes a nuestros boletines o cuando nos contactas por medio de los formularios de nuestro sitio web, te solicitamos algunos datos personales necesarios para poder brindarte beneficios; al suministrarlos estás de acuerdo con los términos de protección de datos descritos a continuación. </p>
				</li>
			</ul>
			<h2>3. Protección de datos</h2>

			<p>Ten presente que los datos y la información que nos suministres será usada exclusivamente por la agencia para fines internos de comunicación y mercadeo, ningún tercero va a tener acceso a ella. Le damos manejo a todos estos datos según lo estipulado en la Ley 1581 de 2012 (Hábeas Data) de la legislación Colombiana sobre la protección de datos personales y demás normativa aplicable. Nos preocupamos por darle un correcto uso y tratamiento a tus datos personales.</p>

			<p>Recuerda que puedes retirar tu suscripción a los boletines cuando desees, solo debes dirigirte al enlace de desuscripción en la parte final del correo del boletín o escribirnos a través del formulario  <a href="{{url("/contacto")}}">Contáctanos</a> de nuestro sitio web.</p>
			<h2>4. Propiedad intelectual </h2>
    
			<p>Digital Cocktail S.A.S es titular de todos los derechos de propiedad del sitio web www.digitalcocktail.co, así como de los elementos contenidos en el mismo (a título enunciativo, imágenes, sonido, audio, vídeo, software o textos; marcas o logotipos, combinaciones de colores, estructura y diseño, selección de materiales usados, acceso y uso, etc.) las imágenes o contenidos que sean utilizados en el sitio web de la agencia, tendrán el crédito respectivo.</p>

			<p>Los contenidos en la sección blog del sitio web de la agencia, estarán amparados bajo licencia de Creative Commons Reconocimiento, NoComercial, SinObraDerivada 4.0 Internacional, lo que que quiere decir que podrás compartirlos con las personas que quieras, por los medios que desees sin fines de lucro, dándonos el crédito de los contenidos y enlazarlos a nuestro sitio.</p>

			<h2>5. Exclusión de garantías y responsabilidades</h2>
			    
			<p>En Digital Cocktail adoptamos medidas tecnológicas necesarias para evitar violación a la seguridad de los datos almacenados y recopilados a través de nuestro sitio web, sin embargo a pesar de esto, ningún sistema está exento de sufrir ataques a la seguridad de los datos y demás contenidos; por eso no podemos hacernos responsables de virus o violaciones a la seguridad que ponga en peligro dicha información. </p>
			<h2>6. Modificaciones</h2>

			<p>Nos reservamos el derecho de efectuar sin previo aviso las modificaciones que consideremos oportunas en nuestro sitio web, como por ejemplo, cambiar, suprimir o añadir contenidos y servicios; también la forma en la que éstos aparecen y cómo son presentados o localizados en el sitio web. </p>
			<h2>6. Enlaces</h2>

			<p>En caso de que enlaces o hipervínculos que direccionen a otros sitios de Internet sean posteados en nuestro sitio web, la agencia no podrá ejercer ningún tipo de control sobre dichos sitios y contenidos ajenos, por lo que no asumiremos ninguna responsabilidad ni garantizamos la disponibilidad  técnica, calidad, fiabilidad, exactitud, amplitud, veracidad, validez y constitucionalidad de cualquier material o información contenida en ninguno de dichos hipervínculos u otros sitios de Internet.</p>
			<h2>7. Enlaces</h2>

			<p>En caso de que enlaces o hipervínculos que direccionen a otros sitios de Internet sean posteados en nuestro sitio web, la agencia no podrá ejercer ningún tipo de control sobre dichos sitios y contenidos ajenos, por lo que no asumiremos ninguna responsabilidad ni garantizamos la disponibilidad  técnica, calidad, fiabilidad, exactitud, amplitud, veracidad, validez y constitucionalidad de cualquier material o información contenida en ninguno de dichos hipervínculos u otros sitios de Internet.  </p>  
			<h2>8. Generalidades de los términos y condiciones</h2>
			<ul>
				<li>
					<p>Nos reservamos el derecho de eliminar cualquier comentario ofensivo o fuera de tono publicado en nuestro blog.</p>
				</li>
				<li>
					<p>Los datos personales que nos suministres serán únicamente para uso de la agencia para sus comunicaciones o para ofrecerte ofertas a nuestros servicios.</p>
				</li>
				<li>
					<p>Al suscribirte a nuestros boletines, autorizas la recopilación, procesamiento y utilización de toda la información que nos suministraste.</p>
				</li>
				<li>
					<p>En cualquier momento la agencia podrá modificar las condiciones aquí expuestas, dichos cambios serán notificados debidamente en nuestro blog y luego publicados en este mismo espacio.</p>
				</li>
			</ul>
			<p>Cualquier pregunta que tengas puedes hacérnosla escribiendo a <a href="href="mailto:encontacto@digitalcocktail.co"">encontacto@digitalcocktail.co</a> te responderemos pronto. </p>
			
			
			
  
		</article>
		<aside class="aside-blog col-sm-3 col-sm-pull-9">
		<!--
			<div class="buscador-aside bloque-interno">
			{{ Form::open(array('url'=>'archivo','role'=>'formulario', 'method' => 'GET')) }}
				{{ Form::text('q', NULL, array(
					'class' => 'buscador',
					'id' => 'buscador',
					'placeholder' => '¿Qué estás buscando?'
				)) }}
				<button class="btn-buscar" type="submit"></button>
			{{ Form::close() }}
			</div>
			-->
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
		</aside><!-- Fin del aside -->
	</section><!-- Fin del contenedor de los articulos - blog -->
@stop