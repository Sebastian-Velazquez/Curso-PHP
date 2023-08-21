<?php 
    session_start();//esta la sessionj esta en el ejercicio30
    if(isset($_SESSION["user"])){
        echo "Usuario: ".$_SESSION["user"]." estatus: ".$_SESSION["estatus"];
    }else{
        echo "no hay Usuario logueado";
    }
?>