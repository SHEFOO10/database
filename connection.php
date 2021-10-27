<?php
$servername = "localhost";
$username = "sssa2279";
$password = "";
$data = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $data);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);  
}
echo "Connected successfully";
?>