<?php
//server with default setting (user 'root' with no password)
$host = 'localhost';  // server 
$user = 'root';   
$pass = "220213@Bd";
$database = 'login_crud';   //Database Name  

// establishing connection
  $conn = mysqli_connect($host,$user,$pass,$database);   

 // for displaying an error msg in case the connection is not established
  if (!$conn) {                                             
    die("Connection failed: " . mysqli_connect_error());     
  }
?>


