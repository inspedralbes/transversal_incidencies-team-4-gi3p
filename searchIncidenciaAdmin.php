<?php
$mysqli = include_once "conexion.php";
include_once "encabezadoAdmin.php";
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<title>Mostrar Incidencia</title>
	<style>
		body {
  font-family: Arial, sans-serif;
}

.container {
  margin: 50px auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  max-width: 800px;
}

h2 {
  margin-bottom: 20px;
}

p {
  margin: 10px 0;
}

/* Estilo para botón Volver */
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

/* Estilo para botón Mostrar Actuacions */
.btn-3d-sub {
  display: inline-block;
  margin-left: 10px;
  padding: 15px 20px 10px 10px;
  color: #fff;
  font-size: 16px;
  text-decoration: none;
  border-radius: 5px;
  border: none;
  background: #39c;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
}

.btn-3d-sub span {
  position: relative;
  z-index: 1;
}

.btn-3d-sub:before {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 0;
  background: #222;
  transition: all 0.3s ease;
}

.btn-3d-sub:hover:before {
  height: 100%;
}
		</style>
	
</head>
<body>
	<div class="container">
		<h2>Mostrar Incidencia</h2>
		<?php 
            $id = $_GET["id"];
            $sentencia = $mysqli->prepare("SELECT idInc, data, prioritat, descripcio, dataFi, tipus, tecnic, departament FROM INCIDENCIA WHERE idInc = ?");
            $sentencia->bind_param("i", $id);
            $sentencia->execute();
            $resultado = $sentencia->get_result();
            $incidencia = $resultado->fetch_assoc();
			if ($incidencia) {
			    echo "<p><label>ID:</label> {$incidencia['idInc']}</p>";
			    echo "<p><label>Descripcio:</label> {$incidencia['descripcio']}</p>";
			    echo "<p><label>Departament:</label> {$incidencia['departament']}</p>";
          echo "<p><label>Prioritat:</label> {$incidencia['prioritat']}</p>";
          echo "<p><label>Fecha:</label> {$incidencia['data']}</p>";
          echo "<p><label>Data Fi:</label> {$incidencia['dataFi']}</p>";
          echo "<p><label>Tecnic:</label> {$incidencia['tecnic']}</p>";
          echo "<p><label>Tipus:</label> {$incidencia['tipus']}</p>";
			} else {   
			    //header("Location: error.html");
			    echo '<br> error';
          header("Location: errorIncidenciaAdmin.html");
          
			}
		?>
		<button onclick="location.href='./cercarIncidenciaAdmin.php'">Volver</button>
		<button onclick="location.href='./actua.php?id=<?php echo $incidencia['idInc'] ?>'">Insertar Actuacio</button>
    <button onclick="location.href='./listarActuacioAdmin.php?id=<?php echo $incidencia['idInc'] ?>'">Mostrar Actuacions</button>
	</div>
</body>
</html>
