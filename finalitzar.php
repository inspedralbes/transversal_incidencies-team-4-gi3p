<?php
$id = $_GET["idInc"];
$sentencia = $mysqli ->prepare["UPDATE INCIDENCIA SET dataFi = CURRENT_DATE WHERE idInc = ?"];
$sentencia ->bind_param("i", $id);
$sentencia ->execute();
header("Location: listarAdmin.php");
?>