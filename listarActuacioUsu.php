<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      /* Estilos para la tabla */
      .tabla {
  margin: 20px;
  padding: 20px;
  padding-top: 50px;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  font-family: Arial, sans-serif;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

th {
  background-color: #ddd;
  color: #333;
  font-weight: bold;
  text-align: left;
  padding: 10px;
}

td {
  border: 1px solid #ddd;
  padding: 10px;
  
}

tr:nth-child(even) td {
  background-color: #f2f2f2;
}

button {
  padding: 10px 30px;
  background-color: #fff;
  color: #333;
  border: 2px solid #333;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  transition: all 0.3s ease;
}

button:hover {
  background-color: #333;
  color: #fff;
}
      </style>
</head>
<body>
    <div class="tabla">
    <?php
    $mysqli = include_once "conexion.php";
    $id = $_GET['idInc'];
    $sql = "SELECT * FROM ACTUACIO WHERE visible = 1 AND incidencia = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
      echo '<table>';
      echo '<tr><th>ID Act</th><th>Data</th><th>Descripció</th><th>Incidència</th><th>Temps</th></tr>';
      while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["idAct"] . '</td>';
        echo '<td>' . $row["data"] . '</td>';
        echo '<td>' . $row["descripcio"] . '</td>';
        echo '<td>' . $row["incidencia"] . '</td>';
        echo '<td>' . $row["temps"] . '</td>';
        echo '</tr>';
      }
      echo '</table>';
    } else {
      echo "<br><h2>ID Incidencia: $id</h2>";
      echo "<br><hr><h4>No hi han actuacions disponibles sobre aquesta incidencia</h4>";
      header("Location: searchIncidenaiAdmin.php?id=$id");
    }
    ?>
    <br>
    <button onclick="window.location.href='searchIncidenciausu.php?id=<?php echo $id ?>';">Volver</button>
    </div>
</body>
</html>