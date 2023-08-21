<?php
    //metodos estaticos
    class UnaClase{
        public static function unMetodo(){
            echo "Hola soy un método estatico";
        }
    }

    $objeto=new UnaClase();
    $objeto->unMetodo();

    UnaClase::unMetodo(); //accediento al metodo estatico. Se encueta en Orm
?>