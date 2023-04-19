<!DOCTYPE html>
<html lang="en">
<head>
  <title>Llistat Incidencies</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/estilos.css">

  <script>
        function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
        }

        window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
            }
        }
        }
</script>
</head>
<body>
<?php
include_once "encabezado.php";
$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("SELECT INCIDENCIA.* , idInc, descripcio, prioritat, DEPARTAMENT.depart, TIPOLOGIA.tip, TECNIC.tecn, DATE(data) as data FROM INCIDENCIA LEFT JOIN TECNIC ON TECNIC.idTec=INCIDENCIA.tecnic LEFT JOIN DEPARTAMENT ON DEPARTAMENT.idDep=INCIDENCIA.departament LEFT JOIN TIPOLOGIA ON TIPOLOGIA.idTip=INCIDENCIA.tipus");
$INCIDENCIA = $resultado->fetch_all(MYSQLI_ASSOC);
?>

<h1>Llistat D'incidencies</h1>
<div class="grid">
    <div class="container-grid-admin">
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
    foreach($INCIDENCIA as $INCIDENCIA) { ?>
    
    <div class="incidencies-admin"> 
        <span class="id"><?php echo $INCIDENCIA["idInc"] ?></span>
        <span class="depar"><?php echo $INCIDENCIA["depart"] ?></span>
        <span class="desc"><?php echo $INCIDENCIA["descripcio"] ?></span>
        <span class="data"><?php echo $INCIDENCIA["data"] ?></span>
        <span class="priori"><?php echo $INCIDENCIA["prioritat"] ?></span>
        <span class="tipus"><?php echo $INCIDENCIA["tip"] ?></span>
        <span class="tecn"><?php echo $INCIDENCIA["tecn"] ?></span>
        <a href="./eliminar.php?idInc=<?php echo $INCIDENCIA["idInc"] ?>" class="btn-3d-can"><span>Delete</span></a>
        <a href="./editarIncidencia.php?idInc=<?php echo $INCIDENCIA["idInc"] ?>" class="btn-3d-sub"><span>Editar</span></a>
            
        

        
    </div>
    <?php } ?>

</div>


</body>
</html>



                

