<?php
$hostname = "localhost";
$dbname = "easypark";
$username = "root";
$password = "";

$servername="localhost";

$conn = new mysqli($hostname, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



?>