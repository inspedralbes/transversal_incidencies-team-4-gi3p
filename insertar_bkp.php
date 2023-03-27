<?php
$host = "localhost";
$usuario = "a21rublormar_bd";
$contrasenia = "0320Rlm03";
$base_de_datos = "a21rublormar_INCIDENCIA";

$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$departament = $_POST["departament"];
$descripcio = $_POST["descripcio"];

$sentencia = $mysqli->prepare("INSERT INTO a21rublormar_INCIDENCIA
(departament, descripcio)
VALUES
(?, ?)");
$sentencia->bind_param("ss", $departament, $descripcio);
$sentencia->execute();
header("Location: index.html");
?>