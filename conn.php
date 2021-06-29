<?php
session_start();
$host="localhost";
$user="root";
$pwd="";
$dbname="demo4";
$conn = new mysqli($host, $user, $pwd, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>