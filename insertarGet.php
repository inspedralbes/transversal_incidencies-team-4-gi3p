<?php
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$descripcio = $_GET["descripcio"];
$departament = $_GET["departament"];

$sentencia = $mysqli->prepare("INSERT INTO INCIDENCIES
(descripcio, departament)
VALUES
(?, ?)");
$sentencia->bind_param("ss", $descripcio, $departament);
$sentencia->execute();
header("Location: index.html");
?>
