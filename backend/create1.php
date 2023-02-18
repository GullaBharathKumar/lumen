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
$sql = "CREATE TABLE eventcreation (
event_name VARCHAR(30) NOT NULL,
event_date VARCHAR(30) NOT NULL,
event_time VARCHAR(50) NOT NULL,
event_location VARCHAR(12) NOT NULL)";
if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating Table: " . $conn->error;
}

$conn->close();
?>