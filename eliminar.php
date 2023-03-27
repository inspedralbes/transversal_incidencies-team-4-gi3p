<?php include_once "encabezado.php"; ?>
<?php
$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("SELECT idInc, descripcio, departament FROM INCIDENCIA");
$INCIDENCIA = $resultado->fetch_all(MYSQLI_ASSOC)
?>
<?php
$id = $_GET["idInc"];
$sentencia = $mysqli->prepare("DELETE FROM INCIDENCIA WHERE idInc = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
header("Location: listar.php");
?>