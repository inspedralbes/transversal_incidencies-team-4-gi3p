<?php
$mysqli = include_once "conexion.php";

    $descripcio = $_POST["descripcio"];   
    $departament = $_POST["departament"];

    $sentencia = $mysqli->prepare("INSERT INTO INCIDENCIA
    (descripcio,   departament)
    VALUES
    (?,  ?)");
    $sentencia->bind_param("ss", $descripcio, $departament);
    $sentencia->execute();
    header("Location: saved.html");


    ?>

