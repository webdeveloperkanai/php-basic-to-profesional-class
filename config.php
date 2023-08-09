<?php
session_start();

$host = "localhost"; // database location 
$username = "dsi"; // database user 
$password = "Kanai@123#"; // database password 
$dbname = "dsi"; // database name 

// connect with MySQL 
$con =  mysqli_connect($host, $username, $password, $dbname);

if (!$con) {
    echo "<h1>Database not connected</h1>";
}
