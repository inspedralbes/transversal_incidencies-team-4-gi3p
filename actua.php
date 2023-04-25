<?php
$incidencia = $_GET["id"];
$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("SELECT INCIDENCIA.idInc, INCIDENCIA.descripcio FROM INCIDENCIA LEFT JOIN ACTUACIO ON INCIDENCIA.idInc=ACTUACIO.incidencia WHERE idInc = $incidencia");
$actuacio = $resultado->fetch_assoc();

$resultAct = $mysqli->query("SELECT ACTUACIO.descripcio, ACTUACIO.data, ACTUACIO.temps FROM ACTUACIO WHERE ACTUACIO.incidencia = $incidencia;");
$act = $resultAct->fetch_all(MYSQLI_ASSOC);

if(!$actuacio){
  echo "error";
}
if(!empty($actuacio["data"])){
  echo("Location: finalitzar.php?id=$actuacio[idInc]");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actuació</title>
    <style>
        body {
        background-color: #f5f5f5;
        font-family: Arial, sans-serif;
      }

      .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
      }

      .form-container {
        margin-top: 30px;
      }

      .form-group {
        margin-bottom: 20px;
      }

      label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
      }

      h1{
          text-align: center;
          padding-top: 40px;
      }

      input[type="text"],
      select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        font-family: Arial, sans-serif;
      }

      select {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 10 5' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 0l5 5 5-5H0z' fill='%23000'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 10px center;
        background-size: 10px 5px;
      }

      button[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        font-family: Arial, sans-serif;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #BDC6BD;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        font-family: Arial, sans-serif;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      button[type="submit"]:hover {
        background-color: #3e8e41;
      }

      a {
        color: #007bff;
        text-decoration: none;
        font-size: 16px;
        font-family: Arial, sans-serif;
      }

      a:hover {
        text-decoration: underline;
      }
        </style>

</head>
<body>
    <?php
    include_once "encabezadoAdmin.php";
    ?>
<h1>Insertar Actuació</h1>

<div class="container">

  <div class="form-container">
    <h2>Descripcio Incidencia: <hr><?php echo $actuacio["descripcio"] ?></h2>
    <h3></h3>
    <form action="actuacioInsert.php" method="POST">
      <input type="hidden" name="idInc" value="<?php echo $actuacio["idInc"] ?>">

      <div class="form-group">
        <label for="desc">Descripcio:</label>
        <input type="text" id="desc" name="descripcio" maxlength="100" placeholder="" required>
      </div>

      <div class="form-group">
        <label for="temps">Temps:</label>
        <select name="temps" id="temps" required>
          <option value=""> -- Selecciona -- </option>
          <option value="10">10 Minuts</option>
          <option value="15">15 Minuts</option>
          <option value="30">30 Minuts</option>
          <option value="45">45 Minuts</option>
          <option value="60">60 Minuts</option>
        </select>
      </div>
      <div class="form-group">
        <label for="visi">Visibilitat:</label>
          <label for="visible_yes"><input type="radio" id="visible_yes" name="visible" value="1"> Sí</label>
          <label for="visible_no"><input type="radio" id="visible_no" name="visible" value="0"> No</label>
      </div>

      <div class="form-group">
        <button type="submit">Guardar</button>
        <button onclick="location.href='./cercarIncidenciaAdmin.php'">Volver</button>

      </div>
    </form>
    
  </div>
</div>
</body>
</html>
