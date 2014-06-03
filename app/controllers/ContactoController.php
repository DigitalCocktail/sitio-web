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
		$suscribirse = Input::get('suscribirse');
		$blog = Input::get('blog');
		$eventos = Input::get('eventos');
		$promociones = Input::get('promociones');

		if($suscribirse){
			$client_id = 'suscriptores';
			$client_secret = 'HSNxIGo14NB8rTjaFPOMeGkGMXgD71pJkuGick2U6y6XvcUuBXswmT4rJX6cs4w9';
			// Setup client
			Podio::setup($client_id, $client_secret);

			Podio::setup($client_id, $client_secret);
			// Obtain access token
			$username = 'belmar.santanilla@digitalcocktail.co';
			$password = 'CNBDGFAA880519$';
			Podio::authenticate('password', array('username' => $username, 'password' => $password));
			
			if($blog){
				PodioItem::create(8264446, array('fields' => array(
					"nombre" => Input::get('nombre'),
					"correo-electronico" => Input::get('email'),
					'telefono' => Input::get('telefono'),
					"estado" => 1
				)));
			}
			if($eventos){
				PodioItem::create(8264537, array('fields' => array(
					"nombre" => Input::get('nombre'),
					"correo-electronico" => Input::get('email'),
					'telefono' => Input::get('telefono'),
					"estado" => 1
				)));
			}	
			if($promociones){
				PodioItem::create(8264562, array('fields' => array(
					"nombre" => Input::get('nombre'),
					"correo-electronico" => Input::get('email'),
					'telefono' => Input::get('telefono'),
					"estado" => 1
				)));
			}					
		}

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
		        'from_name' => 'Digital Cocktail',
		        'to' => array(
		        			array(
		        				'email' => $data['to'],
		        				'name'  => $data['nameTo']
		        			)
		        )
		    )
		);

		$dcHtml = View::make("emails.encontacto", $data)->render();		

		$mailData = array(
		    'message' => array(
		        'subject' => $data['nameTo'] . " Requiere " . $servicio,
		        'html' => $dcHtml,
		        'from_email' => 'sistema@digitalcocktail.co',
		        'from_name' => 'Digital Cocktail',
		        'to' => array(
		        			array(
		        				'email' => 'encontacto@digitalcocktail.co',
		        				'name'  => 'Contacto Digital Cocktail'
		        			)
		        )
		    )
		);		

		$emailUsuario = Mandrill::request('messages/send', $payload);	
		$emailDc = Mandrill::request('messages/send', $mailData);
		
		$r = new stdClass;
		if($emailUsuario && $emailDc){
			$r->response = "success";
		}
		else {
			$r->response = "fail";
		}		
		
		return json_encode($r);
	}

	public function createItemPodio($data){

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
			"nombre" => $data['nombre'],
			"correo-electronico" => "belmar@digitalcocktail.co",
			"estado" => 1
		)));		
	}

}