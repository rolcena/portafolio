<?php

    $destino    =   "rolcena@hotmail.com";
    $nombre     =   $_POST["nombre"];
    $correo     =   $_POST["correo"];
    $mensaje    =   $_POST["mensaje"];
    $contenido  =   "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;

    mail($destino,"Contacto via ROLCENA.GA", $contenido);  
    header("Location:index.html")
?>