<?php
    $frutas=array("fresa","Pera","manzana");
    print_r($frutas);
    echo "</br>";
    print_r($frutas[2])."</br>";
    echo "</br>";

    for($i=0; $i<3;$i++){
        print_r($frutas[$i]."</br>");
    }
?>