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

Route::get('/servicios', function() {
	$data = array(
		'active' => 2
	);
	return View::make('servicios', $data);
});

Route::get('/contacto', function() {
	$data = array(
		'active' => 4
	);	
	return View::make('contacto', $data);
});

Route::post("/contactar/servicio", array(
	"as" => "contacto/servicios",
	"uses" => "ContactoController@contactoServicios"
));

Route::post("/contactar/suscribirse", array(
	"as" => "contacto/suscribirse",
	"uses" => "ContactoController@Suscribirse"
));