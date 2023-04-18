<?php
$host = "localhost";
$usuario = "a21rublormar_bd";
$contrasenia = "0320Rlm03";
$base_de_datos = "a21rublormar_INCIDENCIES";

$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;
?>
