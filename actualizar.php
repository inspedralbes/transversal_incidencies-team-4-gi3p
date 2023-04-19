<?php
$mysqli = include_once "conexion.php";

$id = $_POST["idInc"];
$tec = $_POST["tecnic"];
$prioritat = $_POST["prioritat"];
$tipus = $_POST["tipus"];
    $sentencia = $mysqli->prepare("UPDATE INCIDENCIA SET prioritat = ?, tipus = ?, tecnic = ? WHERE idInc = ?");
    $sentencia->bind_param("isii",$id, $prioritat, $tipus, $tec);
    $sentencia->execute();
    header("Location: listarAdmin.php");
     
    ?>