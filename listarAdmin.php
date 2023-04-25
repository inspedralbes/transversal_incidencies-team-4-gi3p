<!DOCTYPE html>
<html lang="en">
<head>
  <title>Llistat Incidencies</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <style>
      table {
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 2rem;
  padding-top: 50px;
}

th, td {
  text-align: left;
  padding: 0.5rem;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #f5f5f5;
}

.btn {
  display: inline-block;
  background-color: #2196F3;
  color: #fff;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
  transition-duration: 0.4s;
}

.btn:hover {
  background-color: #0b7dda;
  color: #fff;
}

.btn-3d-sub {
  position: relative;
  display: inline-block;
  background-color: #2196F3;
  color: #fff;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
  transition: all 0.2s ease-out;
}

.btn-3d-sub:hover {
  background-color: #0b7dda;
  color: #fff;
  transform: translateY(-2px);
}

.btn-3d-can {
  position: relative;
  display: inline-block;
  background-color: #DC143C;
  color: #fff;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
  transition: all 0.2s ease-out;
}

.btn-3d-can:hover {
  background-color: #9b2020;
  color: #fff;
  transform: translateY(-2px);
}
      </style>
</head>
<body>
<?php
$mysqli = include_once "conexion.php";
include_once "encabezadoAdmin.php";
$resultado = $mysqli->query("SELECT INCIDENCIA.* , idInc, descripcio, prioritat, DEPARTAMENT.depart, TIPOLOGIA.tip, TECNIC.tecn, DATE(data) as data FROM INCIDENCIA LEFT JOIN TECNIC ON TECNIC.idTec=INCIDENCIA.tecnic LEFT JOIN DEPARTAMENT ON DEPARTAMENT.idDep=INCIDENCIA.departament LEFT JOIN TIPOLOGIA ON TIPOLOGIA.idTip=INCIDENCIA.tipus");
$INCIDENCIA = $resultado->fetch_all(MYSQLI_ASSOC);
?>

<h1>Llistat D'incidencies</h1>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Departament</th>
      <th>Descripció</th>
      <th>Fecha</th>
      <th>Prioritat</th>
      <th>Tipus</th>
      <th>Tecnic</th>
      <th>Opcions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($INCIDENCIA as $INCIDENCIA) { ?>
      <tr>
        <td><?php echo $INCIDENCIA["idInc"] ?></td>
        <td><?php echo $INCIDENCIA["depart"] ?></td>
        <td><?php echo $INCIDENCIA["descripcio"] ?></td>
        <td><?php echo $INCIDENCIA["data"] ?></td>
        <td><?php echo $INCIDENCIA["prioritat"] ?></td>
        <td><?php echo $INCIDENCIA["tipus"] ?></td>
        <td><?php echo $INCIDENCIA["tecn"] ?></td>
        <td>
          <a href="./eliminar.php?idInc=<?php echo $INCIDENCIA["idInc"] ?>" class="btn-3d-can"><span>Delete</span></a>
          <a href="./actualizar.php?idInc=<?php echo $INCIDENCIA["idInc"] ?>" class="btn-3d-sub"><span>Editar</span></a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>

</body>
</html>



                

