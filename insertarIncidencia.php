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
  background-color: #f2f2f2;
}

h1 {
  text-align: center;
  font-size: 2.5em;
  margin: 2em 0;
}

.grid-insert {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
  gap: 1em;
  justify-items: center;
}

.container-grid-insert {
  background-color: #fff;
  padding: 2em;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
}

.depar_desc {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
  margin-top: 2em;
}

table {
  width: 100%;
  text-align: center;
}

th {
  background-color: #007bff;
  color: #fff;
  font-weight: bold;
  padding: 0.5em;
  border: 1px solid #007bff;
}

td {
  padding: 0.5em;
  border: 1px solid #007bff;
}

select {
  width: 100%;
  padding: 0.5em;
  border-radius: 5px;
  border: 1px solid #ccc;
  background-color: #fff;
}

textarea {
  width: 100%;
  height: 150px;
  margin: 1em 0;
  padding: 0.5em;
  border-radius: 5px;
  border: 1px solid #ccc;
  background-color: #fff;
}

input[type="submit"] {
  display: block;
  margin: 1em auto 0;
  padding: 0.5em 1em;
  border-radius: 5px;
  border: none;
  background-color: #007bff;
  color: #fff;
  font-weight: bold;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #0062cc;
}
     </style>   
</head>

<?php
include_once "encabezado.php";
$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("SELECT descripcio, departament FROM INCIDENCIA");
?>
<body>
    
<h1>INSERTA UNA INCIDENCIA</h1>
<div class="grid-insert">
    
    <div class="container-grid-insert">
    <form action="insertar.php" method="post">
        <div class="depar_desc">
        <table>
            <th>Departament</th>
            <th>Descripcio</th>
            <tr>
                <td class="dep">
                    <select name="departament" id="departament" >
                        <option value="CAT" >Catala</option>
                        <option value="CIE">Ciencies</option>
                        <option value="HIS">Historia</option>
                        <option value="MAT">Matematiques</option>
                    </select>
                </td>
                <td class="desc">
                    <textarea name="descripcio" rows="4" cols="50"></textarea>
                    <input type="submit">
                </td>
            </tr>
        
        </div>
        
            
           
        </div>
        </form>
    </div>
  
</div>

</body>
</html>
