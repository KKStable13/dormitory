<?php

$servername = "localhost";
$username = "root";
$password = "";
//$dbname = "dormitory_system";

//$servername = "deploywebapp2.mysql.database.azure.com";
//$username = "KKStable";
//$password = "Phetkho13112545";
$dbname = "dormitory";

// Create Connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>