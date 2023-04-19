<?php
$mysqli = include_once "conexion.php";
$id = $_GET["idInc"];

$sentencia = $mysqli->prepare("SELECT idInc, descripcio FROM INCIDENCIA WHERE idInc = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$resultado = $sentencia->get_result();
$incidencia = $resultado->fetch_assoc();
if (!$incidencia) {
    exit("No hay resultados! Id erronia");
}


?>

<head>
    <title>Editar</title>
    <style>
        body {
  font-family: Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5;
  margin: 0;
  padding: 0;
}

h1 {
  font-size: 36px;
  margin-bottom: 20px;
  padding-top: 20px;
  padding-bottom: 0px;
}

.grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 20px;
  margin-top: 50px;
  padding-left: 530px;
}

.container-grid {
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
  padding: 10px;
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"],
select {
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  width: 100%;
  margin-bottom: 20px;
  box-sizing: border-box;
  font-size: 16px;
}

button {
  padding: 10px 20px;
  border-radius: 5px;
  border: none;
  background-color: #337ab7;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
}

.turn{
    background-color: #d22318;
      
}

h1{
   text-align: center;
}

a {
  color: #337ab7;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

/* Estilos para el menú hamburguesa */
.hamburger {
  display: none;
  position: absolute;
  top: 20px;
  right: 20px;
  z-index: 2;
  cursor: pointer;
}

.hamburger__line {
  display: block;
  width: 25px;
  height: 3px;
  background-color: #333;
  margin: 5px 0;
  border-radius: 3px;
  transition: all 0.3s ease-in-out;
}

.hamburger__line:last-child {
  margin-bottom: 0;
}

.hamburger--active .hamburger__line:first-child {
  transform: rotate(45deg);
  top: 6px;
}

.hamburger--active .hamburger__line:nth-child(2) {
  opacity: 0;
}

.hamburger--active .hamburger__line:last-child {
  transform: rotate(-45deg);
  top: -6px;
}

@media screen and (max-width: 768px) {
  .grid {
    grid-template-columns: 1fr;
  }

  .container-grid {
    padding: 10px;
  }

  .hamburger {
    display: block;
  }

  .menu {
    display: none;
    position: absolute;
    top: 60px;
    right: 20px;
    z-index: 1;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    padding: 20px;
  }

  .menu__item {
    display: block;
    margin-bottom: 10px;
  }

  .menu__link {
    color: #333;
    text-decoration: none;
    font-size: 18px;
  }

  .menu__link:hover {
    text-decoration: underline;
  }

  .menu--active {
    display: block;
  }
}
    </style>
</head>
<body>
<h1>Actualizar Incidencia</h1>

<div class="grid">
    <div class="container-grid">
    <h1><?php echo $incidencia["descripcio"] ?></h1>
        <form action="actualizar.php" method="post">

<input type="hidden" name="idInc" value="<?php echo $incidencia["idInc"] ?>">

        <label for="tecnic">Tècnic:</label>
        <select name="tecnic" id="color" required>
        <option value="">[ Tecnic ]</option>
        <option value="1" placeholder="Tècnic" class="form-control" type="text" name="tecnic" id="tecnic" required>Ermengol</option>
        <option value="2" placeholder="Tècnic" class="form-control" type="text" name="tecnic" id="tecnic" required>Alvaro</option>
        <option value="3" placeholder="Tècnic" class="form-control" type="text" name="tecnic" id="tecnic" required>Toni</option>
        
</select>
<br>

<label for="Prioritat">Prioritat:</label>
<select name="prioritat" id="prioritat" required>
<option value="">[ Prioritat ]</option>
  <option value="Alta" placeholder="Prioritat" class="form-control" type="text" name="prioritat" id="prioritat" required>Alta</option>
  <option value="Mitja" placeholder="Prioritat" class="form-control" type="text" name="prioritat" id="prioritat" required>Mitja</option>
  <option value="Baixa" placeholder="Prioritat" class="form-control" type="text" name="prioritat" id="prioritat" required>Baixa</option>
  

</select>
<br>
<label for="tipus">Tipus:</label>

<select name="tipus" id="color" required>
<option value="">[ Tipus ]</option>
  <option value="1" placeholder="Tipus" class="form-control" type="text"  required>hardware</option>
  <option value="2" placeholder="Tipus" class="form-control" type="text"  required>Electric</option>
  <option value="3" placeholder="Tipus" class="form-control" type="text"  required>software</option>
</select>
<br>

    <div class="form-group">         
    <a href =actualizar.php><button>Guardar</button></a>
    <a href=listarAdmin.php><button class="turn">Volver</button></a> <br>
    </div> 
<br>
</div>
</body>
</html>
