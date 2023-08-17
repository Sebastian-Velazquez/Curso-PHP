<?php
    if($_POST){
        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];
        if($valorA > $valorB){
            echo "el valor mayor es ".$valorA;
        }else{
            echo "el valor meyor es ".$valorB;
        }
        if($valorA == $valorB){
            echo "el valores son iguales";

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
    <form action="ejercicio9.php" method="post">
        Valor A:
        <input type="text" name="valorA" id="">
        Valor B:
        <input type="text" name="valorB" id="">
        <input type="submit" value="Eviar">
    </form>
</body>
</html>