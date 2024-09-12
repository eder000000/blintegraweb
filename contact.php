<?php

if(isset($_POST['email']) && $_POST['email'] !='') {
	
	$userName 		= $_POST['name'];
	$userEmail	 	= $_POST['email'];
    $userPhone      = $_POST['phone'];
    $userSubject 	= $_POST['subject'];
	$userMessage 		= $_POST['message'];

	$to 			= "informacion@blintegra.com";
	$subject 		= "Asunto";
	$body 			= "Informacion enviada:";

    $headers 		= 'Forma de contacto. Blintegra.com <informacion@blintegra.com>' . "\r\n" .
                      'Reply-To: informacion@blintegra.com' . "\r\n" .
                      'X-Mailer: PHP/' . phpversion();

	$body .= "\r\n Nombre: " . $userName;
	$body .= "\r\n Correo Electronico: " . $userEmail;
    $body .= "\r\n Número de contacto: " . $userPhone;
    $body .= "\r\n Asunto: " . $userSubject;
	$body .= "\r\n Mensaje: " . $userMessage;

	mail($to, $subject, $body, $headers );
	header("Location: index.html#contact");
}
?>