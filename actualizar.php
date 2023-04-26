<?php
include_once "encabezadoAdmin.php";
$mysqli = include_once "conexion.php";

if(isset($_POST["prioritat"]) && isset($_POST["tipus"]) && isset($_POST["tecnic"]) && isset($_GET["idInc"])) {
    $id = $_GET["idInc"];
    $prioritat = $_POST["prioritat"];
    $tipus = $_POST["tipus"];
    $tecnic = $_POST["tecnic"];

    $stmt = $mysqli->prepare("UPDATE INCIDENCIA SET prioritat=?, tipus=?, tecnic=? WHERE idInc=?");
    $stmt->bind_param("siii", $prioritat, $tipus, $tecnic, $id);
    $stmt->execute();

    header("Location: listarAdmin.php");
    exit();
}

$id = $_GET["idInc"];
$stmt = $mysqli->prepare("SELECT * FROM INCIDENCIA WHERE idInc=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$INCIDENCIA = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  font-family: Arial, sans-serif;
  font-size: 16px;
  color: #333;
  background-color: #f2f2f2;
}

/* Estilo para el formulario */
form {
  margin: 30px auto;
  padding: 40px;
  max-width: 600px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

/* Estilo para los títulos del formulario */
form h2 {
  margin-top: 0;
  font-size: 24px;
  font-weight: bold;
  color: #333;
}

/* Estilo para las etiquetas del formulario */
form label {
  display: block;
  margin-bottom: 10px;
  font-size: 18px;
  font-weight: bold;
  color: #333;
}

p{
  display: block;
  margin-bottom: 10px;
  font-size: 18px;
  font-weight: bold;
  color: #333;
}

/* Estilo para los select del formulario */
form select {
  display: block;
  margin-bottom: 20px;
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  background-color: #f2f2f2;
}

/* Estilo para el botón del formulario */
form input[type="submit"] {
  display: inline-block;
  padding: 10px 20px;
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
  background-color: #333;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.2s ease;
}

form input[type="submit"]:hover {
  background-color: #444;
}
        </style>
    
</head>
<body>
<form method="POST">
<input type="hidden" name="idInc" value="<?php echo $incidencia["idInc"] ?>">
<p>ID: <?php echo($id); ?> </p>

    <h2>Actualitzar Incidencia</h2>
    <label for="prioritat">Prioritat:</label>
    <select name="prioritat" id="prioritat" required>
        <option value="">[ Prioritat ]</option>
        <option value="Alta" placeholder="Prioritat" class="form-control" type="text" name="prioritat" id="prioritat" required>Alta</option>
        <option value="Mitja" placeholder="Prioritat" class="form-control" type="text" name="prioritat" id="prioritat" required>Mitja</option>
        <option value="Baixa" placeholder="Prioritat" class="form-control" type="text" name="prioritat" id="prioritat" required>Baixa</option>
  

</select>

    <label for="tipus">Tipus:</label>
    <select name="tipus" id="tipus" required>
        <option value="">[ Tipus ]</option>
        <option value="1" placeholder="Tipus" class="form-control" type="text"  required>hardware</option>
        <option value="2" placeholder="Tipus" class="form-control" type="text"  required>Electric</option>
        <option value="3" placeholder="Tipus" class="form-control" type="text"  required>software</option>
</select>
    
    <label for="tecnic">Tècnic:</label>
    <select name="tecnic" id="color" required>
        <option value="">[ Tecnic ]</option>
        <option value="1" placeholder="Tècnic" class="form-control" type="text" name="tecnic" id="tecnic" required>Toni</option>
        <option value="2" placeholder="Tècnic" class="form-control" type="text" name="tecnic" id="tecnic" required>Alvaro</option>
        <option value="3" placeholder="Tècnic" class="form-control" type="text" name="tecnic" id="tecnic" required>Ermengol</option>
        
</select>
    <input type="submit" value="Actualitzar" href="listarAdmin.php">
    
</form>

</body>
</html>

