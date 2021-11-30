<?php
session_start();

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        class connection {
            // Properties
              public $username, $servername, $password, $data, $port;
              
          
            // Methods
             function selectdb(){
              $servername = "nnsgluut5mye50or.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
              $username = "ppbp5t14e10uui4i";
              $password = "sjbhttch2213ubb4";
              $data = "fgbc02eho5e29ha2";
              $port= 3306;
              $this->port = $port;
              $this->data= $data;
              $this->username= $username;
              $this->servername= $servername;
              $this->password= $password;
                } 
              
              }
$cone= new connection;
$cone->selectdb();
$servername=$cone->servername;
$username=$cone->username;
$password=$cone->password;
$data=$cone->data;
$port=$cone->port;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $data, $port);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
            $username = $_POST['user'];
            $password = $_POST['pass'];  

                //to prevent from mysqli injection  
                $username = stripcslashes($username);  
                $password = stripcslashes($password);  
                $username = mysqli_real_escape_string($conn, $username);  
                $password = mysqli_real_escape_string($conn, $password); 
            
            
                $sql = "select *from login where username = '$username' and password = '$password'";  
                $result = mysqli_query($conn, $sql);  
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                $count = mysqli_num_rows($result);  
                
                if($count == 1){  
                   header('Location: /cpanel/');
                    
                }  
                else{  
                    echo "<h1> Login failed. Invalid username or password.</h1>";  
                } 
            }else{
                echo "not working";
            }
?>    