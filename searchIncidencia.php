<?php
$mysqli = include_once "conexion.php";
$id = $_GET["idInc"];
$desc =  $_GET["descripcio"];
$depar =  $_P["departament"];

$sentencia = $mysqli->prepare("SELECT idInc, descripcio, departament FROM INCIDENCIA WHERE idInc = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$resultado = $sentencia->get_result();
$incidencia = $resultado->fetch_assoc();
if ($incidencia) {
    echo "<th>ID</th> = $id";
    echo "<th>Descripcio</th> = $desc";
    echo "<th>Departament</th> = $depar";
    
}else {   
    //header("Location: error.html");
    echo '<br> error';
    
}

?>
