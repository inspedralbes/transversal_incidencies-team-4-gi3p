<?php
# Es conecta a la base de dades
define('USER', 'a21rublormar_bd');
define('PASSWORD', '0320Rlm03');
define('HOST', 'localhost');
define('DATABASE', 'a21rublormar_INCIDENCIES');
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>