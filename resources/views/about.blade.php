@extends('layout.index')

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">About us</li>
                </ul>
                <h2>About us</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Delivering IT Start-->
    <section class="delivering-it delivering-it-two">
        <div class="container">
            <div class="delivering-it__bottom">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--Delivering IT Single-->
                        <div class="delivering-it__single">
                            <div class="delivering-it__img">
                                <img src="assets/images/resources/delivering-it-img-1.jpg" alt="">
                            </div>
                            <div class="delivering-it__content">
                                <h5 class="delivering-it__content-title">Software solutions for every business
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <!--Delivering IT Single-->
                        <div class="delivering-it__single">
                            <div class="delivering-it__img">
                                <img src="assets/images/resources/delivering-it-img-2.jpg" alt="">
                            </div>
                            <div class="delivering-it__content">
                                <h5 class="delivering-it__content-title">Helping businesses around the world</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <!--Delivering IT Single-->
                        <div class="delivering-it__single">
                            <div class="delivering-it__img">
                                <img src="assets/images/resources/delivering-it-img-3.jpg" alt="">
                            </div>
                            <div class="delivering-it__content">
                                <h5 class="delivering-it__content-title">Embracing innovation through technology.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Delivering IT End-->

    
    <!--Business From Start-->
    <section class="business-from">
        <div class="business-from-bg-box">
            <div class="business-from-bg jarallax" data-jarallax="" data-speed="0.2" data-imgposition="50% 0%" style="background-image: url(assets/images/backgrounds/business-from-bg.jpg);"></div>
        </div>
        <div class="container">
            <div class="business-from__inner text-center">
                <p class="business-from__sub-title">Business from great idea to</p>
                <h2 class="business-from__title">launching</h2>
                <div class="business-from__btn-box">
                    <a href="{{route('contact')}}" class="business-from__btn thm-btn">Contact us now</a>
                </div>
            </div>
        </div>
    </section>
    <!--Business From End-->

    <!--Notech More Start-->
    <section class="notech-more">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="notech-more__left">
                        <div class="section-title text-left">
                            <h2 class="section-title__title">Lance Hurler is more than a software company</h2>
                        </div>
                        <p class="notech-more__text">We provide a variety of software solutions for SME's to big
                            enteprises you just have to tell us what you want.</p>
                        <ul class="list-unstyled notech-more__points">
                            <li>
                                {{-- <div class="icon">
                                    <span class="icon-technology"></span>
                                </div> --}}
                                <h3 class="notech-more__title">Software innovations</h3>
                                <p class="notech-more__text-2">Innovation is at the core of our company as we are racing
                                    for a fully digitalised country by 2030.
                                </p>
                            </li>
                            <li>
                                {{-- <div class="icon">
                                    <span class="icon-stock-market"></span>
                                </div> --}}
                                <h3 class="notech-more__title">Business solutions</h3>
                                <p class="notech-more__text-2">Software and company branding for various businesses.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="notech-more__right">
                        <div class="notech-more__img wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <img src="assets/images/resources/notech-more-img-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Notech More End-->

    
    <!--Team One Start-->
    {{-- <section class="team-one about-page-team">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="section-title__title">Team members</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <!--Team One Single-->
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="assets/images/team/team-1-1.jpg" alt="">
                            <ul class="list-unstyled team-one__social">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-one__content-box">
                            <div class="team-one__content">
                                <div class="team-one-shape">
                                    <img src="assets/images/shapes/team-one-shape.png" alt="">
                                </div>
                                <h4 class="team-one__name"><a href="team-details.html">Kevin martin</a></h4>
                                <p class="team-one__title">Accountant</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <!--Team One Single-->
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="assets/images/team/team-1-2.jpg" alt="">
                            <ul class="list-unstyled team-one__social">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-one__content-box">
                            <div class="team-one__content">
                                <div class="team-one-shape">
                                    <img src="assets/images/shapes/team-one-shape.png" alt="">
                                </div>
                                <h4 class="team-one__name"><a href="team-details.html">Jessica brown</a></h4>
                                <p class="team-one__title">Co founder & CEO</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <!--Team One Single-->
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="assets/images/team/team-1-3.jpg" alt="">
                            <ul class="list-unstyled team-one__social">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-one__content-box">
                            <div class="team-one__content">
                                <div class="team-one-shape">
                                    <img src="assets/images/shapes/team-one-shape.png" alt="">
                                </div>
                                <h4 class="team-one__name"><a href="team-details.html">David cooper</a></h4>
                                <p class="team-one__title">Senior assistant</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Team One End--> --}}


@endsection

@section('title', 'Lance Hurler | About Us')