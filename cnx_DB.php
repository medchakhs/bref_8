<!-- cnxx database -->
<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "12341234";
    $db_name = "neobank";
    global $pdo;
    $dns = "mysql:host=".$db_server.";dbname=".$db_name;
    $pdo = new PDO( $dns, $db_user, $db_pass);
?>