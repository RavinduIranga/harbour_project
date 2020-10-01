<!doctype html>
<?php
session_start();
include_once 'assets/PHP/DB.php';


?>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Personal HTML-5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
                <div class="main-header  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <a href="index.php"><p style="font-family:Connection;font-size: 20px;">Vessel Port System</p></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">

                                <div class="menu-main d-flex align-items-center justify-content-end">


                                    <?php if (!isset($_SESSION['user_email'])) {

                                        echo "     
                    
                                                        <!-- Main-menu -->
                                    <div class=\"main-menu f-right d-none d-lg-block\">
                                        <nav>
                                            <ul id=\"navigation\">
                                                <li><a href=\"index.php\">Home</a></li>
                                                <li><a href=\"about.php\">About</a></li>
                                                <li><a href=\"contact.php.php\">Contact</a></li>

                                            </ul>
                                        </nav>
                                    </div>
                                    <div class=\"header-right-btn f-right d-none d-xl-block ml-20\">
                                        <a href=\"login.php\" class=\"btn header-btn\">Login or Sign in</a>
                                    </div>


                    
                    
                    
                    
                    
                    ";
                                    } else {

                                        echo "     
                    
           
                                                        <!-- Main-menu -->
                                    <div class=\"main-menu f-right d-none d-lg-block\">
                                        <nav>
                                            <ul id=\"navigation\">
                                                <li><a href=\"index.php\">Home</a></li>
                                                <li><a href=\"userPanel/index.php\">User</a></li>

                                            </ul>
                                        </nav>
                                    </div>
                                    <div class=\"header-right-btn f-right d-none d-xl-block ml-20\">
                                        <a href=\"logout.php\" class=\"btn header-btn\">Logout</a>
                                    </div>

                    
                    
                    
                    ";


                                    }

                                    ?>











                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Header End -->
    </header>
    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="hero__capton">
                                    <span data-animation="fadeInUp" data-delay=".4s">well come to the home page</span>
                                    <h1 data-animation="fadeInUp" data-delay=".6s">We simplify the process </h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay=".4s">Get Every Single Solutions.</span>
                                    <h1 data-animation="fadeInUp" data-delay=".6s">I’m Designer Haris F. Watson</h1>
                                    <P data-animation="fadeInUp" data-delay=".8s" >jhorem rfpsum golor sidt amet, consectetur adipiscing elit, eiusmod tempor incididunt utcjhg labore bet dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</P>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="industries.html" class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s">Learn More</a>
                                        <a href="industries.html" class="btn border-btn ml-15" data-animation="fadeInRight" data-delay="1.0s">Hire Me</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- About Area start -->
        <section class="about-area section-paddingt30">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-5">
                        <div class="about-caption mb-50">
                            <h3>Designing With Passion While Exploring The World.</h3>
                            <p class="pera1">Consectetur adipiscing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua. Quis ipsum suspendisces gravida. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus.</p>
                            <p>Consectetur adipiscing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua. </p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="about-caption2">
                            <h3>Any Type Of Query<br> & Discussion.</h3>
                            <p>Late talk with me</p>
                           <div class="send-cv">
                                <a href="#">hire@colorlib.com</a>
                                <i class="ti-arrow-right"></i>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!-- Categories Area Start -->
        <section class="categories-area section-padding3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-70">
                            <h2>What Services you will Get from me!</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-pen"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.php">UI/UX Design</a></h5>
                                <p>Free resource that will help nderstand thecv designc process and improve theroi  nderstand the design process andisei impro are of vquality.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-speaker"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.php">Digital Marketing</a></h5>
                                <p>Free resource that will help nderstand thecv designc process and improve theroi  nderstand the design process andisei impro are of vquality.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-portfolio"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.php">Website Design</a></h5>
                                <p>Free resource that will help nderstand thecv designc process and improve theroi  nderstand the design process andisei impro are of vquality.</p>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </section>
        <!-- Categories Area End -->
        <!-- Services Area Start -->
        <section class="services-area  services-padding">
            <div class="container">

            </div>
        </section>
        <!-- Services Area End -->
        <!-- Want To Work Start -->
        <section class="wantToWork-area w-padding2">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-8 col-md-8">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>Dont worry for contact i`m available</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <a href="#" class="btn btn-black f-right">Contact Me Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To Work End -->

        <!-- client-comments -->
        <section class="client-comments section-paddingt30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-70">
                            <h2>Some Possitive Feedback  That Encourage Us</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- latest-blog-area start -->
            <div class="latest-blog-area">
                <div class="container">
                    <div class="custom-row">
                        <div class="blog-active">
                            <!-- single-items -->
                            <div class="col-xl-4">
                                <div class="blog-wrapper">
                                    <div class="blog-inner">
                                    <div class="blog-top">
                                            <div class="person-img">
                                                <img src="assets/img/gallery/blog1.png" alt="">
                                            </div>
                                            <div class="comment-person">
                                                <h2>Bradley Erickson</h2>
                                                <span>UI/UX Designer</span>
                                            </div>
                                    </div>
                                        <p>Consectetur adipisicing elit, seddosdoe eiusmod tempor incididunt utore etstes dolore magna aliqua. Ut imminim restai veniam, quis nostrud.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single-items -->
                            <div class="col-xl-4">
                                <div class="blog-wrapper">
                                    <div class="blog-inner">
                                    <div class="blog-top">
                                            <div class="person-img">
                                                <img src="assets/img/gallery/blog2.png" alt="">
                                            </div>
                                            <div class="comment-person">
                                                <h2>Bradley Erickson</h2>
                                                <span>UI/UX Designer</span>
                                            </div>
                                    </div>
                                        <p>Consectetur adipisicing elit, seddosdoe eiusmod tempor incididunt utore etstes dolore magna aliqua. Ut imminim restai veniam, quis nostrud.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single-items -->
                            <div class="col-xl-4">
                                <div class="blog-wrapper">
                                    <div class="blog-inner">
                                    <div class="blog-top">
                                            <div class="person-img">
                                                <img src="assets/img/gallery/blog3.png" alt="">
                                            </div>
                                            <div class="comment-person">
                                                <h2>Bradley Erickson</h2>
                                                <span>UI/UX Designer</span>
                                            </div>
                                    </div>
                                        <p>Consectetur adipisicing elit, seddosdoe eiusmod tempor incididunt utore etstes dolore magna aliqua. Ut imminim restai veniam, quis nostrud.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single-items -->
                            <div class="col-xl-4">
                                <div class="blog-wrapper">
                                    <div class="blog-inner">
                                    <div class="blog-top">
                                            <div class="person-img">
                                                <img src="assets/img/gallery/blog2.png" alt="">
                                            </div>
                                            <div class="comment-person">
                                                <h2>Bradley Erickson</h2>
                                                <span>UI/UX Designer</span>
                                            </div>
                                    </div>
                                        <p>Consectetur adipisicing elit, seddosdoe eiusmod tempor incididunt utore etstes dolore magna aliqua. Ut imminim restai veniam, quis nostrud.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End latest-blog-area -->
        </section>
        <!-- Brand Area Start -->
        <div class="brand-area pb-bottom">
            <div class="container">
                <div class="brand-active brand-border pt-50 pb-40">
                    <div class="single-brand">
                        <img src="assets/img/gallery/brand1.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="assets/img/gallery/brand2.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="assets/img/gallery/brand3.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="assets/img/gallery/brand4.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="assets/img/gallery/brand2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Area End -->
        <!-- Contact Info Start -->
        <section class="contact-info-area w-padding2" data-background="assets/img/gallery/section_bg04.jpg">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-7">

                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <form action="#" class="contact-wrapper">
                            <input type="text" name="name" placeholder="Full Name">
                            <input type="email" name="email" placeholder="Email Address">
                            <textarea name="message" id="message" placeholder="Your Message"></textarea>
                            <button class="submit-btn2" type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Info End -->

    </main>
    <footer>
        <!-- Footer Start-->

        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>

        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>

    </body>
</html>