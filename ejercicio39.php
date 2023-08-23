<?php
//crear un archivo
    $nombreArchivo="archivo.txt";
    $contenidoArchivo="Hello, Greeting";
    $archivoCrear=fopen($nombreArchivo,"w");
    fwrite($archivoCrear,$contenidoArchivo);
    fclose($archivoCrear);
?>

