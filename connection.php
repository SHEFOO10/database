<?php

class connection {
  // Properties
    public $username, $servername, $password, $data;
    

  // Methods
   function selectdb($data){
    $username = "shefoo";
    $servername= "localhost";
    $password= "shefoo";
    $this->data= $data;
    $this->username= $username;
    $this->servername= $servername;
    $this->password= $password;
      } 
    
    }
    
  


?>
