<?php

session_start();
$servername = "172.24.16.223";
$username = "macshool";
$password = "mac05";
$database = "DB_PROJECTE";

// Crear conexión
$connection = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($connection->connect_error) {
    header("Location: mantenimiento.html");
}
?>

