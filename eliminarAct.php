<?php
$mysqli = include_once "conexion.php";
$id = $_GET["id"];
$idAct = $_GET["idAct"];
$result = $mysqli->query("SELECT idAct, data, descripcio, visible, incidencia, temps FROM ACTUACIO");
$ACTUACIO = $result->fetch_all(MYSQLI_ASSOC);

$sentencia = $mysqli->prepare("DELETE FROM ACTUACIO WHERE idAct = ? AND incidencia = ?");
$sentencia->bind_param("ii", $idAct, $id);

if ($sentencia->execute()) {
    header("Location: searchIncidenciaAdmin.php");
    exit();
} else {
    echo "Error deleting record: " . $mysqli->error;
}

$sentencia->close();
$mysqli->close();
?>