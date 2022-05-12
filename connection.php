<?php
$servername = "localhost";
$username = "root";
$password = "RT_sshftpimap1090!";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "<p style='display: none'>Connected Succesfully</p>";
?> 

