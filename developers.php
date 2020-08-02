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
        <section id="home" class="bg-color-2" style="background-image: url('./assets/images/pattern_landing-749b136ca10981b2137fcc02e6f0ce59.jpg');background-size: cover;background-position: right;">
            <div class="container-page hero">
                <!--container-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12 col-12">
                            <!--text-->
                            <div class="hero-text text-center">
                                <h1 class="text-white">Introducing Scrow API</h1>
                                <p class="text-white">Explore our guides and examples to integrate Scrow.</p>
                                <a href="./#" class="icobutton icobutton-arrow btn-secttion"><img src="assets/images/icons/arrow.svg" class="hand" alt=""></a>
                            </div>
                            <!--text-->
                        </div>
                    </div>
                </div>
                <!--container-->
            </div>
        </section>

        <!-- about block colored-->
        <section id="about-p" class="pd-tp-80 pd-bt-40 bg-color-3 about-text">
            <!--container-->
            <div class="container">
                <div class="row">
                    <!--text-->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                            <div class="service-block blast-wrapper mg-bt-0">
                                <div class="icon-service bg-icon-2">
                                    <img src="assets/images/icons/icon3.svg" alt="">
                                </div>
                                <h3>Sandbox account</h3>
                                <p>Test your integrations before going live.</p>
                            </div>
                        </div>

                        <!-- service block-->
                        <div class="col-lg-3 col-md-3">
                            <div class="service-block">
                                <div class="icon-service bg-icon-2">
                                    <img src="assets/images/icons/icon2.svg" alt="">
                                </div>
                                <h3>API documentation</h3>
                                <p>Learn how to implement and make the most of our API.</p>
                            </div>
                        </div>
                        <!-- service block-->

                        <!-- service block-->
                        <div class="col-lg-3 col-md-3">
                            <div class="service-block">
                                <div class="icon-service bg-icon-2">
                                    <img src="assets/images/icons/icon1.svg" alt="">
                                </div>
                                <h3>Customer support</h3>
                                <p>We're here to help. Get in touch with any questions.</p>
                            </div>
                        </div>
                        <!-- service block-->

                        <!-- service block-->
                        <div class="col-lg-3 col-md-3">
                            <div class="service-block">
                                <div class="icon-service bg-icon-2">
                                    <img src="assets/images/icons/teamwork.svg" alt="">
                                </div>
                                <h3>API tokens</h3>
                                <p>Easily create and manage your personal tokens.</p>
                            </div>
                        </div>
                        <!-- service block-->

                        </div>
                    </div>
                    <!--number block-->

                </div>
            </div>
            <!--container-->
        </section>
        <!-- about block colored-->

        <!--About app-->
        <section id="about">
            <!--container-->
            <div class="content-text bg-color padd-80">
                <div class="container">
                    <div class="row ">
                        <!-- image-->
                        <div class="col-lg-6 col-md-6 col-12 wow fadeInLeft">
                            <img src="assets/images/image3.png" alt="">
                        </div>

                        <!--image-->
                        <!-- description text-->
                        <div class="col-lg-6 col-md-6 col-12 ">
                            <h2 class="title-h2">Scrow for business</h2>
                            <h3>Speed . Easy . Secure</h3>
                            
                            <p class="font-p mg-tp-30 mg-bt-30">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            </p>

                            <p class="font-p mg-tp-30">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.
                            </p>
                        </div>
                        <!-- description text-->
                    </div>
                </div>
            </div>
            <!--container-->
        </section>

        <!-- call to action -->
        <section id="get-app" class="bg-color-1">
            <div class="container">
                <!--container-->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-12 wow fadeInRight">
                        <div class="padd-40 text-center">
                            <h2 class="title-h2 color-white">Integrate Scrow API</h2>
                            <p class="color-white font-p mg-tp-30 mg-bt-30 font-20">Supported by PHP, JavaScript, &amp; Python, Scrow API is easy to integrate</p>
                            <a href="./" class="btn btn-white">Get Started</a>
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