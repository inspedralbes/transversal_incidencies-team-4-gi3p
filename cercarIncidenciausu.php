<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 50px;
      }
      header {
        background-color: #333;
        color: white;
        padding: 10px;
      }
      form {
        display: flex;
        flex-direction: row;
        align-items: center;
        margin: 20px;
      }
      label {
        margin-right: 10px;
      }
      input[type="text"] {
        padding: 10px;
        border: none;
        border-radius: 5px;
        box-shadow: 0 0 5px grey;
        font-size: 16px;
        flex: 1;
      }
      input[type="submit"] {
        padding: 10px 20px;
        background-color: #333;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
      }
      input[type="submit"]:hover {
        background-color: #555;
      }
      .resultados {
        margin: 20px;
      }
    </style>
</head>
<body>
  
    <header>
    </header>
    <div>
        <form action="searchIncidenciausu.php" method="get">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id"maxlength="100" placeholder="ID de l'Incidencia" required>
        <input type="submit" value="Buscar">    
    </form>
  <br>
  <?php
  include_once "encabezadoUsu.php";
  if(isset($_GET['Buscar'])){
      $id = $_GET['id'];
      $consulta = $con->query("SELECT * FROM INCIDENCIA WHERE LIKE'%$id");
      while($row = $consulta->fetch_array()){
        echo $row['id'].'<br>';
      }
    }
  ?> 
</div>
</body>
</html>