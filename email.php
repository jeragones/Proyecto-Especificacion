<?php
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: sender@sender.com' . "\r\n";

if (isset($_POST['submit'])) {
	$mensaje = $_POST['mensaje'];
	mail("fabri10.se@gmail.com","test subject",$mensaje,$headers);
} else {
	echo "No se pudo enviar el correo";
}
?>