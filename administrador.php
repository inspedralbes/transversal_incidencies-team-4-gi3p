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
    <title>Document</title>
</head>
<body>
    <?php

    $resul = $mysqli->query("SELECT username, email FROM users");
    $username = $resul->fetch_all(MYSQLI_ASSOC);
    ?>
    <nav class="menu">
        <div class="logo"> 
            <span class="logo" style="justify-content: center; padding: 10px">
                <a href="adminPanel.php" class="return-index" style="text-decoration: none"></a>
                <img src="images/campus.png" alt="Incidencies Pedralbes">    
            </span>
            <span style="font-size: 20px; padding: 5px"><?php 
                        echo "( ";
                        echo $_SESSION["username"];
                        //echo $_SESSION["id"];
                        echo " )"
                        ?>
            </span>
            <a class="item" href="./index.php">Inici</a>
            <a class="item" href="./listarAdmin.php">Llistat</a>
            <a class="item" href="./cercarIncidencia.php">Cercar</a>
            <a class="item" href="./logout.php">Logout</a>
        </div>
    </nav>
</body>
</html>