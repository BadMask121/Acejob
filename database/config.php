<?php

$servername = "localhost";
$username = "ecobank";
$password = "efemena1";
$db_name ="acejob";

// Create connection
$conn = new mysqli($servername,$username, $password,$db_name);
if ($conn->connect_error) {
  die("Connection to Database Failed: ".$conn->connect_error);
}


?>
