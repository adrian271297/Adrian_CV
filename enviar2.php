<?php

$destino = 'adrian271297@gmail.com';
$nombre = $_Post['name'];
$correo = $_Post['email'];
$mensaje = $_Post['messaje'];

$contenido="Nombre:" . $nombre . "\nCorreo:". $correo" . \nMensaje:" .$mensaje:

mail($destino, "Contacto_desde_CV",$contenido);

header("Location:index.html");
?>