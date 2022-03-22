<?php
session_start();
require 'function/db_reservasi.php';
error_reporting(0);
$username     = $_SESSION['username'];
$checkuser    = mysqli_query($conn, "SELECT * FROM user WHERE username ='$username'");
$room         = mysqli_query($conn, "SELECT * FROM kamar");
$fetch        = mysqli_fetch_assoc($checkuser);

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Chondo Hotel</title>
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
        <div class="header-section">
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
                                                <p>Email: <span>ligma321654@gmail.com</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu mt-25">
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
            <div class="welcome-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-7">
                            <div class="welcome-text">
                                <h2>
                                    <span>WELCOME TO</span> <span class="coloring">Chondo</span>
                                </h2>
                                <h1 class="cd-headline clip">
                                    <span>THE PERFECT</span>
                                    <span class="cd-words-wrapper coloring">
                                        <b class="is-visible"> LOCATION</b>
                                        <b>Room</b>
                                        <b>places</b>
                                    </span>
                                </h1>
                                <p class="welcome-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header section end -->
        <!-- searchbar Start -->
        <div class="search-bar animated slideOutUp">
            <div class="table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <div class="search-form-wrap">
                                    <button class="close-search"><i class="mdi mdi-close"></i></button>
                                    <form action="#">
                                        <input type="text" placeholder="Search here..." value="Search here..." />
                                        <button class="search-button" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- search bar End -->
        <!--About Section Title start-->
        <div class="about-section text-center ptb-80 white_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-80">
                            <h2>About <span>Chondo</span></h2>
                            <p>There are many variations of passages are available, but the majority have suffered by injected humour.</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="about-chondo">
                            <div class="about-member">
                                <img src="images/about.jpg" alt="">
                                <h3>Andreas</h3>
                                <h5 class="mb-0">hrd head</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--About Section end-->
        <!--Our Room start-->
        <div class="our-room text-center ptb-80 white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-75">
                            <h2>our <span>Room</span></h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered by injected humour.</p>
                        </div>
                    </div>
                </div>
                <div class="our-room-show">
                    <div class="row">
                        <div class="carousel-list">
                            <?php while ($row = mysqli_fetch_assoc($room)) : ?>
                                <div class="col-md-4">
                                    <div class="single-room">
                                        <div class="room-img">
                                            <a href="#"><img class="img-fluid" src="images/room/<?= $row['images'] ?>" height="370px"></a>
                                        </div>
                                        <div class="room-desc">
                                            <div class="room-name">
                                                <h3><a href="#"><?= $row['tipe_kamar'] ?></a></h3>
                                            </div>
                                            <div class="room-rent">
                                                <h5>Rp.<?= $row['harga'] ?> / <span>Night</span></h5>
                                            </div>
                                            <div class="room-book">
                                                <a href="room-booking.php?room=<?= $row['no_kamar'] ?>">Book now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-gallery text-center ptb-80 white_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-80">
                            <h2>our <span>Gallery</span></h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered by injected humour.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="our-gallery-photo">
                <div class="single-gallery">
                    <img src="images/gallery/g-1.jpg" height="280px" alt="">
                </div>
                <div class="single-gallery">
                    <img src="images/gallery/g-2.jpg" height="280px" alt="">
                </div>
                <div class="single-gallery">
                    <img src="images/gallery/g-3.jpg" height="280px" alt="">
                </div>
                <div class="single-gallery">
                    <img src="images/gallery/g-4.jpg" height="280px" alt="">
                </div>
                <div class="single-gallery">
                    <img src="images/gallery/g-5.jpg" height="280px" alt="">
                </div>
            </div>
        </div>
        <!--Our gallery end-->
        <!--Our news start-->

        <!--Our news end-->
        <!--Hotel communities start-->
        <div class="hotel-cmmunities ptb-100 text-center">
            <div class="community-bg-opacity"></div>
            <div class="container">
                <div class="row">
                    <div class="communities-list">
                        <div class="single-commmunites">
                            <h1 class="counter">500</h1>
                            <h2>Customer</h2>
                        </div>
                        <div class="single-commmunites">
                            <h1 class="counter">200</h1>
                            <h2>clecbrities</h2>
                        </div>
                        <div class="single-commmunites">
                            <h1 class="counter">850</h1>
                            <h2>return</h2>
                        </div>
                        <div class="single-commmunites hidden-xs">
                            <h1 class="counter">1250</h1>
                            <h2>Happy people</h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--Hotel communities end-->
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
                                <p><span>Address:</span>Batujajar Barat Jl. Panca Tengah</p>
                            </div>
                            <div class="hotel-contact">
                                <p><span>phone:</span> 99 55 88586 5478.</p>
                                <p><span>Email:</span>ligma321654@gmail.com</p>
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
                        <p>Copyright© CHONDO 2018.All right reserved.Created by Andreas</a></p>
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

</body>

</html>