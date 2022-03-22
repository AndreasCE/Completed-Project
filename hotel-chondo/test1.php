<?php 
session_start();
include "connect.php";
if(isset($_POST['submit'])){
$nama = htmlspecialchars($_POST['nama']);
$tanggal = htmlspecialchars($_POST['tanggal']);

$sql = "DELETE from namanya where nama";

if (mysqli_query($con,$sql)) {
    echo "insert success";
}

else{
    echo "error $sql". mysqli_error($con);
}
}
?>