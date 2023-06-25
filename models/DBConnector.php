<?php
$servername = "localhost";
$username = "root";
$databaseName = "TestDB";
$password = "000766526217+++gul";

// Create connection
$conn = new mysqli($servername, $username,  $password, $databaseName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>