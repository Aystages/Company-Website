@extends('layout.index')

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <!-- <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">Contact</li>
                </ul> -->
                <h2>Contact Us</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Contact Details Start-->
    <section class="contact-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="contact-details__img">
                        <img src="assets/images/resources/contact-details-img.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-details__right">
                        <div class="section-title text-left">
                            <!-- <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Contact with us</span>
                                <div class="section-title-shape">
                                    <img src="assets/images/shapes/section-title-shape.png" alt="">
                                </div>
                            </div> -->
                            <h2 class="section-title__title">Get in touch with us</h2>
                        </div>
                        <p class="contact-details__text">We are available 24/7 please get in touch with us if you have an 
                            issue or you want a quote.</p>
                        <ul class="list-unstyled contact-details__info">
                            <li>
                                <div class="icon">
                                    <span class="icon-telephone"></span>
                                </div>
                                <div class="text">
                                    <p>Have any question?</p>
                                    <a href="tel:263777789047"><span>Free</span> +263777789047</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <p>Write email</p>
                                    <a href="mailto:support@lancehurler.com">support@lancehurler.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="text">
                                    <p>Visit anytime</p>
                                    <span>7 Nedlaw Close Bluffhill Westgate. Harare</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Details End-->

    <!--Contact Page Start-->
    {{-- <section class="contact-page">
        <div class="container">
            <div class="section-title text-center">
                <!-- <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Send us email</span>
                    <div class="section-title-shape">
                        <img src="assets/images/shapes/section-title-shape.png" alt="">
                    </div>
                </div> -->
                <h2 class="section-title__title">Give us your feedback</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact-page__form">
                        <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Your name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Email address" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Phone number" name="Phone">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Subject" name="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="comment-form__input-box text-message-box">
                                        <textarea name="message" placeholder="Write comment"></textarea>
                                    </div>
                                    <div class="comment-form__btn-box">
                                        <button type="submit" class="thm-btn comment-form__btn">Send a message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--Contact Page End-->

    <!--Google Map Start-->
    <section class="google-map-two">
    <!-- <iframe src="google.com/maps/place/Nedlaw+Cl,+Harare/@-17.765072,30.984108,17z/data=!3m1!4b1!4m5!3m4!1s0x1931a8cb5e2674cd:0xd471e94ebbc1748f!8m2!3d-17.765072!4d30.9862967" class="google-map__two-box" allowfullscreen=""></iframe> -->
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100vw&amp;height=400&amp;hl=en&amp;q=7 Nedlaw Close, Harare&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            <a href="https://www.gachacute.com/">Gacha Cute</a>
        </div>
        <style>
            .mapouter{position:relative;text-align:right;width:100vw;height:400px;}
            .gmap_canvas {overflow:hidden;background:none!important;width:100vw;height:400px;}
            .gmap_iframe {width:100vw!important;height:400px!important;}
        </style>
    </div>
    </section>
    <!--Google Map End-->

@endsection

@section('title', 'Lance Hurler | Contact Us')