<?php
 
require_once "../connection.php"; 

  $user = $_POST["username"];
  $pass = $_POST["password"];

 $sql = "SELECT id FROM users WHERE email = '$user' AND password = '$pass';";

 $result = $conn->query($sql);

 if (mysqli_num_rows($result)!=0) { 
  session_start(); 
  $_SESSION['email'] = $user;
  header("Location: ../index.php");

}else{
  echo 'El email o password es incorrecto, <a href="../login.php">vuelva a intenarlo</a>.<br/>';
}
 
?>