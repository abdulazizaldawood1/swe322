<?php
$user = $_POST['username'];
$pwd = $_POST['password'];

    $host = "127.0.0.1:3307";
    $database = "gym_db";
    $username = "aziz";
    $password = "aziz";

    $conn = mysqli_connect($host, $username, $password, $database);
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    };
    $sql = "SELECT * FROM user_account WHERE username = '$user' AND userpwd = '$pwd'";

    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) == 0) {

      header("Location: index.php");
    }

?>