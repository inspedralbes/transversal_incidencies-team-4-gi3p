<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>
<body>
    


<?php
include_once "encabezado.php";
$mysqli = include_once "conexion.php";
$id = $_GET["idInc"];
$sentencia = $mysqli->prepare("SELECT idInc, DATE(data) as data,prioritat, descripcio, tipus, tecnic, departament FROM INCIDENCIA WHERE idInc = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$result = $sentencia->get_result();
# Obtenemos solo una fila, que será l'incidencia a editar
$INCIDENCIA = $result->fetch_assoc();
if (!$INCIDENCIA) {
    exit("No hi ha resultats per aquest id");
}
?>


<h1>INCIDENCIA: </h1>
<div class="grid">
    <div class="container-grid"> 
        <span class="id">ID</span>
        <span class="depar">Departament</span>
        <span class="desc">Descripció</span>
        <span class="data">Fecha</span>
    
        <td><p><?php echo $INCIDENCIA["idInc"]; ?> </p></td>
        <td><p><?php echo $INCIDENCIA["departament"]; ?> </p></td>
        <td><p><?php echo $INCIDENCIA["descripcio"]; ?> </p></td>
        <td><p><?php echo $INCIDENCIA["data"]; ?> </p></td>
        </div>

  <div class="edit-group">
  <form action="actualizar.php" method="post">   
      
  <input type="hidden" name="idInc" value="<?php echo $INCIDENCIA["idInc"]; ?>">
            <h2>ACTUALITZACIÓ INCIDENCIA</h2>
            <label for="prioritat">Prioritat:</label>
            <select name="prioritat" >
            <option value="selectPrio"> - Selecciona prioritat - </option>
            <option value="ALTA">ALTA</option>
            <option value="MEDIA">MEDIA</option>
            <option value="BAIXA">BAIXA</option>
                
            </select>

            <label for="tipus">Tipus:</label>
            <select name="tipus" >
            <option value="tipus"> - Selecciona tipus - </option>
            <option value="1">Hardware</option>
            <option value="2">Electric</option>
            <option value="3">Software</option>
            
            </select>

            <label for="tecnic">Tecnic:</label>
            <select name="tecnic" >
            <option value="selectTec"> - Selecciona tecnic - </option>
            <option value="1">Toni Diaz</option>
            <option value="2">Alvaro Perez</option>
            <option value="3">Ermengol Ebotà</option>
            
            </select><br>
                <button class="btn btn-success" href="listar.php">Guardar</button>
                <button class="btn btn-warning" href="listar.php">Tornar</button>
        </div>

        </form>
    </div>
</div>
</body>
</html>
