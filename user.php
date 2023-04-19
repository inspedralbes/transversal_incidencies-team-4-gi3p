<?php
session_start();
$mysqli = include_once "conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/administrador.css">
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
      <h4 class="title">Insertar Incidencia</h4>
        <a href="./insertarIncidencia.php">
            <img src="images/insertar.png" width="80px" height="130px" style="padding-top: 45px">
        </a>
    </div>

    <div class="service">
      <h4 class="title">Llistat</h4>
        <a href="./listarUsu.php">
            <img src="images/listado.png" width="90px" height="160px" style="padding-top: 70px">
        </a>
    </div>

    <div class="service">
      <h4 class="title">Consultar Incidencia</h4>
        <a href="./cercarIncidencia.php">
            <img src="images/cercarIncidencia.png" width="85px" height="130px" style="padding-top: 50px">
        </a>
    </div>

  </div>
</div>
</body>
</html>