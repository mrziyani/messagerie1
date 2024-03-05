<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "messengers";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connecxion failed: " . mysqli_connect_error());
}
?>