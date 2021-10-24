<?php
// connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "fitness";

// create a connection
$conn = mysqli_connect($servername, $username, $password, $database);


//die if connection was not successful
if (!$conn) {
  die("sorry! we failed to connect" . mysqli_connect_error());
} else {
  echo "connection was successful";
}

// Create connection
// $conn = new mysqli($servername, $username, $password);
// echo $conn;
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
?>




<!-- $username = "pmauser";
$password = "#i0QHbk24Z"; -->