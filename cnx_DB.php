<!-- cnxx database -->
<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "12341234";
    $db_name = "neobank";
    // $dns = "mysql:host=".$db_server.";dbname=".$db_name;
    // $pdo = new PDO( $dns, $db_user, $db_pass);
    
    try {
        $dns = "mysql:host=".$db_server.";dbname=".$db_name;
        $pdo = new PDO( $dns, $db_user, $db_pass);
    }
   catch (PDOException $e) {
    die("Connection failed: ". $e->getMessage());
   }
?>