<?php
$host = "localhost";
$usuario = "a21rublormar_bd";
$contrasenia = "0320Rlm03";
$base_de_datos = "a21rublormar_INCIDENCIES";

$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

/*  RECUPERO 3 + 1 CAMPOS DEL FORMULARIO ANTERIOR (prioridad, tipo ,tecnico) + el id ...
y con todo ello hago un update */
    $id = $_POST["idInc"];
    $priori = $_POST["prioritat"];
    $tipe = $_POST["tipus"];
    $tecnic = $_POST["tecnic"];
    
    $sentencia = $mysqli->prepare("UPDATE INCIDENCIA SET prioritat = ?, tipus = ?, tecnic = ? WHERE idInc = ?");
    $sentencia->bind_param("siii", $priori, $tipe, $tecnic, $id);
    $sentencia->execute();
    header("Location: listar.php");
     
    ?>