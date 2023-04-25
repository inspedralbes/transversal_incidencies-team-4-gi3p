<?php
$mysqli = include_once "conexion.php";
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
if(isset($_POST["dataFi"])){
    $id = $_GET["id"];
    $date = $_POST["dataFi"];
    
    $senten = $mysqli->prepare("UPDATE INCIDENCIA SET dataFi = CURRENT_DATE WHERE idInc = ?");
    $senten->bind_param("si", $date, $id);
    
    if ($senten->execute()) {
        //header("Location: searchIncidenciaAdmin.php");
        exit();
    } else {
        echo "Error updating record: " . $mysqli->error;
    }
}

$senten->close();
$mysqli->close();
?>