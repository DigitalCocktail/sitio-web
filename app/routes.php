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

Route::get('/prueba-podio', function(){
	$client_id = 'lista-blog';
	$client_secret = 'e6DYbhCb22kkcl9FWVmwuQO6rlq4OyK94HM4q2Gb5I6drdqTrdfQ265XqKyPQLOg';
	// Setup client
	Podio::setup($client_id, $client_secret);

	Podio::setup($client_id, $client_secret);
	// Obtain access token
	$username = 'belmar.santanilla@digitalcocktail.co';
	$password = 'CNBDGFAA880519$';
	Podio::authenticate('password', array('username' => $username, 'password' => $password));
	
	PodioItem::create(8264446, array('fields' => array(
	  "nombre" => "Digital Cocktail",
	  "correo-electronico" => "b.santanilla@digitalcocktail.co",
	  "estado" => 1
	)));
});

Route::post("/contactar/servicio", array(
	"as" => "contacto/servicios",
	"uses" => "ContactoController@contactoServicios"
));

Route::get('/prueba', function(){
	$response = Mandrill::request('messages/send', array(
	    'message' => array(
	        'html' => 'Body of the message.',
	        'subject' => 'Subject of the message.',
	        'from_email' => 'monkey@somewhere.com',
	        'to' => array(array('email'=>'belmars@gmail.com')),
	    ),
	));
});