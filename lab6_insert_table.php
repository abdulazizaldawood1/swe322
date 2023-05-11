<?php
$servername = "localhost";
$username = "aziz";
$password = "aziz";
$dbname = "Lab_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insert data into table
$sql = "INSERT INTO 06_Lab (F_name, L_name, S_id, Major) VALUES ('John', 'Doe', 1234567890, 'Computer Science')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>