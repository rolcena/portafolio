<?php

    $destino    =   "rolcena@hotmail.com";
    $nombre     =   $_POST["nombre"];
    $correo     =   $_POST["correo"];
    $mensaje    =   $_POST["mensaje"];
    $asunto     =   $_POST["asunto"];
    $contenido  =   "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje . "\nAsunto: " . $asunto;

    mail($destino,$asunto, $contenido);  
    header("Location:index.html");
?>