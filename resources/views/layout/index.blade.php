<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Lance Hurler')</title>
    <!-- favicons Icons -->
    <link rel="retina" sizes="180x180" href="assets/images/favicons/retina.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/retina1.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="description" content="Software Development">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

    <link href="../../css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css">
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css">
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css">
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css">
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css">
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css">
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css">
    <link rel="stylesheet" href="assets/vendors/notech-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/notech-two-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css">
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css">
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css">

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/notech.css">
    <link rel="stylesheet" href="assets/css/notech-responsive.css">


    <!-- modes css -->
    <link rel="stylesheet" id="jssMode" href="assets/css/notech-dark.css">


    <!-- toolbar css -->
    <link rel="stylesheet" href="assets/vendors/toolbar/css/toolbar.css">


</head>

<body>
    <div class="page-wrapper">
        <header class="main-header main-header--one clearfix">
            <div class="main-header__top">
                <div class="main-header__top-inner clearfix">
                    <div class="main-header__top-left">
                        <ul class="list-unstyled main-header__top-address">
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="text">
                                    <p>7 Nedlaw Close Bluffhill Westgate. Harare</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:support@lancehurler.com">support@lancehurler.com</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="main-header__top-right">
                        <div class="main-header__top-right-content">
                            <div class="main-header__top-right-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu clearfix">
                <div class="main-menu__wrapper clearfix">

                    <div class="main-menu__left main-menu__left--two">
                        <div class="main-menu__logo">
                            <a href="index.html">
                                <img class="logo-dark" src="assets/images/resources/logo22.png" alt="" height="30">
                                <img class="logo-light" src="assets/images/resources/site4.png" alt="">
                            </a>
                        </div>
                        <div class="main-menu__main-menu-box main-menu__main-menu-box--two">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li >
                                    <a href="/">Home</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Tutorials</a>
                                    <ul>
                                        <li><a href="#">Basic Computing</a></li>
                                        
                                        <li><a href="#">Programming</a></li>
                                        
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Services</a>
                                    <ul>
                                        
                                        <li><a href="{{route('software')}}">Software Development</a></li>
                                        <li><a href="{{route('uidesign')}}">UI/UX designing</a></li>
                                        <li><a href="{{route('marketing')}}">Digital marketing</a></li>
                                        <li><a href="{{route('graphic')}}">Graphic Design</a></li>
                                        
                                    </ul>
                                </li>
                                <li><a href="{{route('pricing')}}">Pricing</a></li>
                                <li>
                                    <a href="{{route('about')}}">About Us</a>
                                </li>
                                <li><a href="{{route('contact')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="main-menu__right">
                        <div class="main-menu__search-call">
                            <div class="main-menu__call">
                                <div class="main-menu__call-icon">
                                    <img src="assets/images/icon/main-menu-icon-comment.png" alt="">
                                </div>
                                <div class="main-menu__call-number">
                                    <p>Have any question?</p>
                                    <h5><a href="tel:0777789047"><span>Free</span> +263 777789047</a></h5>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        @yield('content')

        
        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer-bg-1 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms" style="background-image: url(assets/images/shapes/site-footer-shape-1.png);">
            </div>
            <div class="site-footer-bg-2 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms" style="background-image: url(assets/images/shapes/site-footer-shape-2.png);">
            </div>
            <div class="site-footer__top">
                <div class="container">
                    <div class="site-footer__top-inner">
                        <div class="site-footer__top-left">
                            <!-- <div class="site-footer__top-icon">
                                <span class="icon-artificial-intelligence"></span>
                            </div> -->
                            <h3 class="site-footer__top-title">Bringing all your technological imaginations to reality</h3>
                        </div>
                        <div class="site-footer__top-right">
                            <a href="{{route('about')}}" class="thm-btn site-footer__btn">Discover more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__middle">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo">
                                    <a href="index.html"><img src="assets/images/resources/site.png" alt=""></a>
                                </div>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text">Subsrcibe for our monthly articles and
                                        newsletter</p>
                                </div>
                                <form class="footer-widget__newsletter-form">
                                    <div class="footer-widget__newsletter-input-box">
                                        <input type="email" placeholder="Email address" name="email">
                                        <button type="submit" class="footer-widget__newsletter-btn"><img src="assets/images/icon/footer-widget-newsletter-send-icon.png" alt=""></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__links clearfix">
                                <h3 class="footer-widget__title">Links</h3>
                                <ul class="footer-widget__links-list list-unstyled clearfix">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="{{route('about')}}">About us</a></li>
                                    <li><a href="{{route('contact')}}">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__contact clearfix">
                                <h3 class="footer-widget__title">Contact</h3>
                                <ul class="footer-widget__contact-list list-unstyled clearfix">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-telephone"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:263777789047">+263 777-789-047</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:helpdesk@lancehurler.com">support@lancehurler.com</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pin"></span>
                                        </div>
                                        <div class="text">
                                            <p>7 Nedlaw Close Bluffhill Westgate <br> Harare</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__social-box clearfix">
                                <div class="site-footer__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© All Copyrights 2023 by <a href="/">Lance Hurler</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="/" aria-label="logo image"><img src="assets/images/resources/footer-logo.png" width="155" alt=""></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:stagienjovana@gmail.com">helpdesk@lancehurler.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:263-777-789047">263 777 89047</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    {{-- <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">Search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here...">
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div> --}}
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>




    <!-- template js -->
    <script src="assets/js/notech.js"></script>


    <!-- toolbar js -->
    <script src="assets/vendors/toolbar/js/js.cookie.min.js"></script>
    <script src="assets/vendors/toolbar/js/jQuery.style.switcher.min.js"></script>
    <script src="assets/vendors/toolbar/js/toolbar.js"></script>


</body>

</html>