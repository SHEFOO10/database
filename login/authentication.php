<?php
session_start();
if ($_SESSION['LAST_ACTIVITY'] - time() > 1800){
    session_unset();
    session_destroy();
}
    if($_SERVER['REQUEST_METHOD'] == "POST"){
            include('connection.php');  
            $db = new connection();
            $db->selectdb("fgbc02eho5e29ha2");
            $conn= mysqli_connect($db->servername, $db->username, $db->password, $db->data);
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
                   header('Location: ./index.php');
                    
                }  
                else{  
                    echo "<h1> Login failed. Invalid username or password.</h1>";  
                } 
            }else{
                echo "not working";
            }
?>    