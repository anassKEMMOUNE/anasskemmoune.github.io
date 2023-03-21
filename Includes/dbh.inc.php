<?php
$servername = "localhost";
$username = "root";
$password = "";
$dataB = "todolistdb"

// Create connection
$conn = new mysqli($servername, $username, $password,$dataB);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
