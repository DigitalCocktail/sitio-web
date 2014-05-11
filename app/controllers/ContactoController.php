<?php

class ContactoController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Contacto 
	|--------------------------------------------------------------------------
	|
	| Este controlador es el encargado de manejar todos los formularios
	| de contacto que se encuentran en el sitio web.
	|
	*/

	public function contactoServicios(){
		$servicio = Util::getServicio(Input::get('s'));
		$data = array(
			'subject' => 'Contacto ' . $servicio,
			'to' => Input::get('email'),
			'nameTo' => Input::get('nombre'),
			'telefono' => Input::get('telefono'),
			'servicio' => $servicio
		);
		$emailUsuario = Mail::send('emails.contacto', $data, function($message) use ($data) {
		    $message->to($data['to'], $data['nameTo'])->subject($data['subject']);
		});		
		$r = new stdClass;
		$r->response = "success";
		return json_encode($r);
	}

}