<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myproject";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE student SET lname='sharma',fname='devangna',email='hkkaushik987@gmail.com' WHERE id=10";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>