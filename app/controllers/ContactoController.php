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

		$html = View::make("emails.contacto", $data)->render();		

		$payload = array(
		    'message' => array(
		        'subject' => $data['subject'],
		        'html' => $html,
		        'from_email' => 'encontacto@digitalcocktail.co',
		        'to' => array(
		        			array(
		        				'email' => $data['to'],
		        				'name'  => $data['nameTo']
		        			)
		        )
		    )
		);

		$emailUsuario = Mandrill::request('messages/send', $payload);	

		$r = new stdClass;
		$r->response = "success";
		return json_encode($r);
	}

}