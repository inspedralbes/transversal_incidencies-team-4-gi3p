<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<body>
 
<?php
 
    echo "Logged out successfully";
    echo "<a href='index.php'>Inicio</a><br>";

    session_destroy();
 
?>
 
</body>
</html>