<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<body>
 
<?php
 
    echo "Logged out successfully";
    echo "<a href='adminPanel.php'>Inicio</a><br>";

    session_destroy();
 
?>
 
</body>
</html>