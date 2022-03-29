<?php 
include "../function/db_reservasi.php";



?>
<?php
include "../function/db_reservasi.php";
				$id = $_GET['edit']; //mengambil id barang yang ingin diubah

				//menampilkan barang berdasarkan id
				$data = mysqli_query($conn, "select * from booking where id_user = '$id'");
				$row = mysqli_fetch_assoc($data);

				?>

<?php 
                                if (isset($_POST['submit'])) {
                                    //menampung data dari inputan
                                    $id= $_GET['edit'];
                                    $nama = $_POST['nama'];
                                    $jml_orang = $_POST['jml_orang'];
                                    $jml_kamar = $_POST['jml_kamar'];
                                    $tgl_keluar = $_POST['tgl_out'];
                                    $tgl_masuk = $_POST['tgl_in'];
                                    $kamar = $_POST['kamar'];
                                
                                    mysqli_query($conn, "UPDATE booking set nama = '$nama', jml_orang = '$jml_orang', jml_kamar = '$jml_kamar', tgl_keluar = '$tgl_keluar', tgl_masuk = '$tgl_masuk', kamar = '$kamar' where id_user = '$id' ") or die(mysqli_error($conn));
                               
                                }
                                
                                ?>
<html>
	<head>
		<title>Edit</title>
	</head>
<body>
<div class="room-booking ptb-100 white_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="booking_form">

                            <div class="room-booking-box">
                                <form action="" method="POST">
                                

                                    <div class="booking-box1 mb-15 fix">
                                        <div class="booking-filed">
                                            <input type="text" name="nama" value="<?= $row['nama'] ?>" placeholder="your name" >
                                        </div>
                                    </div>
                                    <div class="booking-box2 mb-15 fix">
                                        <div class="b_date">
                                            <input class="date-picker" type="date" value="<?= $row['tgl_masuk'] ?>" placeholder="Arrive Date" name="tgl_in">
                                            <i class="mdi mdi-calendar-text"></i>
                                        </div>
                                        <div class="b_date">
                                            <input class="date-picker" type="date" value="<?= $row['tgl_keluar'] ?>" placeholder="Departure Date" name="tgl_out">
                                            <i class="mdi mdi-calendar-text"></i>
                                        </div>
                                    </div>
                                    <div class="select-book mb-15 fix">
                                        <select name="jml_kamar" value="<?= $row['jml_kamar'] ?>" id="type">
                                            <option value="<?= $row['jml_kamar'] ?>" selected ><?= $row['jml_kamar'] ?></option>
                                                <option value="1" >1</option>
                                                <option value="2" >2</option>
                                                <option value="3" >3</option>
                                        </select>
                                </div>
                                        </select>
                                        <div class="select-book mb-15 fix">
                                        <select name="jml_orang" value="<?= $row['jml_orang'] ?>" id="type">
                                            <option value="<?= $row['jml_orang'] ?>" selected ><?= $row['jml_orang'] ?></option>
                                                <option value="1" >1</option>
                                                <option value="2" >2</option>
                                                <option value="3" >3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="select-book mb-15 fix">
                                        <select name="kamar" value="<?= $row['kamar'] ?>" id="type">
                                            <option value="<?= $row['kamar'] ?>" selected disabled><?= $row['kamar'] ?></option>

                                            <option value="Standart" >Standart</option>
                                            <option value="Superior" >Superior</option>
                                                <option value="Deluxe">Deluxe</option>
                                        </select>
                                    </div>
                                    <div class="submit-form mt-25">
                                        <button type="submit" name="submit" class="btn btn-danger" >Edit</button>
					    <a href="index.php" class="btn btn-primary" >Kembali</button
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</body>
</html>

