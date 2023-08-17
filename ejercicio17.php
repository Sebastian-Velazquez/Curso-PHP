<?php
    function imprimirNombre($nombre, $apellido=""){//para no ponerle un apellido
        echo "Hola ".$nombre." ".$apellido."</br>";
    }
    //llamar a la función
    imprimirNombre("Sebastian");
    imprimirNombre("Sergio","Velazquez");
?>