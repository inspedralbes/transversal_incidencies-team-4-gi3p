<?php
session_start();

$username = $_POST['userid'];
$pwd = $_POST['password'];

if($username == 'root' and $pwd == '1Password')
{    
    $_SESSION['id']=session_id();
    $_SESSION['userid']=$username;
    echo header("Location: listarAdmin.php");
    //echo "ID de sesion".$_SESSION['id']."<br>";
    
}
else{
    echo header("Location: error.html");
    echo "error";
    
}
?>
