<?php
require_once "../connection.php"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$user = $_POST['user'];
$pass = $_POST["pass"];

$sql = "INSERT INTO users (email, password)
VALUES ('$user', '$pass')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: ../login.php?newUser=true");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 