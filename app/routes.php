<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() {
	$data = array(
		'active' => 1
	);
	return View::make('inicio', $data);
});
Route::get('/terminos-y-condiciones', function() {
	$data = array(
		'active' => 0
	);
	return View::make('terminos-y-condiciones', $data);
});
Route::get('/conocenos', function() {
	$data = array(
		'active' => 2
	);	
	return View::make('conocenos', $data);
});

Route::get('/servicios', function() {
	return Redirect::to('/servicios/estrategia-digital');
});

Route::get('/servicios/estrategia-digital', function() {
	$data = array(
		'active' => 3
	);
	return View::make('servicios.estrategia-digital', $data);
});

Route::get('/servicios/desarrollo-web', function() {
	$data = array(
		'active' => 3
	);
	return View::make('servicios.desarrollo-web', $data);
});

Route::get('/servicios/consultoria-digital', function() {
	$data = array(
		'active' => 3
	);
	return View::make('servicios.consultoria-digital', $data);
});

Route::get('/servicios/email-marketing', function() {
	$data = array(
		'active' => 3
	);
	return View::make('servicios.email-marketing', $data);
});

Route::get('/servicios/contenidos-digitales', function() {
	$data = array(
		'active' => 3
	);
	return View::make('servicios.contenidos-digitales', $data);
});

Route::get('/servicios/redes-sociales', function() {
	$data = array(
		'active' => 3
	);
	return View::make('servicios.redes-sociales', $data);
});

Route::get('/servicios/seo', function() {
	$data = array(
		'active' => 3
	);
	return View::make('servicios.seo', $data);
});

Route::get('/servicios/publicidad-online', function() {
	$data = array(
		'active' => 3
	);
	return View::make('servicios.publicidad-online', $data);
});

Route::get('/servicios/analitica-web', function() {
	$data = array(
		'active' => 3
	);
	return View::make('servicios.analitica-web', $data);
});

Route::get('/servicios/apps-nube', function() {
	$data = array(
		'active' => 3
	);
	return View::make('servicios.apps-nube', $data);
});

Route::get('/contacto', function() {
	$data = array(
		'active' => 5
	);	
	return View::make('contacto', $data);
});

Route::post("/contactar/servicio", array(
	"as" => "contacto/servicios",
	"uses" => "ContactoController@contactoServicios"
));

Route::post("/contacto/contactar", array(
	"as" => "contacto/contactar",
	"uses" => "ContactoController@contactar"
));

Route::post("/contactar/suscribirse", array(
	"as" => "contacto/suscribirse",
	"uses" => "ContactoController@suscribe"
));