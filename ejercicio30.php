<?php 
    session_start();

    $_SESSION["user"]="deloteca";
    $_SESSION["estatus"]="logueado";

    echo "Sesión iniciada".":</br>";
    echo "Usuario: ".$_SESSION["user"]." estatus: ".$_SESSION["estatus"];
?>