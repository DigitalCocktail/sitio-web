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
	$data = [
		'active' => 1
	];
	return View::make('inicio', $data);
});

Route::get('/servicios', function() {
	$data = [
		'active' => 2
	];
	return View::make('servicios', $data);
});

Route::get('/contacto', function() {
	$data = [
		'active' => 4
	];	
	return View::make('contacto', $data);
});