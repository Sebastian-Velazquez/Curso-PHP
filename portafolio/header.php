<?php
    session_start();
    if(isset($_SESSION['usuario'])!='admin'){
        header("location:login.php");
    }
    print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="contaner">
        <a href="index.php">Inicio</a>
        <a href="portafolio.php">Portafolio</a>
        <a href="logout.php">Crerrar</a>

    </div>
