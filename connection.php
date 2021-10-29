<?php
$servername = "ec2-3-228-134-188.compute-1.amazonaws.com";
$username = "zzgfqyxyjejlqa";
$password = "61439e10bc69cfc075cda07b0eab4e901801e74c93ed9b59f558dc33e092fdd6";
$data = "dabb86uf0905cq";
$port = "5432";
// Create connection
$conn = new mysqli($servername, $username, $password, $data, $port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);  
}
echo "Connected successfully";
?>