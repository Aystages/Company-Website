@extends('layout.index')


@section('content')
     <!--Main Slider Start-->
     <section class="main-slider">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
            "effect": "fade",
            "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
            },
            "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
            "delay": 5000
            }}'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/backgrounds/laptop.jpg);"></div>
                    <!-- /.image-layer -->
                    <div class="main-slider__shape-1">
                        <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
                    </div>
                    <div class="main-slider__shape-2">
                        <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                    </div>
                    <div class="main-slider__shape-3">
                        <img src="assets/images/shapes/main-slider-shape-3.png" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <p>Software Development &</p>
                                    <h2>Design</h2>
                                    <div class="main-slider__btn-video-box">
                                        <div class="main-slider__btn-box">
                                            <a href="{{route('about')}}" class="thm-btn main-slider__btn">Discover more</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/backgrounds/graphics.jpg);"></div>
                    <!-- /.image-layer -->
                    <div class="main-slider__shape-1">
                        <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
                    </div>
                    <div class="main-slider__shape-2">
                        <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                    </div>
                    <div class="main-slider__shape-3">
                        <img src="assets/images/shapes/main-slider-shape-3.png" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <p>Software Development &</p>
                                    <h2>Design</h2>
                                    <div class="main-slider__btn-video-box">
                                        <div class="main-slider__btn-box">
                                            <a href="{{route('about')}}" class="thm-btn main-slider__btn">Discover more</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-1-3.jpg);"></div>
                    <!-- /.image-layer -->
                    <div class="main-slider__shape-1">
                        <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
                    </div>
                    <div class="main-slider__shape-2">
                        <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                    </div>
                    <div class="main-slider__shape-3">
                        <img src="assets/images/shapes/main-slider-shape-3.png" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <p>Software Development &</p>
                                    <h2>Design</h2>
                                    <div class="main-slider__btn-video-box">
                                        <div class="main-slider__btn-box">
                                            <a href="{{route('about')}}" class="thm-btn main-slider__btn">Discover more</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-pagination" id="main-slider-pagination"></div>

        </div>
    </section>
    <!--Main Slider End-->

    <!--Get Solutions Start-->
    <section class="get-solutions">
        <div class="container">
            <div class="get-solutions__inner">
                <p class="get-solutions__text">Stop wasting time and money on technology. <a href="{{route('about')}}">Explore
                        Lance Hurler</a> and get best solutions.</p>
            </div>
        </div>
    </section>
    <!--Get Solutions End-->

    <!--Feature One Start-->
    <section class="feature-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <!--Feature One Single-->
                    <div class="feature-one__single">
                        <div class="feature-one__img">
                            <img src="assets/images/resources/feature-1-1.jpg" alt="">
                            <div class="feature-one__title-box">
                                <h3 class="feature-one__title"><a href="{{route('graphic')}}">Graphic Design</a></h3>
                            </div>
                            <div class="feature-one__hover-content">
                                {{-- <div class="feature-one__icon">
                                    <span class="icon-system"></span>
                                </div> --}}
                                <h3 class="feature-one__hover-title"><a href="{{route('graphic')}}">Graphic Design</a>
                                </h3>
                                <p class="feature-one__hover-text">Company branding ensures that your business is known and 
                                    distinguishable out there.</p>
                                <div class="feature-one__learn-more">
                                    <a href="{{route('graphic')}}">Learn more<i class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <!--Feature One Single-->
                    <div class="feature-one__single">
                        <div class="feature-one__img">
                            <img src="assets/images/resources/feature-1-2.jpg" alt="">
                            <div class="feature-one__title-box">
                                <h3 class="feature-one__title"><a href="{{route('uidesign')}}">UI/UX Design</a></h3>
                            </div>
                            <div class="feature-one__hover-content">
                                {{-- <div class="feature-one__icon">
                                    <span class="icon-cyber"></span>
                                </div> --}}
                                <h3 class="feature-one__hover-title"><a href="{{route('uidesign')}}">UI/UX Design</a></h3>
                                <p class="feature-one__hover-text">We make sure that you have a visualized design for the software
                                    that you want.</p>
                                <div class="feature-one__learn-more">
                                    <a href="{{route('uidesign')}}">Learn more<i class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <!--Feature One Single-->
                    <div class="feature-one__single">
                        <div class="feature-one__img">
                            <img src="assets/images/resources/feature-1-3.jpg" alt="">
                            <div class="feature-one__title-box">
                                <h3 class="feature-one__title"><a href="{{route('software')}}">Software Development</a></h3>
                            </div>
                            <div class="feature-one__hover-content">
                                {{-- <div class="feature-one__icon">
                                    <span class="icon-application"></span>
                                </div> --}}
                                <h3 class="feature-one__hover-title"><a href="{{route('software')}}">Software Development</a>
                                </h3>
                                <p class="feature-one__hover-text">There are many kinds of software we develop from websites
                                    to business software and many more
                                </p>
                                <div class="feature-one__learn-more">
                                    <a href="{{route('software')}}">Learn more<i class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Feature One End-->

    <!--Get To Know Start-->
    <section class="get-to-know">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="get-to-know__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="get-to-know__img-box">
                            <div class="get-to-know__img">
                                <img src="assets/images/resources/get-to-know-img-1.jpg" alt="">
                            </div>
                            <div class="get-to-know__small-img">
                                <img src="assets/images/resources/get-to-know-small-img.jpg" alt="">
                            </div>
                            <div class="get-to-know-shape-1"><img src="assets/images/shapes/get-to-know-shape-1.png" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="get-to-know__right">
                        <div class="section-title text-left">
                            <h2 class="section-title__title">Easy solutions for your IT problems</h2>
                        </div>
                        <p class="get-to-know__text">Through providing easy and affordable software for your business
                            from company sites to business software you wont have to worry about anything again.</p>
                        <ul class="list-unstyled get-to-know__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>With us you never have to do your business processes manually again</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>We also provide inhouse training for the software that we develop for our clients.</p>
                                </div>
                            </li>
                        </ul>
                        <div class="get-to-know__it-solutions">
                            {{-- <div class="get-to-know__it-solutions-icon">
                                <span class="icon-data-analytics"></span>
                            </div> --}}
                            <div class="get-to-know__it-solutions-text-box">
                                <p class="get-to-know__it-solutions-text">Stop worrying, we take care of your
                                    technology problems.</p>
                            </div>
                        </div>
                        <a href="{{route('about')}}" class="get-to-know__btn thm-btn">Discover more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Get To Know End-->

    <!--Services One Start-->
    <section class="services-one" style="background-image: url(assets/images/shapes/service-bg-1-1.png);">
        <div class="service-one__shape-1"></div><!-- /.service-one__shape-1 -->
        <div class="service-one__shape-2"></div><!-- /.service-one__shape-2 -->
        <div class="container">
            <div class="services-one__top">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="services-one__top-left">
                            <div class="section-title text-left">
                                <h2 class="section-title__title">Services we’re providing to our customers</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="services-one__top-right">
                            <p class="services-one__top-text">We provide a variety of services to our customers below 
                                are some of the services that we have been offering so far.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                
            </style>
            <div class="services-one__bottom">
                <ul class="list-unstyled services-one__list">
                    <li class="services-one__single">
                        <div class="services-one__content">
                            <div class="services-one__icon">
                                <span class="icon-coding"></span>
                            </div>
                            <h3 class="services-one__title"><a href="{{route('software')}}">Software <br>
                                    Development</a></h3>
                            <p class="services-one__text">We develop all kinds <br> of affordable software.</p>
                        </div>
                    </li>
                    <li class="services-one__single">
                        <div class="services-one__content">
                            <div class="services-one__icon">
                                <span class="icon-design-thinking"></span>
                            </div>
                            <h3 class="services-one__title"><a href="{{route('uidesign')}}">UI/UX <br> Design</a>
                            </h3>
                            <p class="services-one__text">We do software <br> wireframes and mockups.</p>
                        </div>
                    </li>
                    <li class="services-one__single">
                        <div class="services-one__content">
                            <div class="services-one__icon">
                                <span class="icon-technology"></span>
                            </div>
                            <h3 class="services-one__title"><a href="#">IT <br>
                                Tutorials</a></h3>
                            <p class="services-one__text">Tutorials at <br> affordable prices.</p>
                        </div>
                    </li>
                    <li class="services-one__single">
                        <div class="services-one__content">
                            <div class="services-one__icon">
                                <span class="icon-content"></span>
                            </div>
                            <h3 class="services-one__title"><a href="{{route('graphic')}}">Graphic <br>
                                    Design</a></h3>
                            <p class="services-one__text">We do company logos, <br> fliers and e.tc.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Services One End-->

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

    <!--Testimonial One Start-->
    <section class="testimonial-one">
        <div class="testimonial-one__inner">
            <div class="testimonial-one-shape float-bob-x">
                <img src="assets/images/shapes/testimonial-one-shape.png" alt="">
            </div>
            <div class="container">
                <div class="testimonial-one__inner-content">
                    <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel" data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 30,
                        "nav": false,
                        "dots": true,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive": {
                            "0": {
                                "items": 1
                            },
                            "768": {
                                "items": 1
                            },
                            "992": {
                                "items": 1
                            },
                            "1200": {
                                "items": 1
                            }
                        }
                    }'>
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__top-content">
                                <div class="testimonial-one__img">
                                    <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                </div>
                                <div class="testimonial-one__content">
                                    <p class="testimonial-one__text">This is due to their excellent service,
                                        competitive pricing and customer support. It’s throughly refresing to get
                                        such a personal touch. Duis aute lorem ipsum is simply free text irure dolor
                                        in reprehenderit in esse nulla pariatur.</p>
                                    <div class="testimonial-one__bottom-content">
                                        <div class="testimonial-one__client-info">
                                            <h5 class="testimonial-one__client-name">Aleesha brown</h5>
                                            <p class="testimonial-one__client-company">Client of notech company</p>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <img src="assets/images/testimonial/testimonial-1-quote.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__top-content">
                                <div class="testimonial-one__img">
                                    <img src="assets/images/testimonial/testimonial-1-2.jpg" alt="">
                                </div>
                                <div class="testimonial-one__content">
                                    <p class="testimonial-one__text">This is due to their excellent service,
                                        competitive pricing and customer support. It’s throughly refresing to get
                                        such a personal touch. Duis aute lorem ipsum is simply free text irure dolor
                                        in reprehenderit in esse nulla pariatur.</p>
                                    <div class="testimonial-one__bottom-content">
                                        <div class="testimonial-one__client-info">
                                            <h5 class="testimonial-one__client-name">Kavin coper</h5>
                                            <p class="testimonial-one__client-company">Client of notech company</p>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <img src="assets/images/testimonial/testimonial-1-quote.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__top-content">
                                <div class="testimonial-one__img">
                                    <img src="assets/images/testimonial/testimonial-1-3.jpg" alt="">
                                </div>
                                <div class="testimonial-one__content">
                                    <p class="testimonial-one__text">This is due to their excellent service,
                                        competitive pricing and customer support. It’s throughly refresing to get
                                        such a personal touch. Duis aute lorem ipsum is simply free text irure dolor
                                        in reprehenderit in esse nulla pariatur.</p>
                                    <div class="testimonial-one__bottom-content">
                                        <div class="testimonial-one__client-info">
                                            <h5 class="testimonial-one__client-name">John smith</h5>
                                            <p class="testimonial-one__client-company">Client of notech company</p>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <img src="assets/images/testimonial/testimonial-1-quote.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End-->



    <!--Tech Services Start-->
    <section class="tech-services">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="tech-services__left">
                        <div class="tech-services__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="tech-services__img">
                                <img src="assets/images/resources/tech-services-img-1.jpg" alt="">
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="tech-services__right">
                        <div class="section-title text-left">
                            
                            <h2 class="section-title__title">Software solutions for your business problems</h2>
                        </div>
                        <p class="tech-services__text">We provide the most flexible and maintainable software 
                            which meets your business needs. With the most skilled software developers you are 
                            100% assured that the software produced will be top notch.
                        </p>
                        <ul class="list-unstyled tech-services__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="content">
                                    <h4>We deliver perfect solutions</h4>
                                    <p>By using modern technology our solutions are the best for your business</p>
                                </div>
                            </li>
                            {{-- <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                 <div class="content">
                                    <h4>We work with global brands</h4>
                                    <p>Lorem Ipsum nibh vel velit auctor aliqu aenean sollic.</p>
                                </div> 
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Tech Services End-->

   
    <!--Helping Start-->
    <br><br>
    <section class="helping">
        <div class="helping-wrapper">
            <div class="helping__left">
                <div class="helping__left-bg" style="background-image: url(assets/images/backgrounds/helping-left-bg.jpg);"></div>
            </div>
            <div class="helping__right">
                <div class="helping-shape-1  wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <img src="assets/images/shapes/helping-shape-1.png" alt="">
                </div>
                <div class="helping__right-content">
                    <div class="section-title text-left">
                        
                        <h2 class="section-title__title">Helping businesses around the world</h2>
                    </div>
                    <p class="helping__text">We have helped many businessses automate their process flows at most
                        affordable prices.</p>
                    <ul class="list-unstyled helping__points">
                        <li>
                            <div class="icon">
                                <span class="icon-data-protection"></span>
                            </div>
                            <h3 class="helping__title">Software Development</h3>
                            <p class="helping__text-2">With us your business software will never be the same.</p>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-backup-copy"></span>
                            </div>
                            <h3 class="helping__title">Great IT courses</h3>
                            <p class="helping__text-2">We also provide basic computer training and programming tutorials.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Helping End-->
@endsection

@section('title', 'Lance Hurler | Home')