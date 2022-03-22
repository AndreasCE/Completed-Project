<?php
$mysqli = new mysqli('localhost','root','','db_reservasi') or die(mysqli_error($mysqli));

$update = false;
$nama = '';
$jml_orang = '';
$jml_kamar = '';
$tgl_keluar = '';
$tgl_masuk = '';

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
$jml_orang = $_POST['jml_orang'];
$jml_kamar = $_POST['jml_kamar'];
$tgl_keluar = $_POST['tgl_in'];
$tgl_masuk =$_POST['tgl_out'];
$kamar = $_POST['kamar'];

$mysqli -> query("INSERT into booking (nama, jml_orang, jml_kamar, tgl_masuk, tgl_keluar, kamar) VALUES ('$nama', '$jml_orang', '$jml_kamar', '$tgl_masuk', '$tgl_keluar', '$kamar')") or die($mysqli->error);

$_SESSION['message'] = "has been added";
$_SESSION['message_type'] = "success";

header("Location: index.php");
}
if (isset($_GET['deletes'])) {
    $id = $_GET['deletes'];
    $mysqli->query("DELETE FROM booking where id_user = $id ") or die(mysqli_error($mysqli));
    $_SESSION['message'] = "deleted";
    $_SESSION['message_type'] ="danger";

    header("Location: index.php");
}
if (isset($_POST['submit'])) {
    //menampung data dari inputan
    $id= $_GET['id_user'];
    $nama = $row['nama'];
    $jml_orang = $row['jml_orang'];
    $jml_kamar = $row['jml_kamar'];
    $tgl_keluar = $row['tgl_keluar'];
    $tgl_masuk = $row['tgl_masuk'];
    $kamar = $row['kamar'];

    mysqli_query($koneksi, "UPDATE FROM booking where id_user = $id ") or die(mysqli_error($conn));



    echo "<script>alert('data berhasil disimpan.');window.location='index.php';</script>";
}
?>