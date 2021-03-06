<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Facebook sharing information tags -->
        <meta property="og:title" content="*|MC:SUBJECT|*">
        <title>*|MC:SUBJECT|*</title>
	</head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="-webkit-text-size-adjust: none;margin: 0;padding: 0;background-color: #FAFAFA;width: 100% !important;">
    	<center>
        	<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="backgroundTable" style="margin: 0;padding: 0;background-color: #FAFAFA;height: 100% !important;width: 100% !important;">
            	<tr>
                	<td align="center" valign="top" style="padding-top: 20px;border-collapse: collapse;">
                    	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer" style="border: 1px solid #DDDDDD;background-color: #FFFFFF;">
                        	<tr>
                            	<td align="center" valign="top" style="border-collapse: collapse;">
                                    <!-- // Begin Template Header \\ -->
                                	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateHeader" style="background-color: #FFFFFF;border-bottom: 0;">
                                        <tr>
                                            <td class="headerContent" style="border-collapse: collapse;color: #202020;font-family: Arial;font-size: 34px;font-weight: bold;line-height: 100%;padding: 0;text-align: center;vertical-align: middle;">
                                            
                                            	<!-- // Begin Module: Standard Header Image \\ -->
                                            	<img src="{{ url('/assets/images/logo-digital-cocktail-horizontal.png') }}" style="max-width: 600px;border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;" id="headerImage campaign-icon" mc:label="header_image" mc:edit="header_image" mc:allowdesigner mc:allowtext>
                                            	<!-- // End Module: Standard Header Image \\ -->
                                            
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // End Template Header \\ -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align="center" valign="top" style="border-collapse: collapse;">
                                    <!-- // Begin Template Body \\ -->
                                	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateBody">
                                    	<tr>
                                            <td valign="top" style="border-collapse: collapse;">
                                
                                                <!-- // Begin Module: Standard Content \\ -->
                                                <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td valign="top" class="bodyContent" style="border-collapse: collapse;background-color: #FFFFFF;">
                                                            <div mc:edit="std_content00" style="color: #505050;font-family: Arial;font-size: 14px;line-height: 150%;text-align: left;">
                                                                <h4 class="h4" style="color: #202020;display: block;font-family: Arial;font-size: 22px;font-weight: bold;line-height: 100%;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;"><small>Hola, </small>{{ $nameTo }}</h4>
                                                                @if($servicio != 'Sólo quiero saludar')
                                                                Gracias por tu interés en nuestro servicio
                                                                <strong>{{ $servicio }}</strong>, 
                                                                @else
                                                                Gracias por contactarnos, 
                                                                @endif
                                                                nuestro equipo de trabajo ya está al tanto y nos comunicaremos contigo lo antes posible.
                                                                <br><br>
                                                                El mensaje que nos enviaste fue: "{{ $mensaje }}"
                                                                <br><br>
                                                                Usaremos los datos que nos suministraste para comunicarnos contigo<br/>
                                                                <strong>Email:</strong> {{ $to }}<br/>
                                                                <strong>Teléfono:</strong> {{ $telefono }}
                                                            </div>
														</td>
                                                    </tr>
                                                </table>
                                                <!-- // End Module: Standard Content \\ -->
                                                
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // End Template Body \\ -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align="center" valign="top" style="border-collapse: collapse;">
                                    <!-- // Begin Template Footer \\ -->
                                	<table border="0" cellpadding="10" cellspacing="0" width="600" id="templateFooter" style="background-color: #FFFFFF;border-top: 0;">
                                    	<tr>
                                        	<td valign="top" class="footerContent" style="border-collapse: collapse;">
                                            
                                                <!-- // Begin Module: Transactional Footer \\ -->
                                                <table border="0" cellpadding="10" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td valign="top" style="border-collapse: collapse;">
                                                            <div mc:edit="std_footer" style="color: #707070;font-family: Arial;font-size: 12px;line-height: 125%;text-align: center;">
																<em>Copyright &copy; {{ date('Y') }} Digtial Cocktail SAS, All rights reserved.</em>
																<br>
																Este E-mail lo enviamos porque hiciste un contacto en nuestra sitio web. 
																<br/><br/>
																<small>Al dejarnos tus datos en nuestro sitio web nos indicas que estás de acuerdo con nuestra <a href="#">Política de manejo de datos</a>. Puedes gestionar la información que almacenamos de tí haciendo <a href="#">clic aquí</a></small>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- // End Module: Transactional Footer \\ -->
                                            
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // End Template Footer \\ -->
                                </td>
                            </tr>
                        </table>
                        <br>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>