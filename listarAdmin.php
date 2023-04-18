
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
$resultado = $mysqli->query("SELECT INCIDENCIA.* , idInc, descripcio, prioritat, DEPARTAMENT.depart, TIPOLOGIA.tip, TECNIC.tecn, DATE(data) as data FROM INCIDENCIA LEFT JOIN TECNIC ON TECNIC.idTec=INCIDENCIA.tecnic LEFT JOIN DEPARTAMENT ON DEPARTAMENT.idDep=INCIDENCIA.departament LEFT JOIN TIPOLOGIA ON TIPOLOGIA.idTip=INCIDENCIA.tipus");

?>




<h1>Llistat D'incidencies</h1>
<div class="grid">
    <div class="container-grid">
        <span class="id">ID</span>
        <span class="depar">Departament</span>
        <span class="desc">Descripció</span>
        <span class="data">Fecha</span>
        <span class="priori">Prioritat</span>
        <span class="tipus">Tipus</span>
        <span class="tecn">Tecnic</span>
        <span class="op">Opcions</span>
    </div>

    <?php 
    foreach($resultado as $fila) { ?>
    
    <div class="incidencies-admin"> 
        <span class="id"><?php echo $fila["idInc"] ?></span>
        <span class="depar"><?php echo $fila["depart"] ?></span>
        <span class="desc"><?php echo $fila["descripcio"] ?></span>
        <span class="data"><?php echo $fila["data"] ?></span>
        <span class="priori"><?php echo $fila["prioritat"] ?></span>
        <span class="tipus"><?php echo $fila["tip"] ?></span>
        <span class="tecn"><?php echo $fila["tecn"] ?></span>
        
        <button class="actualitzar">
        <a href="./editarIncidencia.php?idInc=<?php echo $fila["idInc"] ?>">Actualitzar</a>
        </button>
        <button class="eliminar">
            <a href="./eliminar.php?idInc=<?php echo $fila["idInc"] ?>">Eliminar </a>
        </button>
        
    </div>
    <?php } ?>

</div>

</body>
</html>



                

