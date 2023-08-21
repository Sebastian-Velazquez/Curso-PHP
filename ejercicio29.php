<?php //leer en la BD
    // conexión a la base de datos
    $server = "localhost";//127.0.0.1
    $user = "root";
    $password = "";

    try {
        // cadena de conexión
        $conexion = new PDO("mysql:host=$server;dbname=album", $user, $password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // consulta SQL para insertar un nuevo registro en la tabla `fotos`
        $sql="SELECT * FROM `fotos`";
        $sentencia=$conexion->prepare($sql);
        $sentencia->execute();

        $resultado=$sentencia->fetchAll(); 

        print_r($resultado);//fotma de mostrar
        
        foreach($resultado as $foto){//FORMA DE MOSTRA
            print_r($foto['nombre']);
        }
        echo "Conexión establecida y registro insertado.";
    } catch (PDOException $error) {
        echo "Conexión fallida: " . $error->getMessage();
    }
?>