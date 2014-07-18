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

	public static function get_src_first_image($content){
	    preg_match('/<img.+src=[\'"](?P<src>.+)[\'"].*>/i', $content, $image);
	    if(empty($image)){
	        return null;
	    }
	    else{
			preg_match( '@src="([^"]+)"@' , $image[0], $match );
			$src = array_pop($match);    	
	        return $src;
	    }
	}	
}