<?php
session_start();

if (isset($_SESSION['cin']) && isset($_SESSION['username']))




?>



<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from freebw.com/templates/tatee/home-main.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 20:14:06 GMT -->

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Tatee Theme Templates">
    <meta name="author" content="AuCreative">
    <meta name="keywords" content="Tatee Theme Templates">

    <!-- Title Page-->
    <title>Main Home</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/themify-font/themify-icons.css" rel="stylesheet" media="all">
    <!-- Base fonts of theme-->
    <link href="css/poppins-font.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/revolution/css/layers.css" rel="stylesheet" />
    <link href="vendor/revolution/css/navigation.css" rel="stylesheet" />
    <link href="vendor/revolution/css/settings.css" rel="stylesheet" />

    <!-- Main CSS-->
    <link href="css/main.min.css" rel="stylesheet" media="all">

    <!--Favicons-->
    <link rel="shortcut icon" href="images/icon/favicon.jpg">
    <link rel="apple-touch-icon" href="apple-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.html">
</head>

<body class="animsition js-preloader">
    <div class="page-wrapper">
        <!--profile-->




        <!--endprofile-->
        <!-- HEADER-->

        <header id="header">
            <div class="header header-1 d-none d-lg-block js-header-1">
                <div class="header__bar">
                    <div class="wrap wrap--w1790">
                        <div class="container-fluid">
                            <div class="header__content">
                                <div class="logo">
                                    <a href="#">
                                        <img src="images/icon/logo-black.png" alt="Tatee" />
                                    </a>
                                </div>


                                <div class="header__content-right">

                                    <nav class="header-nav-menu">
                                        <ul class="menu nav-menu">
                                            <li class="menu-item menu-item-has-children">
                                                <a href="home-main.html">Home</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item">
                                                        <a href="home-main.html">Main home</a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a href="about-us.html">about</a>
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="project-grid-full.html">Project</a>

                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="login.php">My account</a>
                                            
                                            </li>
                                            <li class="menu-item">
                                                <a href="abonnement.php">abonnement</a>
                                            </li>

                                            <li class="menu-item">
                                                <a href="contact.html">contact</a>
                                            </li>
                                        </ul>
                                    </nav>

                                    <div class="header-social">
                                        <ul class="list-social">
                                            <li class="list-social__item">
                                                <a class="ic-fb" href="#">
                                                    <i class="zmdi zmdi-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-social__item">
                                                <a class="ic-insta" href="#">
                                                    <i class="zmdi zmdi-instagram"></i>
                                                </a>
                                            </li>
                                            <li class="list-social__item">
                                                <a class="ic-twi" href="#">
                                                    <i class="zmdi zmdi-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-social__item">
                                                <a class="ic-pinterest" href="#">
                                                    <i class="zmdi zmdi-pinterest"></i>
                                                </a>
                                            </li>
                                            <li class="list-social__item">
                                                <a class="ic-google" href="#">
                                                    <i class="zmdi zmdi-google"></i>
                                                </a>
                                            </li>


                                        </ul>
                                    </div>

                                </div>

                                <div>
                                    <h5>
                                        <img src="../../back/views/img/user.svg" alt="">
                                        <a><?php echo $_SESSION['prenom'] ?></a>
                                        <a><?php echo $_SESSION['nom'] ?></a>
                                        &nbsp;
                                        <button type='button'>
                                        <a href='logout.php'class="fas fa-sign-out-alt"></a>
                                        </button>
                                    </h5>
                                    
                                    
                                   
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile__bar-inner">
                            <a class="logo" href="index.html">
                                <img src="images/icon/logo-black.png" alt="Tatee" />
                            </a>
                            <button class="hamburger hamburger--slider float-right" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="header-nav-menu-mobile">
                    <div class="container-fluid">
                        <ul class="menu nav-menu menu-mobile">
                            <li class="menu-item menu-item-has-children">
                                <a href="home-main.html">Home</a>
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="home-main.html">Main home</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="home-project-hover.html">Project Hover</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="home-vertical-slide.html">Vertical Slider</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="home-vertical-slide-video-background.html">Vertical Slider (Video Background)</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="home-onepage.html">Onepage</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="home-onepage-video-background.html">Onepage (Video Background)</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="home-revo-slide.html">Revolution Slider</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="home-revo-slide-video-background.html">Revolution Slider (Video Background)</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="home-project-showcase.html">Project Showcase</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="home-masonry-project.html">Masonry Project</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="home-creative-showcase.html">Creative Showcase</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="index.html">Landing</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="about-us.html">about</a>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="project-grid-full.html">Project</a>
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="project-grid-full.html">Project grid fullwidth</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="project-grid-stand.html">Project Grid Standard</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="project-masonry.html">Project masonry</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="project-carousel.html">Project carousel</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="project-detail-1.html">Project detail</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="project-detail-1.html">Project detail v1</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="project-detail-2.html">Project detail v2</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="project-detail-3.html">Project detail v3</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="project-detail-4.html">Project detail v4</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="login.php">pages</a>
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="login.php">my account</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="shop.html">shop</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="product-detail.html">product detail</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="cart.html">cart</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="checkout.html">checkout</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="coming-soon.html">coming soon</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="blog-grid.html">blog</a>
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="blog-grid.html">blog grid</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="blog-sidebar.html">blog with sidebar</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="blog-detail-sidebar.html">blog detail with sidebar</a>
                                        <ul class="sub-menu sub-menu--left">
                                            <li class="menu-item">
                                                <a href="blog-detail-sidebar.html">blog detail with sidebar</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="blog-detail-img.html">blog detail image</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="blog-detail-gallery.html">blog detail gallery</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="blog-detail-video.html">blog detail video</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="contact.html">contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- END HEADER-->

        <!-- MAIN-->
        <main id="main">
            <!-- PAGE LINE-->
            <div class="page-line">
                <div class="container">
                    <div class="page-line__inner">
                        <div class="page-col"></div>
                        <div class="page-col"></div>
                        <div class="page-col"></div>
                    </div>
                </div>
            </div>
            <!-- END PAGE LINE-->

            <!-- SLIDER-->
            <section>
                <div class="rev_slider_wrapper rev_slider_wrapper--p80 tp-overflow-hidden">
                    <div class="rev_slider fullwidthabanner js-rev" data-version="5.4.4" style="display:none" data-rev-layout="fullscreen" data-rev-stylearrow="au-rev-arrow-1" data-rev-bullets="true" data-rev-stylebullet="au-rev-bullet-1" data-rev-voffbullet="55">
                        <ul>
                            <li class="rev-item rev-item-1" data-transition="crossfade">
                                <img class="rev-slidebg" src="images/slide-01.jpg" alt="Master Slider 01" />
                                <h4 class="tp-caption tp-resizeme rev-text-1" data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:1800,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-x="['left']" data-y="['middle']" data-hoffset="[0, 0, 0, 0, 0]" data-voffset="[-118, -118, -70, -80, -80]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="['auto']" data-height="[&quot;auto&quot;]" data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]" data-color="#fff" data-fontweight="400" data-fontsize="[11, 11, 18, 20, 20]" data-textalign="[left, left, left, center, center]">architecture</h4>
                                <h2 class="tp-caption tp-resizeme rev-text-2" data-frames="[{&quot;delay&quot;:800,&quot;speed&quot;:2100,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-x="[left]" data-y="[center]" data-hoffset="[0, 0, 0, 0, 0]" data-voffset="[-35, -30, 15, 10, 10]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="[600,600,500,576,500]" data-height="[&quot;auto&quot;]" data-lineheight="[60, 60, 45, 50, 45]" data-whitespace="normal" data-color="#fff" data-fontweight="700" data-fontsize="[48, 48, 46, 42, 46]" data-textalign="[left, left, left, left, left]">Modern villa on the mountain</h2>
                                <a class="tp-caption tp-resizeme" href="#" target="_self" data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:1800,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-x="[left]" data-y="[center]" data-hoffset="[0, 0, 0, 0, 15]" data-voffset="[87, 87, 130, 130, 130]" data-width="['auto']" data-height="[&quot;auto&quot;]" data-responsive_offset="on" data-responsive="off" data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]">
                                    <span class="rev-btn-1">See project
                                        <span class="arrow" data-paddingleft="5">
                                            <i class="zmdi zmdi-arrow-right"></i>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="rev-item rev-item-1" data-transition="slotslide-horizontal">
                                <img class="rev-slidebg" src="images/slide-12.jpg" alt="Master Slider 01" />
                                <h4 class="tp-caption tp-resizeme rev-text-1" data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:1800,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-x="['left']" data-y="['middle']" data-hoffset="[0, 0, 0, 0, 0]" data-voffset="[-118, -118, -70, -80, -80]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="['auto']" data-height="[&quot;auto&quot;]" data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]" data-color="#fff" data-fontweight="400" data-fontsize="[11, 11, 18, 20, 20]" data-textalign="[left, left, left, center, center]">architecture</h4>
                                <h2 class="tp-caption tp-resizeme rev-text-2" data-frames="[{&quot;delay&quot;:800,&quot;speed&quot;:2100,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-x="[left]" data-y="[center]" data-hoffset="[0, 0, 0, 0, 0]" data-voffset="[-35, -30, 15, 10, 10]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="[600,600,500,576,500]" data-height="[&quot;auto&quot;]" data-lineheight="[60, 60, 45, 50, 45]" data-whitespace="normal" data-color="#fff" data-fontweight="700" data-fontsize="[48, 48, 46, 42, 46]" data-textalign="[left, left, left, left, left]">Canadian lake house features dark wood</h2>
                                <a class="tp-caption tp-resizeme" href="#" target="_self" data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:1800,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-x="[left]" data-y="[center]" data-hoffset="[0, 0, 0, 0, 15]" data-voffset="[87, 87, 130, 130, 130]" data-width="['auto']" data-height="[&quot;auto&quot;]" data-responsive_offset="on" data-responsive="off" data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]">
                                    <span class="rev-btn-1">See project
                                        <span class="arrow" data-paddingleft="5">
                                            <i class="zmdi zmdi-arrow-right"></i>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="rev-item rev-item-1" data-transition="papercut">
                                <img class="rev-slidebg" src="images/slide-13.jpg" alt="Master Slider 01" />
                                <h4 class="tp-caption tp-resizeme rev-text-1" data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:1800,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-x="['left']" data-y="['middle']" data-hoffset="[0, 0, 0, 0, 0]" data-voffset="[-118, -118, -70, -80, -80]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="['auto']" data-height="[&quot;auto&quot;]" data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]" data-color="#fff" data-fontweight="400" data-fontsize="[11, 11, 18, 20, 20]" data-textalign="[left, left, left, center, center]">architecture</h4>
                                <h2 class="tp-caption tp-resizeme rev-text-2" data-frames="[{&quot;delay&quot;:800,&quot;speed&quot;:2100,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-x="[left]" data-y="[center]" data-hoffset="[0, 0, 0, 0, 0]" data-voffset="[-35, -30, 15, 10, 10]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="[600,600,500,576,500]" data-height="[&quot;auto&quot;]" data-lineheight="[60, 60, 45, 50, 45]" data-whitespace="normal" data-color="#fff" data-fontweight="700" data-fontsize="[48, 48, 46, 42, 46]" data-textalign="[left, left, left, left, left]">Future housein the Barvikha forest</h2>
                                <a class="tp-caption tp-resizeme" href="#" target="_self" data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:1800,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-x="[left]" data-y="[center]" data-hoffset="[0, 0, 0, 0, 15]" data-voffset="[87, 87, 130, 130, 130]" data-width="['auto']" data-height="[&quot;auto&quot;]" data-responsive_offset="on" data-responsive="off" data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]">
                                    <span class="rev-btn-1">See project
                                        <span class="arrow" data-paddingleft="5">
                                            <i class="zmdi zmdi-arrow-right"></i>
                                        </span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="rev-spacer"></div>
            </section>
            <!-- END SLIDER-->

            <!-- ABOUT US-->
            <section class="p-t-10 p-b-55">
                <div class="container">
                    <div class="media-about">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="media__body">
                                    <h5 class="title-sub">about us</h5>
                                    <h2 class="title-1">We are specialists in the field of architecture</h2>
                                    <p class="media__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utins labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco cot laboris nisi ut aliquip ex
                                        ea commodo consequat. Duis aute irure dolor in reprehenderit in vactil oluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                        mollit anim id est laborum.</p>
                                    <a class="au-btn au-btn--arrow" href="about-us.html">Read more
                                        <i class="zmdi zmdi-arrow-right ic-arrow"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="media__img js-line">
                                    <img src="images/about-01.jpg" alt="About">
                                    <span class="line"></span>
                                    <span class="line line-bottom"></span>
                                    <div class="media__img-inner wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                        <span class="number">28</span>
                                        <span class="desc">years of experience</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END ABOUT US-->

            <!-- SERVICE-->
            <section class="p-t-60 p-b-55">
                <div class="container">
                    <div class="section-title">
                        <h5 class="title-sub">what we do</h5>
                        <h2 class="title-1">Our specilization</h2>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-4">
                            <article class="media media-service">
                                <figure class="media__img">
                                    <img src="images/icon/service-01.png" alt="architecture" />
                                </figure>
                                <div class="media__title">
                                    <h3 class="title">
                                        <a href="#">architecture</a>
                                    </h3>
                                    <span class="number">01</span>
                                </div>
                                <p class="media__text">Lorem ipsum dolor sit amet, consectetur adipist pricing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <article class="media media-service">
                                <figure class="media__img">
                                    <img src="images/icon/service-02.png" alt="Interior" />
                                </figure>
                                <div class="media__title">
                                    <h3 class="title">
                                        <a href="#">Interior</a>
                                    </h3>
                                    <span class="number">02</span>
                                </div>
                                <p class="media__text">Lorem ipsum dolor sit amet, consectetur adipist pricing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <article class="media media-service">
                                <figure class="media__img">
                                    <img src="images/icon/service-03.png" alt="planning" />
                                </figure>
                                <div class="media__title">
                                    <h3 class="title">
                                        <a href="#">planning</a>
                                    </h3>
                                    <span class="number">03</span>
                                </div>
                                <p class="media__text">Lorem ipsum dolor sit amet, consectetur adipist pricing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END SERVICE-->

            <!-- LASTEST PROJECT-->
            <section class="wrap wrap--w1790 p-b-75">
                <div class="section-title m-b-70">
                    <h5 class="title-sub">our work</h5>
                    <h2 class="title-1">Latest project</h2>
                </div>
                <div class="container-fluid">
                    <div class="slick-wrap slick-project js-slick-wrapper" data-slick-xs="1" data-slick-sm="1" data-slick-md="3" data-slick-lg="4" data-slick-xl="4" data-slick-dots="false" data-slick-customnav="true" data-slick-autoplay="true">
                        <div class="slick-wrap-content">
                            <div class="slick-content js-slick-content">
                                <div class="slick-item">
                                    <article class="media media-project">
                                        <figure class="media__img">
                                            <img src="images/project-01.jpg" alt="luxury villa" />
                                        </figure>
                                        <div class="bg-overlay"></div>
                                        <span class="line"></span>
                                        <span class="line line--bottom"></span>
                                        <div class="media__body">
                                            <h3 class="title">
                                                <a href="project-detail-1.html">luxury villa</a>
                                            </h3>
                                            <div class="address">Perth, Australia</div>
                                        </div>
                                    </article>
                                </div>
                                <div class="slick-item">
                                    <article class="media media-project">
                                        <figure class="media__img">
                                            <img src="images/project-02.jpg" alt="wooden villa" />
                                        </figure>
                                        <div class="bg-overlay"></div>
                                        <span class="line"></span>
                                        <span class="line line--bottom"></span>
                                        <div class="media__body">
                                            <h3 class="title">
                                                <a href="project-detail-1.html">wooden villa</a>
                                            </h3>
                                            <div class="address">New York, USA</div>
                                        </div>
                                    </article>
                                </div>
                                <div class="slick-item">
                                    <article class="media media-project">
                                        <figure class="media__img">
                                            <img src="images/project-03.jpg" alt="Skyline" />
                                        </figure>
                                        <div class="bg-overlay"></div>
                                        <span class="line"></span>
                                        <span class="line line--bottom"></span>
                                        <div class="media__body">
                                            <h3 class="title">
                                                <a href="project-detail-1.html">Skyline</a>
                                            </h3>
                                            <div class="address">Michigan, USA</div>
                                        </div>
                                    </article>
                                </div>
                                <div class="slick-item">
                                    <article class="media media-project">
                                        <figure class="media__img">
                                            <img src="images/project-04.jpg" alt="Frozen house" />
                                        </figure>
                                        <div class="bg-overlay"></div>
                                        <span class="line"></span>
                                        <span class="line line--bottom"></span>
                                        <div class="media__body">
                                            <h3 class="title">
                                                <a href="project-detail-1.html">Frozen house</a>
                                            </h3>
                                            <div class="address">Mexico</div>
                                        </div>
                                    </article>
                                </div>
                                <div class="slick-item">
                                    <article class="media media-project">
                                        <figure class="media__img">
                                            <img src="images/project-29.jpg" alt="luxury villa" />
                                        </figure>
                                        <div class="bg-overlay"></div>
                                        <span class="line"></span>
                                        <span class="line line--bottom"></span>
                                        <div class="media__body">
                                            <h3 class="title">
                                                <a href="project-detail-1.html">luxury villa</a>
                                            </h3>
                                            <div class="address">Perth, Australia</div>
                                        </div>
                                    </article>
                                </div>
                                <div class="slick-item">
                                    <article class="media media-project">
                                        <figure class="media__img">
                                            <img src="images/project-30.jpg" alt="wooden villa" />
                                        </figure>
                                        <div class="bg-overlay"></div>
                                        <span class="line"></span>
                                        <span class="line line--bottom"></span>
                                        <div class="media__body">
                                            <h3 class="title">
                                                <a href="project-detail-1.html">wooden villa</a>
                                            </h3>
                                            <div class="address">New York, USA</div>
                                        </div>
                                    </article>
                                </div>
                                <div class="slick-item">
                                    <article class="media media-project">
                                        <figure class="media__img">
                                            <img src="images/project-31.jpg" alt="wooden villa" />
                                        </figure>
                                        <div class="bg-overlay"></div>
                                        <span class="line"></span>
                                        <span class="line line--bottom"></span>
                                        <div class="media__body">
                                            <h3 class="title">
                                                <a href="project-detail-1.html">wooden villa</a>
                                            </h3>
                                            <div class="address">New York, USA</div>
                                        </div>
                                    </article>
                                </div>
                                <div class="slick-item">
                                    <article class="media media-project">
                                        <figure class="media__img">
                                            <img src="images/project-32.jpg" alt="Skyline" />
                                        </figure>
                                        <div class="bg-overlay"></div>
                                        <span class="line"></span>
                                        <span class="line line--bottom"></span>
                                        <div class="media__body">
                                            <h3 class="title">
                                                <a href="project-detail-1.html">Skyline</a>
                                            </h3>
                                            <div class="address">Michigan, USA</div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="slick__nav arrows-1">
                            <i class="slick-prev slick-arrow js-slick-prev ti-angle-left"></i>
                            <i class="slick-next slick-arrow js-slick-next ti-angle-right"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END LASTEST PROJECT-->

            <!-- TESTI-->
            <section class="p-t-35 p-b-85">
                <div class="container">
                    <div class="section-title m-b-80">
                        <h5 class="title-sub">testimonial</h5>
                        <h2 class="title-1">What people say</h2>
                    </div>
                    <div class="slick-wrap slick-testi js-slick-wrapper" data-slick-xs="1" data-slick-sm="1" data-slick-md="1" data-slick-lg="2" data-slick-xl="2" data-slick-customnav="true" data-slick-autoplay="true">
                        <div class="slick-wrap-content">
                            <div class="slick-content js-slick-content">
                                <div class="slick-item">
                                    <div class="media-testi">
                                        <p class="media__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.</p>
                                        <div class="media__title">
                                            <span class="ti-quote-left quote"></span>
                                            <h4 class="name">
                                                <a href="#">Pearl Rivera</a>
                                            </h4>
                                            <span class="job">Au Founder</span>
                                        </div>
                                        <figure class="media__img img--rounded">
                                            <img src="images/testi-01.jpg" alt="Pearl Rivera" />
                                        </figure>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="media-testi">
                                        <p class="media__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.</p>
                                        <div class="media__title">
                                            <span class="ti-quote-left quote"></span>
                                            <h4 class="name">
                                                <a href="#">Ray Owens</a>
                                            </h4>
                                            <span class="job">Loco CEO</span>
                                        </div>
                                        <figure class="media__img img--rounded">
                                            <img src="images/testi-02.jpg" alt="Ray Owens" />
                                        </figure>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="media-testi">
                                        <p class="media__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.</p>
                                        <div class="media__title">
                                            <span class="ti-quote-left quote"></span>
                                            <h4 class="name">
                                                <a href="#">Megan Fernandez</a>
                                            </h4>
                                            <span class="job">BigBit Founder</span>
                                        </div>
                                        <figure class="media__img img--rounded">
                                            <img src="images/testi-03.jpg" alt="Megan Fernandez" />
                                        </figure>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="media-testi">
                                        <p class="media__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.</p>
                                        <div class="media__title">
                                            <span class="ti-quote-left quote"></span>
                                            <h4 class="name">
                                                <a href="#">Jack Hopkins</a>
                                            </h4>
                                            <span class="job">Bitbucket CEO</span>
                                        </div>
                                        <figure class="media__img img--rounded">
                                            <img src="images/testi-04.jpg" alt="Jack Hopkins" />
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slick__nav arrows-1">
                            <i class="slick-prev slick-arrow js-slick-prev ti-angle-left"></i>
                            <i class="slick-next slick-arrow js-slick-next ti-angle-right"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END TESTI-->

            <!-- CLIENT-->
            <section class="p-t-15">
                <div class="container">
                    <div class="section-title m-b-100">
                        <h5 class="title-sub">awesome partner</h5>
                        <h2 class="title-1">Our clients</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <a class="img-client" href="#">
                                <img src="images/icon/client-01.png" alt="Client 1">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a class="img-client" href="#">
                                <img src="images/icon/client-02.png" alt="Client 2">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a class="img-client" href="#">
                                <img src="images/icon/client-03.png" alt="Client 3">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a class="img-client" href="#">
                                <img src="images/icon/client-04.png" alt="Client 4">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a class="img-client" href="#">
                                <img src="images/icon/client-05.png" alt="Client 5">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a class="img-client" href="#">
                                <img src="images/icon/client-06.png" alt="Client 6">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a class="img-client" href="#">
                                <img src="images/icon/client-07.png" alt="Client 7">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a class="img-client" href="#">
                                <img src="images/icon/client-08.png" alt="Client 8">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END CLIENT-->

            <!-- BLOG-->
            <section class="p-t-65 p-b-65">
                <div class="container">
                    <div class="section-title m-b-70">
                        <h5 class="title-sub">from the blog</h5>
                        <h2 class="title-1">Latest new</h2>
                    </div>
                    <div class="row gutter-xl">
                        <div class="col-md-6">
                            <article class="blog">
                                <figure class="entry-image">
                                    <a href="blog-grid.html">
                                        <img src="images/blog-01.jpg" alt="the  villa overlooks dramatic mountainous scenery" />
                                    </a>
                                </figure>
                                <div class="entry-summary">
                                    <h4 class="entry-title">
                                        <a href="blog-grid.html">the villa overlooks dramatic mountainous scenery</a>
                                    </h4>
                                    <span class="entry-meta">12 - August - 2018</span>
                                    <p class="entry-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidis idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ercaus itation ullamco laboris nisi ut aliquip . .
                                        .</p>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="blog">
                                <figure class="entry-image">
                                    <a href="blog-grid.html">
                                        <img src="images/blog-02.jpg" alt="Will Bruder clads a mountain home in Aspen" />
                                    </a>
                                </figure>
                                <div class="entry-summary">
                                    <h4 class="entry-title">
                                        <a href="blog-grid.html">Will Bruder clads a mountain home in Aspen</a>
                                    </h4>
                                    <span class="entry-meta">12 - August - 2018</span>
                                    <p class="entry-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidis idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ercaus itation ullamco laboris nisi ut aliquip . .
                                        .</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BLOG-->
        </main>
        <!-- END MAIN-->

        <!-- FOOTER-->
        <footer class="footer bg-parallax">
            <div class="bg-overlay bg-overlay--p85"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-col">
                            <div class="widget m-b-25">
                                <a href="#">
                                    <img src="images/icon/logo-white.png" alt="Tatee" />
                                </a>
                            </div>
                            <div class="widget widget-address">
                                <ul>
                                    <li>Address : 991 White St . Dawsonville, GA 30534 , New York</li>
                                    <li>Phone number : + (898) 784-7217</li>
                                    <li>Email : <a href="https://freebw.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7125100514145f10031219180514120504031431161c10181d5f121e1c">[email&#160;protected]</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-col p-l-70 p-md-l-0">
                            <div class="widget widget_pages">
                                <h4 class="widget-title">Link</h4>
                                <ul>
                                    <li>
                                        <a href="#">About us</a>
                                    </li>
                                    <li>
                                        <a href="#">Services</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-col p-l-70 p-md-l-0">
                            <h4 class="widget-title">Social</h4>
                            <div class="widget widget_socials">
                                <ul class="list-social list-social-2">
                                    <li class="list-social__item">
                                        <a class="ic-fb" href="#">
                                            <i class="zmdi zmdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-insta" href="#">
                                            <i class="zmdi zmdi-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-twi" href="#">
                                            <i class="zmdi zmdi-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-pinterest" href="#">
                                            <i class="zmdi zmdi-pinterest"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-google" href="#">
                                            <i class="zmdi zmdi-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-col">
                            <div class="widget widget_text">
                                <h4 class="widget-title">copyright</h4>
                                <p>© 2018 TATEE . Designed by Authemes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER-->
    </div>

    <!-- Jquery JS-->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="vendor/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendor/matchHeight/jquery.matchHeight-min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/sweetalert/sweetalert.min.js"></script>
    <script src="vendor/noUiSlider/nouislider.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!--
    | (Load Extensions only on Local File Systems !
    | The following part can be removed on Server for On Demand Loading)
    -->
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <!-- Config Revolution Slider-->
    <script type="text/javascript" src="js/config-revolution.min.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>


<!-- Mirrored from freebw.com/templates/tatee/home-main.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 20:14:16 GMT -->

</html>
<!-- end document-->