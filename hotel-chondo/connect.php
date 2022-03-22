<?php 
$con = mysqli_connect("localhost","root","","db_namanya");
if (!$con) {
    die("connection failed :".mysqli_connect_error());
}
?>