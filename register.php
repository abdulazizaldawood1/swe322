<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$usrname = $_POST['username'];
$email = $_POST['email'];
$usrpwd = $_POST['password'];
if (empty($firstname) || empty($lastname) || empty($usrname) || empty($email)|| empty($usrpwd)) {
  echo "please complete your information";
} else {
  $host = "127.0.0.1:3307";
  $database = "gym_db";
  $username = "aziz";
  $password = "aziz";
    
    $conn = mysqli_connect($host, $username, $password, $database);
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    };
    $sql = "INSERT INTO user_account ( firstname, lastname, username, email, userpwd  ) VALUES ('" .$firstname."', '" .$lastname."','" .$usrname."','" . $email."','" .$usrpwd."')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    mysqli_close($conn);
    
}
?>