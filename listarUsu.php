
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Llistat Incidencies</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<?php
$mysqli = include_once "encabezado.php";
$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("SELECT idInc, descripcio, DATE(data) as data, departament FROM INCIDENCIA");
?>

<h1>Llistat D'incidencies</h1>
<div class="grid">
    <div class="container-grid">
        <span class="id">ID</span>
        <span class="depar">Departament</span>
        <span class="desc">Descripció</span>
        <span class="data">Data</span>
    </div>

    <?php 
    foreach($resultado as $fila) { ?>
    <div class="incidencies">
        <span class="id"><?php echo $fila["idInc"] ?></span>
        <span class="depar"><?php echo $fila["departament"] ?></span>
        <span class="desc"><?php echo $fila["descripcio"] ?></span>
        <span class="data"><?php echo $fila["data"] ?></span>
        
    </div>
    </a> 
    <?php } ?>

</div>

</body>
</html>



                

