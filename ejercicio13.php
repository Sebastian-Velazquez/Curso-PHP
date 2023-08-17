<?php
    if($_POST){
        $botom=$_POST['btnValor'];
        switch($botom){
            case 1:
                echo "Prosionón el botón 1";
                break;
            case 2:
                echo "Prosionón el botón 2";
                break;
            case 3:
                echo "Prosionón el botón 3";
                break;
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
    <form action="ejercicio13.php" method="post">
        <input type="submit" name="btnValor" value="1">
        <input type="submit" name="btnValor" value="2">
        <input type="submit" name="btnValor" value="3">
    </form>
</body>
</html>