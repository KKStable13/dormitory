<?php

$servername = "localhost";
$username = "root";
$password = "13112545";
$dbname = "dormitory";

// Create Connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>