<?php 

class Util {

	public static function getServicio($slug){
		switch ($slug) {
			case 'ed':
				$servicio = "Estrategia Digital";
				break;
			case 'dw':
				$servicio = "Desarrollo Web";
				break;
			case 'cd':
				$servicio = "Consultoría Digital";
				break;		
			case 'em':
				$servicio = "E-mail Marketing";
				break;
			case 'co':
				$servicio = "Contenidos Digitales";
				break;	
			case 'rs':
				$servicio = "Redes Sociales";
				break;
			case 'se':
				$servicio = "SEO (Posicionamiento en Buscadores)";
				break;																		
			case 'po':
				$servicio = "Publicidad Online";
				break;
			case 'aw':
				$servicio = "Analítica Web";
				break;							
			default:
				$servicio = "Apps en la Nube";
				break;
		}		
		return $servicio;
	}
}