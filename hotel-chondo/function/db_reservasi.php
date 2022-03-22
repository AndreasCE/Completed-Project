<?php
$conn = mysqli_connect("localhost", "root", "", "db_reservasi");

if (!$conn) {
    die("connection failed :" . mysqli_connect_error());
    exit();
}
