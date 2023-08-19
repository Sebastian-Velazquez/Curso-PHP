<?php
   //clases
    class persona{

    public $nombre;
    private $edad;//solo en la clase
    protected $altura;//solo se puede acceser desde la misma clase y clases heredadas
    
    public function asignarNombre($nuevoNOmbre){
        $this->nombre=$nuevoNOmbre;
    }
    
    public function imprimirNomre(){
    echo "Hola soy ".$this->nombre;
    }

    public function mostrarEdad(){
        $this->edad=20;
        return $this->edad;
    }
}

class trabajador extends persona{ //es una clase nueva heredara dew clase persona linea 3
    
    public $puesto;// propiedad nueva
    
    public function presentarComoTrabajador(){
        echo "HOla soy ".$this->nombre." y sou un ".$this->puesto;
    }
}

$objetoTrabajador = new trabajador();//instancia
$objetoTrabajador->asignarNombre("Sebastian");
$objetoTrabajador->puesto="Profesor";

$objetoTrabajador->presentarComoTrabajador();
?>