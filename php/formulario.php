<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Web Mexican Labor Force';
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$numero = $_POST['numero'];
$ciudad = $_POST['ciudad'];
$estado = $_POST['estado'];
$mensaje = $_POST['mensaje'];
$contenido = 
"\nNombre: " . $nombre . 
"\nApellidos : " . $apellidos .
"\nCorreo: " . $email . 
"\nTelefono: " . $numero . 
"\nCiudad: " . $ciudad . 
"\nEstado: " . $estado . 
"\nMensaje: " . $mensaje;
    if (mail($destino, $asunto, $contenido))
    echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente.');</script>";
    echo "<script type='text/javascript'>window.location.href='https://www.mexicanlaborforce.com/';</script>";

?>
