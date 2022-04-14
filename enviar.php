<?php

    $destino    =   "rolcena@hotmail.com";
    $nombre     =   $_POST["name"];
    $correo     =   $_POST["email"];
    $mensaje    =   $_POST["message"];
    $contenido  =   "Nombre: " . $nombre . "\nCorreo: " . $correo . "\Mensaje: " . $mensaje;

    mail($destino,"Contacto via ROLCENA.GA", $contenido);  

?>