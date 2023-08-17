<?php
    if($_POST){
        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];
        $suma= $valorA + $valorB;
        $resta= $valorA - $valorB;
        $division= $valorA / $valorB;
        $multiplicacion= $valorA * $valorB;
        echo "el resultado es: ".$suma;
        echo "el resultado es: ".$resta;
        echo "el resultado es: ".$division;
        echo "el resultado es: ".$multiplicacion;
        if($valorA==$valorB){
            echo "Son iguales";
            if($valorA==4){
                echo "ValorA es igaul a 4";
            }
            if($valorA==5){
                echo "ValorA es igual a 5";
            }
        }
        if(($valorA==$valorB) && ($valorA==4)){
            echo "El valor de A es igual a B y es 4";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio11.php" method="post">
        Valor A:
        <input type="text" name="valorA" id="">
        Valor B:
        <input type="text" name="valorB" id="">
        <input type="submit" value="Eviar">
    </form>
</body>
</html>