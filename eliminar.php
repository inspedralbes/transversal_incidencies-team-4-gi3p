<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">  
    <title>Document</title>
</head>
<body>
  
</body>
</html>

<?php 
include_once "encabezado.php"; 
$mysqli = include_once "conexion.php";
$result = $mysqli->query("SELECT idInc, descripcio, departament FROM INCIDENCIA");
$INCIDENCIA = $resultado->fetch_all(MYSQLI_ASSOC)
?>
<?php
$id = $_GET["idInc"];
$sentencia = $mysqli->prepare("DELETE FROM INCIDENCIA WHERE idInc = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
header("Location: listarAdmin.php");
?>
