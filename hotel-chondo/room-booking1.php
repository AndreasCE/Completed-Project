<?php
session_start();
require 'function/db_reservasi.php';

$username     = $_SESSION['username'];
$room         = htmlspecialchars(mysqli_real_escape_string($conn, $_GET['room   ']));
$query        = mysqli_query($conn, "SELECT * FROM `type` WHERE `username`= '$username'");
$res_room     = mysqli_query($conn, "SELECT * FROM kamar WHERE no_kamar = '$room'");
$get_room     = mysqli_query($conn, "SELECT * FROM kamar");
$fetch        = mysqli_fetch_assoc($query);

while ($get_kamar = mysqli_fetch_assoc($res_room)) {
    $kamar[] = $get_kamar;
}
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Chondo Hotel | Room Booking</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="images/apple-touch-icon.png" type="images/x-icon" rel="shortcut icon">
    <!-- Place favicon.ico in the root directory -->

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- customizer style css -->
    <link rel="stylesheet" href="css/style-customizer.css">
    <link href="#" data-style="styles" rel="stylesheet">


    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Pre Loader
	============================================ -->
    <div class="preloader">
        <div class="loading-center">
            <div class="loading-center-absolute">
                <div class="object object_one"></div>
                <div class="object object_two"></div>
                <div class="object object_three"></div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <!--Header section start-->
        <div class="header-section about-us">
            <div class="bg-opacity"></div>
            <div class="top-header sticky-header">
                <div class="top-header-inner">
                    <div class="container">
                        <div class="mgea-full-width">
                            <div class="row">

                                <div class="col-md-10 col-sm-10 hidden-xs">
                                    <div class="header-top ptb-10">
                                        <div class="adresses">
                                            <div class="phone">
                                                <p>call <span>+012 345 678 102 </span></p>
                                            </div>
                                            <div class="email">
                                                <p>Email: <span>info@example.com</span></p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="menu mt-20">
                                        <div class="menu-list hidden-sm hidden-xs">
                                            <nav>
                                                <ul>
                                                    <li><a href="index.php">home</a></li>
                                                    <li><a href="about-us.php">About</a></li>
                                                    <li><a href="gallery.php">Gallery</a></li>
                                                    <li><a href="#">pages<i class="fa fa-angle-down"></i></a>
                                                        <ul class="dropdown_menu">
                                                            <li><a href="room-booking.php">Room booking</a></li>
                                                            <li><a href="gallery.php">Gallery</a></li>
                                                            <li><a href="our-room.php">Room</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="contact-us.php">Contact</a></li>
                                                    <li><a href="room-booking.php">Room booking</a></li>
                                                    <?php if (isset($_SESSION['username'])) { ?>
                                                        <li><a href="#">User | <?= $fetch['username'] ?><i class="fa fa-angle-down"></i></a>
                                                            <ul class="dropdown_menu">
                                                                <li><a href="logout_user.php">Logout</a></li>
                                                            </ul>
                                                        </li>
                                                    <?php } else { ?>
                                                        <li>
                                                            <a href="login_user.php">Login</a>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            </nav>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile menu start -->
                <div class="mobile-menu-area hidden-lg hidden-md">
                    <div class="container">
                        <div class="col-md-12">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="index.html">home</a></li>
                                    <li><a href="about-us.html">About</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="#">pages</a>
                                        <ul>
                                            <li><a href="404.html">404</a></li>
                                            <li><a href="booking-information.html">Booking Information</a></li>
                                            <li><a href="personal-information.html">Personal Information</a></li>
                                            <li><a href="payment-information.html">Parment Information</a></li>
                                            <li><a href="booking-done.html">Booking Done</a></li>
                                            <li><a href="room-booking.html">Room booking</a></li>
                                            <li><a href="news.html">News</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="staff.html">Staff</a></li>
                                            <li><a href="our-room.html">Room</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact-us.html">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Mobile menu end -->
            </div>
            <!--Welcome secton-->
            <div class="welcome-section text-center ptb-110">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcurbs-inner">
                                <div class="breadcrubs">
                                    <h2>Booking</h2>
                                    <div class="breadcrubs-menu">
                                        <ul>
                                            <li><a href="#">Home<i class="mdi mdi-chevron-right"></i></a></li>
                                            <li>Booking</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--Header section end-->
        <!-- search bar Start -->

        <!-- search bar End -->
        <!--room booking start-->
        <div class="room-booking ptb-100 white_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="booking_form">
                            <div class="form-title">
                                <h2>Book A Room</h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority ve sffered alteration in some form, by injected humour</p>
                            </div>
        
                            <div class="room-booking-box">
                                <form method="POST" action="booking.php" >
                                <?php foreach ($kamar as $row) : ?>
                                    <div class="booking-box1 mb-15 fix">
                                        <div class="booking-filed">
                                            <input type="text" placeholder="your name" name="nama" required id="nama">
                                        </div>
                                    </div>
                                    <div class="booking-box2 mb-15 fix">
                                        <div class="b_date">
                                            <input class="date-picker" name="tgl_in" name="tgl_in" required type="text" placeholder="Arrive Date" id="tgl_in">
                                            <i class="mdi mdi-calendar-text"></i>
                                        </div>
                                        <div class="b_date">
                                            <input class="date-picker" name="tgl_out" name="tgl_out" required type="text" placeholder="Departure Date" id="tgl_out">
                                            <i class="mdi mdi-calendar-text"></i>
                                        </div>
                                    </div>
                                    <div class="select-book mb-15 fix">
                                        <select name="jml_kamar" id="tipe">
                                            <option value="0" selected>Jumlah kamar</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                    <div class="select-book mb-15 fix">
                                        <select name="kamar" id="type">
                                            <option value="<?= $row['tipe_kamar'] ?>" selected><?= $row['tipe_kamar'] ?></option>
                                            <?php while ($res = mysqli_fetch_assoc($get_room)) : ?>
                                                <option value="<?= $res['tipe_kamar'] ?>"><?= $res['tipe_kamar'] ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                    <div class="booking-comment mb-15 fix">
                                        <input id="price" name="harganya" type="text" placeholder="price" value="<?= $row['harga'] ?>" disabled></input>
                                    </div>
                                    <div class="submit-form mt-25">
                                        <button type="submit" name="submit">Check Availability</button>
                                    </div>

                                <?php endforeach; ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="selcted-room">
                            <div class="select-room-inner">
                                <div class="select-room-title">
                                    <h3>Selected Room</h3>
                                    <p>There are many variations of passages of Lorem Ipsum available,</p>
                                </div>
                               
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--room booking end-->

        <!--hotel team start-->

        <!--hotel team end-->
        <!--Footer start -->
        <div class="footer ptb-100">
            <div class="footer-bg-opacity"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="single-footer mt-0">
                            <div class="f-adress">
                                <p><span>Address:</span> Batujajar No.275</p>
                            </div>
                            <div class="hotel-contact">
                                <p><span>phone:</span> 99 55 88586 5478.</p>
                                <p><span>Email:</span>ligma321654@gmail.com </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-sm col-xs-6">
                        <div class="single-footer">
                            <h3>Quick Links</h3>
                            <div class="quick-item">
                                <ul>
                                    <li><a href="#">Rooms</a></li>
                                    <li><a href="#">Food & Drinks</a></li>
                                    <li><a href="#">Manifesto</a></li>
                                    <li><a href="#">Beach Venues</a></li>
                                    <li><a href="#">Wellness</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="copyright ptb-20 white_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8 col-xs-12">
                        <p>Copyright© CHONDO 2018.All right reserved.Created by Andreas</p>
                    </div>
                    <div class="col-md-6 col-sm-4 col-xs-12">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Term of use</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer end -->
    </div>





    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!--counter up js-->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Video player js -->
    <script src="js/video-player.js"></script>
    <!-- headlines js -->
    <script src="js/animated-headlines.js"></script>
    <!-- Ajax mail js -->
    <script src="js/mailchimp.js"></script>
    <!-- Ajax mail js -->
    <script src="js/ajax-mail.js"></script>
    <!-- parallax js -->
    <script src="js/parallax.js"></script>
    <!-- textilate js -->
    <script src="js/textilate.js"></script>
    <script src="js/lettering.js"></script>
    <!--isotope js-->
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/packery-mode.pkgd.min.js"></script>
    <!-- Style Customizer Js  -->
    <script src="js/style-customizer.js"></script>
    <!-- Owl carousel Js -->
    <script src="js/owl.carousel.min.js"></script>
    <!--Magnificant js-->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>
    <!-- Jquery -->
    <script src="js/vendor/jquery-3.6.0.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#type').change(function() {
                $.ajax({
                    url: "process_data.php",
                    method: "POST",
                    data: {
                        "tipe_kamar": $(this).val()
                    },
                    success: function(r) {
                        let sp = r.split('/');

                        $('#price').val(sp[0]);
                        $('#price_selected').text('Rp. ' + sp[0]);
                        $('#type_kamar').text(sp[1]);
                        $('#img').attr("src", "images/room/" + sp[2]);
                    }
                });
            });
        });
    </script>
</body>

</html>