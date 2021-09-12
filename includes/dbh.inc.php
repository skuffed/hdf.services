<?php
$servername = "localhost";
$username1 = "root";
$password = "root";
$dbname = "users";
// Create connection
$conn = mysqli_connect($servername, $username1, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>
