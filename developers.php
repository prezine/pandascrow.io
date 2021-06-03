<!DOCTYPE html>
<html lang="en">

<head>
    <!--Metas-->
    <title>Developer</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Developers with Pandascrow">
    <meta name="description" content="Explore our guides and examples to integrate Scrow.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://pandascrow.io/developers">
    <meta property="og:title" content="Developers with Pandascrow">
    <meta property="og:description" content="Explore our guides and examples to integrate Scrow.">
    <meta property="og:image" content="./assets/images/pandascrow.io cover.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://pandascrow.io/developers">
    <meta property="twitter:title" content="Developers with Pandascrow">
    <meta property="twitter:description" content="Explore our guides and examples to integrate Scrow.">
    <meta property="twitter:image" content="./assets/images/pandascrow.io cover.png">

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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-L6E52DCJYT"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-L6E52DCJYT');
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "url": "https://pandascrow.io/developers",
      "logo": "assets/images/logo.png"
    }
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MQL9L4N');</script>
    <!-- End Google Tag Manager -->
    <!--[if lt IE 9]>
  <script src="assets/js/html5shiv.min.js"></script>
  <script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>

<body data-spy="scroll" data-target=".navbar-default" data-offset="100">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQL9L4N"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
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
        <section id="home" class="bg-color-3" style="background-image:url('./assets/images/backgroun.svg');background-position:bottom;background-size:cover;">
            <div class="container-page hero">
                <!--container-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12 col-12">
                            <!--text-->
                            <div class="hero-text text-center">
                                <h1 class="text-white t-shadow">Introducing Scrow API</h1>
                                <p class="text-white t-shadow">Explore our guides and examples to integrate Scrow.</p>
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
        <section id="about-p" class="pd-tp-80 pd-bt-40 bg-color-0 about-text">
            <!--container-->
            <div class="container">
                <div class="row">
                    <!--text-->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                        <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="service-block blast-wrapper mg-bt-0">
                                <div class="icon-service bg-icon-2">
                                    <img src="assets/images/icons/icon3.svg" alt="">
                                </div>
                                <h3>Sandbox account</h3>
                                <p>Test your integrations before going live.</p>
                            </div>
                        </div>

                        <!-- service block-->
                        <div class="col-md-6 col-lg-3">
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
                        <div class="col-md-6 col-lg-3">
                            <div class="service-block">
                                <div class="icon-service bg-icon-2">
                                    <img src="assets/images/icons/icon1.svg" alt="">
                                </div>
                                <h3>Developers support</h3>
                                <p>We're here to help. Get in touch with any questions.</p>
                            </div>
                        </div>
                        <!-- service block-->

                        <!-- service block-->
                        <div class="col-md-6 col-lg-3">
                            <div class="service-block">
                                <div class="icon-service bg-icon-2">
                                    <img src="assets/images/icons/api-token.svg" alt="">
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
                            <img src="assets/images/devholder.svg" alt="">
                        </div>

                        <!--image-->
                        <!-- description text-->
                        <div class="col-lg-6 col-md-6 col-12 ">
                            <h4 class="title-h2">Delivering amazing developer experiences through thoroughly—documented APIs</h4>
                            <h3>Secure . Fast . Stable</h3>
                            
                            <p class="font-p mg-tp-30 mg-bt-30">
                                APIs are largely about code. But they don’t always have to be complex. Our APIs are easy to use, and our documentation is very clear and easy to understand. No developer wants their app to run slowly because of external APIs. It's super-fast on our end, and very secure too.
                            </p>

                            <p class="font-p mg-tp-30">
                                Building a simple project? You can implement our payment gateway in one night. Building enterprise-grade systems? We’ve got you covered too.
                            </p>

                            <p class="font-p mg-tp-30">
                                From simple checkouts, to split payments, donation collections, our APIs are thoroughly written in an easy-to-understand manner, reducing time spent on testing. And our sandbox simulates a real production environment, allowing you to see just how things work in the real world.
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
                            <p class="color-white font-p mg-tp-30 mg-bt-30 font-20">Offering support for PHP, JavaScript, &amp; Python, Scrow API is easy to use.</p>
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
    <script>
        $(function () {
          $('.crossfade').crossfade(options);
        });
    </script>
</body>