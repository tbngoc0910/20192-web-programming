<?php 
  # parameters for connecting to the "business_service" 
  $username = "root"; $password = "123"; 
  $hostspec = "localhost"; $database = "business_service";
  
  
  $db = mysqli_connect($hostspec, $username, $password, $database);
  if (!$db) {
     die("cannot connect!");
  }
?> 

