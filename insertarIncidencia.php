<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>

<?php
include_once "encabezado.php";
$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("SELECT descripcio, departament FROM INCIDENCIA");
?>
<body>
    
<h1>INSERTA UNA INCIDENCIA</h1>
<div class="grid">
    
    <div class="container-grid">
        <h2>Selecciona un departament</h2>
        <h2>Descripcio</h2>
    </div>
    <div class="depar_desc">
        <form action="insertar.php" method="post">
        <select name="departament" id="departament">
            <option value="CAT" placeholder="selecciona">Catala</option>
            <option value="CIE">Ciencies</option>
            <option value="HIS">Historia</option>
            <option value="MAT">Matematiques</option>
        </select>
        <div class="desc">
            <textarea name="descripcio" rows="4" cols="50"></textarea>
            <input type="submit">
        </div>
        </form>
    </div>
</div>

</body>
</html>
