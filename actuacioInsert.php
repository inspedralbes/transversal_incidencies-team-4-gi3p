<?php
$mysqli = include_once "conexion.php";

$descripcio = $_POST["descripcio"];
$incidencia = $_POST["idInc"];
$temps = $_POST["temps"];  
$visibilitat = $_POST["visible"]; 
$sentencia = $mysqli->prepare("INSERT INTO `ACTUACIO` (`descripcio`, `visible`,`incidencia`, `temps`) VALUES (?, ?, ?, ?)");

$sentencia->bind_param("siii", $descripcio, $visibilitat, $incidencia, $temps);
$sentencia->execute();
header("Location: listarActuacioAdmin.php?id=$incidencia");

?>

