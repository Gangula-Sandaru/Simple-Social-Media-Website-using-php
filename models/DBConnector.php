<?php
// Database configuration
$host = "localhost"; 
$dbName = "socialnetworkDB"; 
$username = "root"; 
$password = ""; 

// Create a new mysqli object
$mysqli = new mysqli($host, $username, $password, $dbName);

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// You are now connected to the database
echo "Connected to the database successfully!";
?>
