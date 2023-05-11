<?php

    $host = "127.0.0.1:3307";
    $database = "gym_db";
    $username = "aziz";
    $password = "aziz";
    
    $conn = mysqli_connect($host, $username, $password, $database);
    
    
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    };
    $sql = "INSERT INTO bookings (class_id, user_id) VALUES ('" .$class_id."','" . $user_id."')";
    if ($conn->query($sql) === TRUE) {
        header("Location: Welcome.php");
    }
     else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    mysqli_close($conn);
    
?>