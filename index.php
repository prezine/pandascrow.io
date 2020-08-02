<!DOCTYPE html>
<html lang="en">

<head>
    <!--Metas-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Scrow - Modern Escrow System for Africa">
    <title>Scrow - Modern Escrow System for Africa</title>

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
            include_once 'widgets/header.php';
        ?>

        <!--Begin Hero Section-->

        <section id="home">
            <div class="container-page  hero">
                <!--container-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xs-6 col-sm-6 col-12">
                            <!--text-->
                            <div class="hero-text">
                                <h1>Modern Escrow System for Africa</h1>
                                <p>Stay safe, transparent & secure with scrow, protect yourself from fraud over anonymous transactions</p>
                                <div class="quote-form">
                                    <input type="text" name="email" class="form-control" placeholder="E-mail Adress">
                                    <button type="submit" class="btn btn-form">Get Started</button>
                                </div>
                                <a href="./#" class="icobutton icobutton-arrow btn-secttion"><img src="assets/images/icons/arrow.svg" class="hand" alt=""></a>
                            </div>
                            <!--text-->
                        </div>
                        <div class="col-md-6 col-xs-6 col-sm-6 col-12">
                            <!-- slider image -->
                            <div class="slider-image text-right">
                                <img src="assets/images/image1.png" alt="">
                                <img src="assets/images/image2.png" alt="">
                            </div>
                            <!-- slider image -->
                        </div>
                    </div>
                </div>
                <!--container-->
            </div>
        </section>

        <!-- about block colored-->

        <section id="about-p" class="pd-tp-80 pd-bt-40 bg-color-1 about-text">
            <!--container-->
            <div class="container">
                <div class="row">
                    <!--text-->
                    <div class="col-md-5 col-lg-5 col-sm-12 col-12">
                        <h2 class="text-center">Building a business is hard. Getting paid shouldn't be.</h2>
                    </div>
                    <!--text-->
                    <!--number block-->
                    <div class="col-md-6 col-lg-6 col-sm-12 offset-md-1 col-12">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 col-sm-12 col-12">
                                <div class="icon-text">
                                    <img src="assets/images/icons/favorites.svg" class="animate-icon" alt="">
                                    <h3>4.2+ Rating</h3>
                                    <span>Reviews</span>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-sm-12 col-12">
                                <div class="icon-text">
                                    <img src="assets/images/icons/secure-shield.svg" alt="">
                                    <h3>Secure</h3>
                                    <span>Approved since 2020</span>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-sm-12 col-12">
                                <div class="icon-text">
                                    <img src="assets/images/icons/headphones.svg" alt="">
                                    <h3>Support</h3>
                                    <span>Average 1 min response</span>
                                </div>
                            </div>
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
                            <h2 class="title-h2">Why choose Scrow</h2>
                            <h3>Safe . Ease . Flexible</h3>
                            <p class="font-p mg-tp-30 mg-bt-30">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            </p>

                            <ul class="list-text">
                                <li><img src="assets/images/icons/padlock.svg" alt="">
                                    <p>Secure transaction with 99.9% guarantee</p>
                                </li>
                                <li><img src="assets/images/icons/credit-card.svg" alt="">
                                    <p>Easily make payment</p>
                                </li>

                                <li><img src="assets/images/icons/investment.svg" alt="">
                                    <p>Almost free with very little cost</p>
                                </li>
                            </ul>
                        </div>
                        <!-- description text-->
                    </div>
                </div>
            </div>
            <!--container-->
        </section>

        <!--Features -->

        <section id="features">
            <div class="padd-80">
                <!--container-->
                <div class="container">
                    <div class="row">
                        <div class="row-centered">
                            <div class="col-centered col-lg-7">
                                <!--text-->
                                <h2 class="title-h2 mg-bt-30">A wide choice of ways to process transactions online</h2>
                                <!--text-->
                            </div>
                        </div>
                        
                        <!-- service block-->
                        <div class="col-lg-4 col-md-6">
                            <div class="service-block blast-wrapper mg-bt-0">
                                <div class="icon-service bg-icon-1">
                                    <img src="assets/images/icons/dollar-sign.svg" alt="">
                                </div>
                                <h3>One-time Payment</h3>
                                <p>A customized payment for that one client, with a unique pay url.</p>
                            </div>
                        </div>

                        <!-- service block-->
                        <div class="col-lg-4 col-md-6">
                            <div class="service-block">
                                <div class="icon-service bg-icon-2">
                                    <img src="assets/images/icons/bars-chart.svg" alt="">
                                </div>
                                <h3>Milestone Payment</h3>
                                <p>A Payment in fractions, with clearly define pay list binded by escrow.</p>
                            </div>
                        </div>

                        <!-- service block-->

                        <!-- service block-->
                        <div class="col-lg-4 col-md-6">
                            <div class="service-block">
                                <div class="icon-service bg-icon-3">
                                    <img src="assets/images/icons/teamwork.svg" alt="">
                                </div>
                                <h3>Crowd Payment</h3>
                                <p>A Goal driven payment option, with a unique pay url, binded by escrow.</p>
                            </div>
                        </div>
                        <!-- service block-->

                        <!-- service block-->
                        <div class="col-lg-4 col-md-6">
                            <div class="service-block blast-wrapper mg-bt-0">
                                <div class="icon-service bg-icon-2">
                                    <img src="assets/images/icons/mobile.svg" alt="">
                                </div>
                                <h3>POS Payment</h3>
                                <p>Pay with mobile scan QR, efficient for POS services, not binded by escrow</p>
                            </div>
                        </div>
                        <!-- service block-->

                        <!-- service block-->
                        <div class="col-lg-4 col-md-6">
                            <div class="service-block mg-bt-0">
                                <div class="icon-service bg-icon-4">
                                    <img src="assets/images/icons/cart.svg" alt="">
                                </div>
                                <h3>Product Pay</h3>
                                <p>An extended payment from scrow mini-store, from unique generic payurl per product</p>
                            </div>
                        </div>
                        <!-- service block-->
                    
                    </div>
                </div>
                <!--container-->
            </div>
        </section>

        <!--Features -->

        <!--Pricing -->

        <section id="video-features">

            <div class="container-page padd-80 video-bloc">
                <!--container-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <!-- text -->
                            <div class="text-center">
                                <h2 class="title-h2">Pricing</h2>
                            </div>
                            <!-- text -->

                            <!-- table -->
                            <div class="table-price clearfix col-md-12 col-lg-12 wow fadeInUpBig">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">
                                        <div class="pricing-container">
                                            <div class="row p-4">
                                                <!--table plan -->
                                                <div class="col-md-12 col-lg-12 col-xs-12">
                                                    <div class="pricing-nav">
                                                        <ul id="fundtoggler">
                                                            <li class="active" data-sort="deposit">Sending Funds</li>
                                                            <li data-sort="withdraw">Withdrawing Funds</li>
                                                        </ul>
                                                    </div>
                                                    <!-- Sending Funds Tab -->
                                                    <div class="row p-4 pricingframe" id="deposit">
                                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                                            <p>Enter transaction amount</p>

                                                            <div class="input-group mb-2">
                                                              <div class="input-group-prepend">
                                                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">NGN</button>
                                                                <div class="dropdown-menu">
                                                                  <a class="dropdown-item" href="#">USD</a>
                                                                  <a class="dropdown-item" href="#">NGN</a>
                                                                  <a class="dropdown-item" href="#">EUR</a>
                                                                  <div role="separator" class="dropdown-divider"></div>
                                                                  <a class="dropdown-item" href="#">BTC</a>
                                                                </div>
                                                              </div>
                                                              <input type="text" class="form-control" onkeyup="pricing.sendercalc(this.value)" placeholder="Enter amount" aria-label="Text input with dropdown button">
                                                            </div>

                                                            <h6 class="costholder">Amount <span class="float-right" id="damtcalc">&#x20a6; 0</span></h6>
                                                            <h6 class="costholder">Escrow fee <span class="float-right" id="dscrowfee">&#x20a6; 0</span></h6>
                                                            <h6 class="costholder">Processing fee <span class="float-right" id="dprocessfee">&#x20a6; 0</span></h6>
                                                            <h4 class="costholder-lg">Total transaction cost <span class="float-right" id="dtotalamt">&#x20a6; 0</span></h4>
                                                        </div>

                                                        <div class="col-sm-12 col-md-6 col-lg-6 bg-color padd-20 infoholder content-table">
                                                            <h5>This calculator estimate the total fees associated with your transaction.</h5>
                                                            <p>Scrow fee is calculated from:</p>
                                                            <ul>
                                                                <li>how long you keep the money in scrow</li>
                                                                <li>the coountry you're transacting from</li>
                                                                <li>the amount involved</li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <!-- Withdrawing Funds Tab -->
                                                    <div class="row p-4 hide pricingframe" id="withdraw">
                                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                                            <p>Enter withdrawal amount</p>

                                                            <div class="input-group mb-2">
                                                              <div class="input-group-prepend">
                                                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">NGN</button>
                                                                <div class="dropdown-menu">
                                                                  <a class="dropdown-item" href="#">USD</a>
                                                                  <a class="dropdown-item" href="#">NGN</a>
                                                                  <a class="dropdown-item" href="#">EUR</a>
                                                                  <div role="separator" class="dropdown-divider"></div>
                                                                  <a class="dropdown-item" href="#">BTC</a>
                                                                </div>
                                                              </div>
                                                              <input type="text" class="form-control" onkeyup="pricing.withdrawal(this.value)" placeholder="Enter amount" aria-label="Text input with dropdown button">
                                                            </div>

                                                            <h6 class="costholder">Amount <span class="float-right" id="wamtcalc">&#x20a6; 0</span></h6>
                                                            <h6 class="costholder">Escrow fee <span class="float-right" id="wscrowfee">&#x20a6; 0</span></h6>
                                                            <h4 class="costholder-lg">Total balance<span class="float-right" id="wtotalamt">&#x20a6; 0</span></h4>
                                                        </div>

                                                        <div class="col-sm-12 col-md-6 col-lg-6 bg-color padd-20 infoholder content-table">
                                                            <h5>This calculator estimate the total fees associated with your withdrawal.</h5>
                                                            <p>Scrow fee is calculated from:</p>
                                                            <ul>
                                                                <li>the coountry you're transacting from</li>
                                                                <li>the amount involved</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--table plan -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- table -->
                        </div>
                    </div>
                </div>
                <!--container-->
            </div>
        </section>

        <!--Video -->

        <!-- testimonials -->

        <section id="testimonials" class="bg-color">
            <div class="container-page padd-150">
                <!--container-->
                <div class="container">
                    <div class="row">
                        <div class="row-centered">
                            <div class="col-centered col-lg-7 col-md-7">
                                <h2 class="title-h2">Customers Testimony</h2>
                                <p class="font-p mg-tp-30 mg-bt-30">
                                    We stay true to our promise, making sure every transaction is free from fraud, here's what few our loyal customers think of Scrow.
                                </p>

                                <div class="testimonial-slider">
                                    <div class="item">
                                        <div class="avatar-item">
                                            <img src="assets/images/testimonial/1.jpg" alt="">
                                        </div>
                                        <div class="item-inner">
                                            <p>
                                                Nam libero tempore, cum soluta nobis est eligen di opt ios cumque nihil impedit quo minus id quo d maxime placeat facere possimus. Sed ut perspi ciatis unde omnis iste natus error sit </p>
                                            <div class="rating">
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                            </div>

                                            <div class="avatar-info">
                                                <h4>Kathleen Mills</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="avatar-item">
                                            <img src="assets/images/testimonial/2.jpg" alt="">
                                        </div>

                                        <div class="item-inner">
                                            <p>
                                                Nam libero tempore, cum soluta nobis est eligen di opt ios cumque nihil impedit quo minus id quo d maxime placeat facere possimus. Sed ut perspi ciatis unde omnis iste natus error sit </p>
                                            <div class="rating">
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                            </div>

                                            <div class="avatar-info">
                                                <h4>Tyler Bryant</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="avatar-item">
                                            <img src="assets/images/testimonial/3.jpg" alt="">
                                        </div>

                                        <div class="item-inner">
                                            <p>
                                                Nam libero tempore, cum soluta nobis est eligen di opt ios cumque nihil impedit quo minus id quo d maxime placeat facere possimus. Sed ut perspi ciatis unde omnis iste natus error sit </p>
                                            <div class="rating">
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                            </div>
                                            <div class="avatar-info">
                                                <h4>Bruce Wong</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="avatar-item">
                                            <img src="assets/images/testimonial/4.jpg" alt="">
                                        </div>

                                        <div class="item-inner">
                                            <p>
                                                Nam libero tempore, cum soluta nobis est eligen di opt ios cumque nihil impedit quo minus id quo d maxime placeat facere possimus. Sed ut perspi ciatis unde omnis iste natus error sit </p>

                                            <div class="rating">
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                            </div>
                                            <div class="avatar-info">
                                                <h4>Jhone Dhoe</h4>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="item">
                                        <div class="avatar-item">
                                            <img src="assets/images/testimonial/5.jpg" alt="">
                                        </div>

                                        <div class="item-inner">
                                            <p>
                                                Nam libero tempore, cum soluta nobis est eligen di opt ios cumque nihil impedit quo minus id quo d maxime placeat facere possimus. Sed ut perspi ciatis unde omnis iste natus error sit </p>

                                            <div class="rating">
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                            </div>
                                            <div class="avatar-info">
                                                <h4>Mark Thompsone</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="avatar-item">
                                            <img src="assets/images/testimonial/6.jpg" alt="">
                                        </div>

                                        <div class="item-inner">
                                            <p>
                                                Nam libero tempore, cum soluta nobis est eligen di opt ios cumque nihil impedit quo minus id quo d maxime placeat facere possimus. Sed ut perspi ciatis unde omnis iste natus error sit </p>

                                            <div class="rating">
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                            </div>
                                            <div class="avatar-info">
                                                <h4>Max Harris</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="avatar-item">
                                            <img src="assets/images/testimonial/7.jpg" alt="">
                                        </div>

                                        <div class="item-inner">
                                            <p>
                                                Nam libero tempore, cum soluta nobis est eligen di opt ios cumque nihil impedit quo minus id quo d maxime placeat facere possimus. Sed ut perspi ciatis unde omnis iste natus error sit </p>

                                            <div class="rating">
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                            </div>
                                            <div class="avatar-info">
                                                <h4>Lucy Kelly</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="avatar-item">
                                            <img src="assets/images/testimonial/8.jpg" alt="">
                                        </div>

                                        <div class="item-inner">
                                            <p>
                                                Nam libero tempore, cum soluta nobis est eligen di opt ios cumque nihil impedit quo minus id quo d maxime placeat facere possimus. Sed ut perspi ciatis unde omnis iste natus error sit </p>

                                            <div class="rating">
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                            </div>
                                            <div class="avatar-info">
                                                <h4>Ethan Nguyen</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="avatar-item">
                                            <img src="assets/images/testimonial/9.jpg" alt="">
                                        </div>

                                        <div class="item-inner">
                                            <p>
                                                Nam libero tempore, cum soluta nobis est eligen di opt ios cumque nihil impedit quo minus id quo d maxime placeat facere possimus. Sed ut perspi ciatis unde omnis iste natus error sit </p>

                                            <div class="rating">
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                                <span class="icon_star"></span>
                                            </div>
                                            <div class="avatar-info">
                                                <h4>Jack Martin</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- avatar images -->

                                <div class="slider-avatar">
                                    <div data-slide="1" class="item-image avatar1 medium-avtar">
                                        <img src="assets/images/testimonial/1.jpg" class="hand-image" alt="">
                                    </div>
                                    <div data-slide="2" class="item-image avatar2 big-avtar">
                                        <img src="assets/images/testimonial/2.jpg" class="hand-image" alt="">
                                    </div>
                                    <div data-slide="3" class="item-image avatar3 medium-avtar">
                                        <img src="assets/images/testimonial/3.jpg" class="hand-image" alt="">
                                    </div>
                                    <div data-slide="4" class="item-image avatar4 small-avtar">
                                        <img src="assets/images/testimonial/4.jpg" class="hand-image" alt="">
                                    </div>
                                    <div data-slide="5" class="item-image avatar5 big-avtar">
                                        <img src="assets/images/testimonial/5.jpg" class="hand-image" alt="">
                                    </div>
                                    <div data-slide="6" class="item-image avatar6 medium-avtar">
                                        <img src="assets/images/testimonial/6.jpg" class="hand-image" alt="">
                                    </div>
                                    <div data-slide="7" class="item-image avatar7 small-avtar">
                                        <img src="assets/images/testimonial/7.jpg" class="hand-image" alt="">
                                    </div>
                                    <div data-slide="8" class="item-image avatar8 small-avtar">
                                        <img src="assets/images/testimonial/8.jpg" class="hand-image" alt="">
                                    </div>
                                    <div data-slide="9" class="item-image avatar9 big-avtar">
                                        <img src="assets/images/testimonial/9.jpg" class="hand-image" alt="">
                                    </div>
                                </div>

                                <!-- avatar images -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--container-->
            </div>
        </section>
        <!-- testimonials -->

        <!-- call to action -->
        <section id="get-app" class="bg-color-1">
            <div class="container">
                <!--container-->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-12 wow fadeInRight">
                        <div class="padd-40 text-center">
                            <h2 class="title-h2 color-white">Join millions on Scrow</h2>
                            <p class="color-white font-p mg-tp-30 mg-bt-30 font-20">Get started for free</p>
                            <a href="./" class="btn btn-white">Let's go!</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--container-->
        </section>
        <!-- call to action -->

        <!--sponsors clients-->
        <section id="sponsors" class="padd-40 bg-color">
            <!--container-->
            <div class="container">
                <div class="row">
                    <div class="row-centered">
                        <div class="col-centered col-lg-12 col-md-12">
                            <div class="client-slider">
                                <div class="item">
                                    <img src="assets/images/clients/logo1.png" class="img-responsive" title="Circlepanda">
                                </div>
                                <div class="item">
                                    <img src="assets/images/clients/logo2.png" class="img-responsive" title="Chatbot">
                                </div>
                                <div class="item">
                                    <img src="assets/images/clients/logo1.png" class="img-responsive" title="Circlepanda">
                                </div>
                                <div class="item">
                                    <img src="assets/images/clients/logo2.png" class="img-responsive" title="Chatbot">
                                </div>
                                <div class="item">
                                    <img src="assets/images/clients/logo1.png" class="img-responsive" title="Circlepanda">
                                </div>
                                <div class="item">
                                    <img src="assets/images/clients/logo2.png" class="img-responsive" title="Chatbot">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End sponsors clients-->

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
                                <form action="./#" id="contactscrow" method="post">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="4" cols="3" placeholder="Your message "></textarea>
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

    <script src="assets/js/pricing.js"></script>
    <script src="assets/js/form.js"></script>
</body>