<?php
   define('DB_SERVER', 'localhost');//database server
   define('DB_USERNAME', 'root');//database username
   define('DB_PASSWORD', '');//database password
   define('DB_DATABASE', 'student_information'); //database name
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
   // Check connection
  if ($db->connect_error) 
  {
      die("Connection failed: " . $db->connect_error);
  }
?>