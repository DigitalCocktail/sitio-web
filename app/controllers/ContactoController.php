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

}