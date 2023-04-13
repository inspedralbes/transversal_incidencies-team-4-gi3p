<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>

<body>
<?php
include_once "encabezado.php";
$host = "localhost";
$usuario = "a21rublormar_bd";
$contrasenia = "0320Rlm03";
$base_de_datos = "a21rublormar_INCIDENCIES";

$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

    $descripcio = $_POST["descripcio"];   
    $departament = $_POST["departament"];
    echo($descripcio);
    echo($departament);       

    $sentencia = $mysqli->prepare("INSERT INTO INCIDENCIA
    (descripcio,   departament)
    VALUES
    (?,  ?)");
    $sentencia->bind_param("ss", $descripcio, $departament);
    $sentencia->execute();
    //header("Location: index.html");
    ?>

</body>
</html>
