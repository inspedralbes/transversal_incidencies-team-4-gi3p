<?php
$mysqli = include_once "conexion.php";
$id = $_GET["idInc"];
$result = $mysqli->query("SELECT idInc, descripcio, departament FROM INCIDENCIA");
$INCIDENCIA = $result->fetch_all(MYSQLI_ASSOC);

$sentencia = $mysqli->prepare("DELETE FROM INCIDENCIA WHERE idInc = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
header("Location: listarAdmin.php");
?>
