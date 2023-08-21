<?php
// conexión a la base de datos
$server = "localhost";//127.0.0.1
$user = "root";
$password = "";

try {
    // cadena de conexión
    $conexion = new PDO("mysql:host=$server;dbname=album", $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // consulta SQL para insertar un nuevo registro en la tabla `fotos`
    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'photo_one', 'foto.jpg')";
    $conexion->exec($sql);

    echo "Conexión establecida y registro insertado.";
} catch (PDOException $error) {
    echo "Conexión fallida: " . $error->getMessage();
}
?>