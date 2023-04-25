<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
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

.eliminar-btn {
  background-color: red;
  color: white;
  border: none;
  padding: 10px;
  cursor: pointer;
}

.editar-btn {
  background-color: blue;
  color: white;
  border: none;
  padding: 10px;
  
  cursor: pointer;
}

.btn-container {
  display: flex;
  flex-direction: row;
  justify-content: left;
  align-items: center;
}
.formulario-act-edit {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 80px;
  padding: 60px;
  border: 1px solid #ccc;
  border-radius: 10px;
}

.form-group {
  display: flex;
  flex-direction: column;
  margin-bottom: 20px;
}

label {
  font-weight: bold;
  margin-bottom: 5px;
}

textarea, select {
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

input[type="submit"] {
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #0069d9;
}
</style>


</head>
<body>
<div class="tabla" id="tabla-actuaciones">
    <?php
      $mysqli = include_once "conexion.php";
      $incidencia = $_GET["id"];
      $sql = $mysqli->prepare("SELECT * FROM ACTUACIO WHERE visible = 1 AND incidencia = ?");
      $sql->bind_param("i", $incidencia);
      $sql->execute();
      $resultActuacio = $sql->get_result();

      if ($resultActuacio->num_rows > 0) {
        echo '<table>';
        echo '<tr><th>ID Act</th><th>Data</th><th>Descripció</th><th>Incidència</th><th>Temps</th><th>Opcions</th></tr>';
        while($row = $resultActuacio->fetch_assoc()) {
          echo '<tr>';
          echo '<td>' . $row["idAct"] . '</td>';
          echo '<td>' . $row["data"] . '</td>';
          echo '<td>' . $row["descripcio"] . '</td>';
          echo '<td>' . $row["incidencia"] . '</td>';
          echo '<td>' . $row["temps"] . '</td>';
          echo '<td>';
          echo '<div class="btn-container">';
          echo '<button class="eliminar-btn" onclick="eliminarActuacion(' . $incidencia . ', ' . $row["idAct"] . ')">Eliminar</button>';
          echo '<button class="editar-btn" onclick="editForm(' . $row["idAct"] . ', \'' . $row["data"] . '\', \'' . $row["descripcio"] . '\', ' . $row["temps"] . ')">Editar</button>';
          echo '</div>';
          echo '</td>';
          echo '</tr>';
        }
        echo '</table>';
      } else {
        echo "<br><h2>ID Incidencia: $incidencia</h2>";
        echo "<br><hr><h4>No hi han actuacions disponibles sobre aquesta incidencia</h4>";
        header("Location: searchIncidenaiAdmin.php?id=$incidencia");
      }
    ?>
    <script>
      function eliminarActuacion(incidencia, row) {
          // Make an AJAX request to delete the actuacion
          var xhr = new XMLHttpRequest();
          xhr.open('GET', 'eliminarAct.php?id' + incidencia + '&idAct=' + row, true);
          xhr.onload = function() {
              if (xhr.status == 200) {
                  // If the request was successful, reload the page
                  window.location.reload();
              } else {
                  // If there was an error, display an error message
                  console.error(xhr.statusText);
              }
          };
          xhr.onerror = function() {
              console.error(xhr.statusText);
          };
          xhr.send();
      }
      </script>
    <br>
    <button onclick="window.location.href='searchIncidenciaAdmin.php?id=<?php echo $incidencia ?>';">Volver</button>
    </div>
    <div class="formulario-act-edit" id="formulario-act-edit" style="display: none; max-width: 450px; justify-content: center;">
      <h3>Editar actuación</h3>
      <form id="editar-actuacion-form" method="POST"  style="max-width: 400px;">
        <input type="hidden" id="idAct" name="idAct">
        <div class="form-group">
          <label for="descripcio">Descripción:</label>
          <textarea id="descripcio" name="descripcio" rows="4" cols="50"></textarea>
        </div>
      
        <div class="form-group">
          <label for="tiempo">Tiempo:</label>
          <select name="tiempo" id="tiempo" required>
            <option value="">-- Selecciona --</option>
            <option value="10">10 Minutos</option>
            <option value="15">15 Minutos</option>
            <option value="30">30 Minutos</option>
            <option value="45">45 Minutos</option>
            <option value="60">60 Minutos</option>
          </select>
        </div>
      
        <div class="form-group">
          <input type="submit" value="Actualizar" class="btn btn-primary">
          <button type="button" onclick="cancelEdit()">Cancelar</button>
        </div>
      </form>
    </div>
    <script>
      function editForm(idAct, descripcio) {
        // Rellena los campos del formulario con los valores actuales
        document.getElementById("idAct").value = idAct;
        document.getElementById("descripcio").value = descripcio;

        // Oculta la tabla y muestra el formulario
        document.getElementById("tabla-actuaciones").style.display = "none";
        document.getElementById("formulario-act-edit").style.display = "block";
      }

      function cancelEdit() {
        // Muestra la tabla y oculta el formulario
        document.getElementById("tabla-actuaciones").style.display = "block";
        document.getElementById("formulario-act-edit").style.display = "none";
      }
    </script>


</body>
 
</html>