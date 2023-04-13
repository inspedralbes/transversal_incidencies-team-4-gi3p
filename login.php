
<?php
$username = $_POST['username'];
$pwd = $_POST['password'];
$email = $_POST['email'];
 
if($username == 'a21rublormar' and $pwd == '0320Rlm03' and $email == 'a21rublormar@inspedralbes.cat')
{    
    session_start();
    $_SESSION['id']=session_id();
    $_SESSION['username']=$username;
    $_SESSION['email']=$email;
    echo "Logged in successfully<br>";
    echo "ID de sesion".$_SESSION['id']."<br>";
    echo "<a href='member.php'>Ir a la parte privada</a><br>";
    echo "<a href='logout.php'>Desconectar</a>";
}
else{
    echo "Datos incorrectos";
}
?>
