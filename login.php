<?php
session_start();
$mysqli = include_once "conexion.php";

$username = $_POST['username'];
$pwd = $_POST['password'];

if($username == 'root' and $pwd == '1Password')
{    
    $_SESSION['id']=session_id();
    $_SESSION['username']=$username;
    echo header("Location: administrador.php");
    //echo "ID de sesion".$_SESSION['id']."<br>";
    
}
else{
    echo header("Location: error.html");
    echo "error";    
    }
?>
