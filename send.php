<?php
$email = $_POST["email"];
$firstname = $_POST["firstname"];
$secondname = $_POST["secondname"];
$message = $_POST["message"];

$mysqli = new mysqli("localhost","root","","food_delivery");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

if ($result = $mysqli -> query("INSERT INTO `reviews` (`email`, `message`, `firstname`, `secondname`) VALUES ('$email', '$message', '$firstname', '$secondname');")) {
  // echo "Returned rows are: " . $result -> num_rows;
  header("Location: http://localhost/exam");
  die();
  // $result -> free_result();
}

$mysqli -> close();
?> 

