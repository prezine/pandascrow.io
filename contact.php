<!DOCTYPE html>
<html lang="en">

<head>
    <!--Metas-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Scrow - A place for higher humans">
    <title>Developers with Scrow</title>

    <!--External Stylesheets css-->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--Slick -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- Magnific Popup-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--Template Stylesheets css-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <script src="assets/js/modernizr.js"></script>
    <!--[if lt IE 9]>
  <script src="assets/js/html5shiv.min.js"></script>
  <script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>

<body data-spy="scroll" data-target=".navbar-default" data-offset="100">
    <!-- Page Preloader -->
    <div id="loading-page">
        <div id="loading-center-page">
            <div id="loading-center-absolute">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- Page Preloader -->

    <!-- Page Content -->
    <div class="warpper clearfix">
        <!--sidebar menu-->
        <a href="./#menu-nav" class="menu-nav-trigger">
            Menu 
            <span class="menu-nav-icon"></span>
            <svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
                <circle fill="transparent" stroke="#656e79" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
            </svg>
        </a>

       <?php 
        include_once 'widgets/nav.php'; 
        include_once 'widgets/inner-header.php';
       ?>
        <!--Header-->

        <!--Begin Hero Section-->
        <section id="home" class="bg-color-2">
            <div class="container-page  hero">
                <!--container-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12 col-12">
                            <!--text-->
                            <div class="hero-text text-center">
                                <h1 class="text-white">We’re happy to help!</h1>
                                <p class="text-white">Need a quick answer? Enter your question below for instant responses.</p>
                                <!--<a href="./#" class="icobutton icobutton-arrow btn-secttion"><img src="assets/images/icons/arrow.svg" class="hand" alt=""></a>-->
                                 <!-- table -->
                            <div class="table-price clearfix col-md-12 col-lg-12 wow fadeInUpBig">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">
                                        <div class="pricing-container">
                                            <div class="row pr-4 pl-4">
                                                <!--table plan -->
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <p class="float-left">What would you like to ask?</p>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="eg. What is a Scrow Identification Number?">
                                                    </div>
                                                    <p class="float-right info-text">Hit enter to search 🎁</p>
                                                    
                                                </div>
                                                <!--table plan -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- table -->
                            </div>
                            <!--text-->
                        </div>
                    </div>
                </div>
                <!--container-->
            </div>
        </section>

        <!--contact-->
        <section id="contact" class=" padd-80">

            <!--container-->
            <div class="container">
                <div class="contact-inner">
                    <div class="row-centered">
                        <div class="col-centered col-lg-7">
                            <h2 class="title-h2">Have any question? </h2>
                            <p class="font-p mg-tp-30 mg-bt-60 "> Of course, we'd love to help </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-md-6 col-sm-6 col-lg-6 col-12">
                            <div class="content-info">
                                <div id="errno"></div>
                                <form action="./#" id="contactscrow" method="post">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="4" id="message" cols="3" placeholder="Your message "></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-blue" id="contactbtn">Send message </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class=" col-md-6 col-sm-6 col-lg-6 col-12">
                            <div class="info-icon">
                                <div class="icon-contact bg-icon-4">
                                    <img src="assets/images/icons/map.svg" alt="">
                                </div>
                                <div class="content-contact">
                                    <h3>Adress</h3>
                                    <p>41 Woji Road, GRA, Port Harcourt. NG 500027</p>
                                </div>
                            </div>

                            <div class="info-icon">
                                <div class="icon-contact bg-icon-2">
                                    <img src="assets/images/icons/phone.svg" alt="">
                                </div>

                                <div class="content-contact">
                                    <h3>Phone</h3>
                                    <p>+234 8179 685 649</p>
                                </div>
                            </div>

                            <div class="info-icon">
                                <div class="icon-contact bg-icon-3">
                                    <img src="assets/images/icons/email.svg" alt="">
                                </div>
                                <div class="content-contact">
                                    <h3>E-mail</h3>
                                    <p>hello@pandascrow.io</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--container-->
        </section>
        <!--contact-->

        <!-- call to action -->
        <section id="get-app" class="bg-color-1">
            <div class="container">
                <!--container-->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-12 wow fadeInRight">
                        <div class="padd-40 text-center">
                            <h2 class="title-h2 color-white">Frequently Asked Questions</h2>
                            <p class="color-white font-p mg-tp-30 mg-bt-30 font-20">In our library of well documented resource, you can find, guides or answers to FAQ</p>
                            <a href="./" class="btn btn-white">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--container-->
        </section>
        <!-- call to action -->

    </div>

    <!-- Footer-->
    <?php include_once './widgets/footer.php'; ?>

    <!--Footer -->
    <!-- jQuery -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap Plugins -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.easing.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/mo.min.js"></script>
    <!-- Main js -->
    <script src="assets/js/main.js"></script>
</body>