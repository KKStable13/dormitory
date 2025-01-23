<?php

//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "dormitory";
//$dbname = "dormitory_system";

$servername = "deploywebapp3.mysql.database.azure.com";
$username = "KKStable";
$password = "Phetkho13112545";
$dbname = "dormitory";
//$port = "3306";

// Create Connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=dormitory", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
?>