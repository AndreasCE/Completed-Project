<?php
session_start();
require 'function/db_reservasi.php';
error_reporting(0);
$username     = $_SESSION['username'];
$checkuser    = mysqli_query($conn, "SELECT * FROM `user` WHERE `username`='$username'");
$fetch        = mysqli_fetch_assoc($checkuser);

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Chondo Hotel | Contact us</title>
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
                                    <h2>Contact us</h2>
                                    <div class="breadcrubs-menu">
                                        <ul>
                                            <li><a href="#">Home<i class="mdi mdi-chevron-right"></i></a></li>
                                            <li>Contact us</li>
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
        <!--Conatct form area Start-->
        <div class="contact-form-info ptb-100 white_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="contact-form">
                            <div class="contact-form-title mb-25">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="contact-info">
                            <div class="contact-info-title mb-25"><h3>contact info</h3></div>
                            <div class="contact-adresses">
                                <div class="phone mb-15">
                                    <p>
                                        <span><i class="mdi mdi-phone"></i></span>
                                        <span class="desc">+012 345 678 102 </span>
                                    </p>
                                </div>
                                <div class="mail mb-15">
                                    <p>
                                    <span><i class="mdi mdi-email"></i></span>
                                    <span class="desc">ligma321654@gmail.com</span>
                                    </p>
                                </div>
                                <div class="addresses">
                                    <p>
                                        <span><i class="mdi mdi-map-marker"></i></span>
                                        <span class="desc">Batujajar Barat Jl. Panca Tengah</span>
                                    </p>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Conatct form area end-->
        <!--Google Map Area Start-->
        <div class="google-map-area">
            <!--  Map Section -->
            <div id="contacts" class="map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7921.506044847612!2d107.49359773569672!3d-6.920101437231636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e544d34b1c41%3A0x574cb0fe48c25531!2sBatujajar%20Bar.%2C%20Kec.%20Batujajar%2C%20Kabupaten%20Bandung%20Barat%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1647971038099!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        <!--hotel team start-->
        
        <!--hotel team end-->    
        </div>
        <!--End of Google Map Area-->
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
                                <p><span>Email:</span>ligma321654@gmail.com/p>
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






    
    
    
     <!-- Google Map js
		============================================ --> 		
        
		<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key= AIzaSyAj9b_nyz33KEaocu6ZOXRgqwwUZkDVEAw"></script>
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script>
			function initialize() {
			  var mapOptions = {
				zoom: 15,
				scrollwheel: false,
				center: new google.maps.LatLng(23.752831, 90.362238)
			  };

			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);


			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				animation:google.maps.Animation.BOUNCE,
				icon: 'images/map-marker.png',
				map: map
			  });
                
			}
                
			google.maps.event.addDomListener(window, 'load', initialize);
		</script> -->
    
    
 
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