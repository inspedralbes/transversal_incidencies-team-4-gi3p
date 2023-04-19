<?php
$mysqli = include_once "conexion.php";

$descripcio = $_POST["descripcio"];
$incidencia = $_POST["idInc"];
$temps = $_POST["temps"];  
$sentencia = $mysqli->prepare("INSERT INTO `ACTUACIO` (`descripcio`, `visible`,`incidencia`, `temps`) VALUES (?, ?, ?, ?)");

$sentencia->bind_param("siii", $descripcio, $visible, $incidencia, $temps);
$sentencia->execute();
echo($descripcio);
echo($visible);
echo($incidencia);
echo($temps);
//header("Location: listarActuacio.php?idInc=$incidencia");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    a
</body>
</html>
