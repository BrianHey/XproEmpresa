<?php

$nombre =   isset( $_POST['Nombre'] ) ? $_POST['Nombre'] : '';
$email  =   isset( $_POST['Correo'] ) ? $_POST['Correo'] : '';
$asunto = "Mensaje desde la Web";
$mensaje =  isset( $_POST['Mensaje'] ) ? $_POST['Mensaje'] : '';
$contenido = '
						<html>
						<head>
							<title></title>
						</head>
						<body>
							 <h2>Haz recibido un mensaje através de la página</h2>
							 <p>'.$nombre. ' te ha enviado el siguiente mensaje:</p>
							 <p>'.$mensaje. ' <br><br> Puedes ponerte en contacto con la persona al email: '.$email.'</p>
							 <hr>
							 
						</body>
						</html>';


// Configuración de los encabezados
$headers  = "Enviado desde: http://pruebasbrian.byethost7.com" . "\r\n" .
"CC: ". $email;

mail('brianhft20@gmail.com', $asunto, $contenido, $headers) or die (mysql_error();
// Enviar correo
$envio = mail('brianhft20@gmail.com', $asunto, $contenido, $headers) or die (mysql_error();


if($envio) {
$miresultado = '<p style="text-align:center;">¡Mensaje enviado! <br>Gracias por ponerse en contacto con nosotros</p>';
} else{

$miresultado = '<h4>No se envío el correo.</h4>';

}

echo $miresultado;


