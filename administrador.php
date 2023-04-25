<?php
session_start();
$mysqli = include_once "conexion.php";
include_once "encabezadoAdmin.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title>Document</title>
</head>
<body>
    <?php

    $resul = $mysqli->query("SELECT username, email FROM users");
    $username = $resul->fetch_all(MYSQLI_ASSOC);
    ?>
    <div class="container">
    
   
 <h1>Opcions Posibles</h1>
  <div class="services">
    <div class="service">
      <i class="fa fa-globe"></i>
      <h4 class="title">Cercar Incidencia</h4>
        <a href="./cercarIncidenciaAdmin.php">
            <img src="images/cercarIncidencia.png" width="80px" height="110px" style="padding-top: 25px">
        </a>
    </div>

    <div class="service">
      <i class="fa fa-rocket"></i>
      <h4 class="title">Llistat</h4>
        <a href="./listarAdmin.php">
            <img src="images/listado.png" width="90px" height="130px" style="padding-top: 50px">
        </a>
    </div>

  </div>
</div>
</body>
</html>