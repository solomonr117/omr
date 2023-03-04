<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "omrdb";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

echo "<script> console.log('Connected Successfull.. !');</script>";

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?> 