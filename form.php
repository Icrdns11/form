<?php

$nombre = $_POST{'name'};
$mail = $_POST{'email'};
$mensaje = $_POST{'message'};

$mensaje = "Este mensaje fue enviado por" . $nombre . ",\r\n";
$mensaje = "El email es" . $mail . "\r\n";
$mensaje = "Mensaje: " . $_POST['mensaje'] . "\r\n";
$mensaje = "Fue enviado el " . date('d/m/Y', time());

$para = 'ignaciocrnob@gmail.com'
$asunto = 'Para Graficars'

mail ($para, $asunto, utf8_decode($mensaje), $header);
header ('Location:index.html')

?>
