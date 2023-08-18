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

$objetoAlumno = new persona();//instancia
$objetoAlumno->asignarNombre("Sebastian");

$objetoAlumno2 = new persona();//instancia
$objetoAlumno2->asignarNombre("Sergio");
$objetoAlumno2->imprimirNomre();

echo $objetoAlumno->nombre;
echo $objetoAlumno2->nombre;
echo $objetoAlumno2->mostrarEdad();

?>