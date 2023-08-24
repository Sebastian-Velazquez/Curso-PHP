<?php
    class conexion{
        private $servidor="localhost";
        private $user="root";
        private $password;
        private $conexion;
        private $nameDataBase="album";

        public function __construct(){//establecer la conxion
            try {
                $this->conexion=new PDO("mysql:host=$this->servidor; dbname=$this->nameDataBase", $this->user, $this->password);
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $error) {
                return "falla de conexion".$error;
            }
        }
        //Insertar dato
        public function ejecutar($sql){
            $this->conexion->exec($sql);
            return $this->conexion->lastInsertID();
        }
        //leer- consultar datos
        public function consultar($sql){
            $sentencia= $this->conexion->prepare($sql);
            $sentencia->execute();
            return $sentencia->fetchAll();
        }
    }
?>