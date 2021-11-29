<?php
 
//Start the session
session_start();
if ($_SESSION['LAST_ACTIVITY'] - time() > 1800){
    session_unset();
    session_destroy();
}

//check if session started
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
       // destroy session data in storage
}
echo 'Now:       '. date('Y-m-d') ."\n";
echo session_id();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    include 'connection.php';  
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
                echo "<h1><center> Login successful </center></h1>";  
            }  
            else{  
                $sql= "INSERT INTO login(username,password)VALUES(\"$username\", \"$password\")";
                if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully";
                  } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                  }

            }
        header('Location: /dashboard/shefooweb/');    
        }else{
            echo "not working";
        }            
?>    
