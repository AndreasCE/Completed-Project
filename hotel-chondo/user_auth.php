<?php
session_start();
include "function/db_reservasi.php";

if (isset($_POST['username'])) {

    $username = trim(mysqli_real_escape_string($conn, $_POST['username']));
    $pass     = md5(trim(mysqli_real_escape_string($conn, $_POST['password'])));

    $query = mysqli_query($conn, "SELECT * FROM `user` WHERE username = '$username' AND pass = '$pass'");
    $data = mysqli_fetch_assoc($query);
    if (mysqli_num_rows($query) > 0) {
        $_SESSION['username'] = $username;
        if ($data['level'] == "user") {
            echo 'user';
        } elseif ($data['level'] == "admin") {
            echo 'admin';
        } elseif ($data['level'] == "petugas") {
            echo 'petugas';
        }
    } else {
        echo "failed login";
    }
}
