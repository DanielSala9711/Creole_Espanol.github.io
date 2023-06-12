<?php
$host = 'us-east.connect.psdb.cloud';
$username = 'z08ns77noodbjw2887ad';
$password = 'pscale_pw_xsD7treJKxs7JreIwgykoKZvgeyOl507qsO9uzLKQNH';
$database = 'espcreo';

// Crear una conexión
$connection = new mysqli($host, $username, $password, $database);

// Verificar si la conexión fue exitosa
if ($connection->connect_error) {
    die("Error de conexión: " . $connection->connect_error);
}

echo "Conexión exitosa a la base de datos.";

// Cerrar la conexión
$connection->close();
?>

