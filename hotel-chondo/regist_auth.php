<?php 
session_start();
include "function/db_reservasi.php";
error_reporting(0);
if (isset($_REQUEST['username'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = trim(mysqli_real_escape_string($conn, $username));
    $email    = stripslashes($_REQUEST['email']);
    $email    = trim(mysqli_real_escape_string($conn, $email));
    $password = stripslashes($_REQUEST['password']);
    $password = md5(trim(mysqli_real_escape_string($conn, $password)));

    $cek = mysqli_query($conn,"SELECT * FROM user");
while ($row = mysqli_fetch_array($cek)) {
  $rows[] = $row['username'];
}

if (in_array($username, $rows)) {
  $_SESSION['warn'] = "User already exist";
  header("Location: register.php");
} else {
  $query    = "INSERT into user (username, pass, email)
    VALUES ('$username', '$password', '$email')";
  mysqli_query($conn, $query);
  $_SESSION['regis'] = "register successfuly";
echo header("location: login_user.php");
}
}
?>
    
