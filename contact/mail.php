<?php

$email_destination = 'tsolutions17@gmail.com';
$message = wordwrap($_POST['message'], 70, "\r\n");
$full_name = $_POST['firstname'] . ' ' . $_POST['lastname'];

$content = '
	<html>
	<body>
	<h4>Nombre:</h4> ' . $full_name . '<br>
	<h4>Email:</h4> ' . $_POST['email'] . '<br><br>
	<h4>Consulta:</h4> ' . $message .
	'</body></html>';

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras .= 'From: ' . $full_name . ' <' . $_POST['email'] . '>' . "\r\n";

mail($email_destination, 'Consulta Vision Website', $content, $cabeceras);
header('Location: ../');

?>