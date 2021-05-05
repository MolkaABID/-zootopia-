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
    <link href="css/style.css" rel="stylesheet">

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
                                        <!-- <img src="../../back/views/img/user.svg" alt="">
                                        <a><?php echo $_SESSION['prenom'] ?></a>
                                        <a><?php echo $_SESSION['nom'] ?></a>
                                        &nbsp;
                                        <button type='button'>
                                        <a href='logout.php'class="fas fa-sign-out-alt"></a>
                                        </button>-->
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
        <form name="f" method="POST" action="ajouterabonn.php" >
<section id="main-container">
	<div class="container">
	

		<div class="row">
			<div class="col-md-7">
				<h1>ABONNEMENT</h1>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Identifiant</label>
								<input class="form-control" name="ida" id="ida" placeholder="Votre Identifiant" type="text">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Nom</label>
								<input class="form-control" name="nom" id="nom" placeholder="Votre Nom" type="text">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Prenom</label>
								<input class="form-control" name="prenom" id="prenom" placeholder="Votre Prenom" type="text">
							</div>
						</div>
					</div>
					<div class="row">

						<div class="col-md-6">
							<div class="form-group">
								<label>Age</label>
								<input class="form-control" name="age" id="age" placeholder="Votre Age" type="number">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Date Du Debut</label>
								<input class="form-control" name="dateD" id="dateD" placeholder="La date du debut" type="date">
							</div>
						</div>
						
					</div>
					<div class="form-group">
						<label>Date De La Fin</label>
						<input class="form-control" name="dateF" id="dateF" placeholder="La date de la fin" type="date"></textarea>
					</div>
					<!--<div class="form-group">
						<label>Mot De Passe</label>
						<input class="form-control" name="mdp" id="mdp" placeholder="Votre Mot de passe" rows="10" type="password" required></textarea>
					</div>-->
					<div class="text-right"><br>
						<button class="btn btn-primary solid blank" type="submit" onclick="test()">Confirmer</button>
					</div>
				</form>
			</div>
			<div class="col-md-1"></div>
			<!--<div class="col-md-4">
				<h1>Login</h1>
				<div class="form-group">
						<label>E-mail</label>
						<input class="form-control" name="email" id="email" placeholder="Votre Email" rows="10" type="texts" required></textarea>
					</div>
					<div class="form-group">
						<label>Mot De Passe</label>
						<input class="form-control" name="mdp" id="mdp" placeholder="Votre Mot de passe" rows="10" type="password" required></textarea>
					</div>
					<div class="text-right"><br>
						<button class="btn btn-primary solid blank" type="submit">Login</button>
					</div>
			</div>-->
		</div>
	</div>
	<!--/ container end -->
 </section>
</form>
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