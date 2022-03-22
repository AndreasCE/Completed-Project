<?php 
session_start();
require "../function/db_reservasi.php";

if(isset($_POST['submit'])){ 
    $kamar = htmlspecialchars($_POST['kamar']);
    $nama = htmlspecialchars($_POST['nama']);
        $jml_orang = htmlspecialchars($_POST['jml_orang']);
        $jml_kamar = htmlspecialchars($_POST['jml_kamar']);
        $tgl_masuk  = htmlspecialchars(date('Y-m-d', strtotime($_POST['tgl_in'])));
        $tgl_keluar = htmlspecialchars(date('Y-m-d', strtotime($_POST['tgl_out'])));
        var_dump($query);
        $query = "INSERT into booking (nama, jml_orang, jml_kamar, tgl_masuk, tgl_keluar, kamar) VALUES ('$nama', '$jml_orang', '$jml_kamar', '$tgl_masuk', '$tgl_keluar', '$kamar')";
    
     } if (mysqli_query($conn,$query)) {
        $_SESSION['status'] = "Added";
        header("Location: index.php");
    }
    

?>