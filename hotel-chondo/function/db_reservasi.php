<?php
$conn = mysqli_connect("localhost", "root", "", "db_reservasi");
error_reporting(0);
if (!$conn) {
    die("connection failed :" . mysqli_connect_error());
    exit();
}
