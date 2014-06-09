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

	public function suscribirse($data){
		$suscriptor = new Suscriptor;
		$suscriptor->nombre = $data['nombre'];
		$suscriptor->email = $data['email'];
		$suscriptor->telefono = $data['telefono'];
		$suscriptor->blog = $data['blog'];
		$suscriptor->eventos = $data['eventos'];
		$suscriptor->promociones = $data['promociones'];
		if($suscriptor->save()){
			return true;
		}
		return false;
	}

	public function contactar(){
		$interes = Input::get('interes-contacto');
		$suscribirse = Input::get('suscribirse');
		$blog = Input::get('blog');
		$eventos = Input::get('eventos');
		$promociones = Input::get('promociones');

		$data = array(
			'nombre' => Input::get('nombre'),
			'email' => Input::get('email'),
			'telefono' => "",
			'blog' => $blog,
			'eventos' => $eventos,
			'promociones' => $promociones
		);

		$suscrito = true;

		if($suscribirse){
			$suscrito = $this->suscribirse($data);
		}

		$data = array(
			'subject' => 'Contacto Digital Cocktail',
			'to' => Input::get('email'),
			'nameTo' => Input::get('nombre'),
			'telefono' => Input::get('telefono'),
			'servicio' => Input::get('interes'),
			'mensaje' => Input::get('mensaje')
		);

		$html = View::make("emails.contactar", $data)->render();		

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
		        'subject' => $data['nameTo'] . " " . Input::get('interes'),
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
		if($emailUsuario && $emailDc && $suscrito){
			$r->response = 'success';
		}
		else {
			$r->response = "fail";
		}
		
		return json_encode($r);
	}	

	public function contactoServicios(){
		$servicio = Util::getServicio(Input::get('s'));
		$suscribirse = Input::get('suscribirse');
		$blog = Input::get('blog');
		$eventos = Input::get('eventos');
		$promociones = Input::get('promociones');

		$data = array(
			'nombre' => Input::get('nombre'),
			'email' => Input::get('email'),
			'telefono' => Input::get('telefono'),
			'blog' => $blog,
			'eventos' => $eventos,
			'promociones' => $promociones
		);

		$suscrito = true;

		if($suscribirse){
			$suscrito = $this->suscribirse($data);
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
		if($emailUsuario && $emailDc && $suscrito){
			$r->response = 'success';
		}
		else {
			$r->response = "fail";
		}
		
		return json_encode($r);
	}

	public function prueba($job, $data){
		File::append(storage_path() . "/logs/todo.csv", $data['message'] . "\n");
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