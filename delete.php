<?php
require_once "connection.php"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_GET["id"];
$sql = "DELETE FROM employees WHERE id='$id'";


if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("Location: ./index.php");
} else {
  echo "Error deleting record: " . $conn->error;
}


$conn->close();
?> 