<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "our_portfolio"; // Ensure this matches your database

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn){
  // echo"success";
}
else{
    echo"error";
}
?>