<?php
require_once "connection.php"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$employee = $_POST['name'];
$location = $_POST["addr"];
$salaries = $_POST["slry"];

$sql = "INSERT INTO employees (name, address, salary)
VALUES ('$employee', '$location', '$salaries')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: ./index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 