<?php
//Abrindo un archivo para ver el contenido
    $archivo="contenido.txt";//tenemos el archivo
    $archivoAbierto=fopen($archivo,"r");//abrimos el archivo modo lectura
    $contenido=fread($archivoAbierto,filesize($archivo));//leyendo el archivo
    echo $contenido
?>

