<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<body>
 
<?php
if (isset($_SESSION["userid"])){
    echo "Bienvenido a la parte privada<br>";
    echo "ID de sesion".$_SESSION['id']."<br>";
    echo "<a href='logout.php'>Desconectar</a><br>";
    echo "<a href='index.php'>Inicio</a><br>";
}
else{
    echo "Eeeh, no puedes estar aqui";
   
}

?>
 
</body>
</html>