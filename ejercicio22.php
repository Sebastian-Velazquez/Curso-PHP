<?php
    //arreglos
    $frutas=array( "f"=> "Fruta",
                    "m"=>"Manzana",
                    "p"=>"Pera");
    print_r(($frutas));

    echo $frutas["f"];
    echo "</br>";

    foreach($frutas as $i=>$valor){//de nombre aray frutas dgo que indice=>valor
        echo "El valor:".$valor." El Indice: ".$i."</br>";
    }
?>