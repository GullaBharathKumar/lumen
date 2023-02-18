<?php
$servername = "localhost";
$username = "root";
$password = "Madhu@1044";
$database="Registers";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Create database
$sql = "CREATE TABLE Register (
fullName VARCHAR(30) NOT NULL,
username VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
phoneNumber VARCHAR(12) NOT NULL,
pwd VARCHAR(10) NOT NULL,
gender VARCHAR(30))";
if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating Table: " . $conn->error;
}

$conn->close();
?>