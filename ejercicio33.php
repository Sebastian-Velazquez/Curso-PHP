<?php
    //JSON.
    $jsonContenido='[
        {"nombre":"Sergio", "apellido":"Velazquez"},
        {"nombre":"Marisol", "apellido":"FLores"}
    ]';

    $resultado= json_decode($jsonContenido);
    print_r($resultado);

    foreach($resultado as $persona){
        print_r($persona->nombre." ".$persona->apellido."</br>");//la flecah quiere decir imprimir el nombre
    }
?>
