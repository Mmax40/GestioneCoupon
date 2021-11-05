<!-- <?php
$server= "89.40.174.68"; 
$user= "gcodfsrx";
$password= "xAyj9t518G";
$database= "gcodfsrx_mo3";
?> -->

<?php

    $hostname = "89.40.174.68";
    $username = "gcodfsrx";
    $password = "xAyj9t518G";
	$database= "gcodfsrx_mo3";

    try {
        $connection = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Database connection failed: " . $e->getMessage();
    }

?>