<?php
$servername = "nnsgluut5mye50or.cbetxkdyhwsb.us-east-1.rds.amazonaws.com	";
$username = "ppbp5t14e10uui4i";
$password = "sjbhttch2213ubb4";
$data = "fgbc02eho5e29ha2";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);  
}
echo "Connected successfully";
?>