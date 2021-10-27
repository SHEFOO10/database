<?php
 if (isset($_GET)):
    $password = $_GET['password'];
    $hashedpassword=password_hash($password, PASSWORD_DEFAULT); 
echo "<br>".$hashedpassword;
 endif;

 if (password_verify($password, $hashedpassword)):
    echo "<br>"."vaild!";
 else:
    echo "novalid";
 endif;    
?>
    <!DOCTYPE html>
    <html>

    <head>

    </head>

    <body>
       <form method="get">
        <input type="password"name="password">
        <input type = "submit" value="Submit">

        </form> 
        <?php

//error_reporting(0); // Turn off all error reporting

?>
        
    </body>

    </html>