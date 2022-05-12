<?php
require_once "connection.php"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$employid = $_POST['emid'];
$employee = $_POST['name'];
$location = $_POST["addr"];
$salaries = $_POST["slry"];

$sql = "UPDATE employees SET name='$employee', address='$location', salary='$salaries' WHERE id='$employid'";

if ($conn->query($sql) === TRUE) {
  echo "Record  Updated successfully";
  header("Location: ./index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 