<?php

    $destino    =   "rolcena@hotmail.com";
    $nombre     =   $_POST["nombre"];
    $correo     =   $_POST["correo"];
    $mensaje    =   $_POST["mensaje"];
    $asunto     =   $_POST["asunto"];
    $contenido  =   "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje . "\nAsunto: " . $asunto;

    $resultado = mail($destino,$asunto, $contenido);  
    if ($resultado) {
        echo "El correo fue enviado";
    } else {
        echo "El correo no fue enviado";
    }
?>