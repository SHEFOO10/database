<?php

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

?>
