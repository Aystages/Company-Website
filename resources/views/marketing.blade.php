@extends('layout.index')

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><span>/</span></li>
                    <li><a href="#">Service</a></li>
                    <li><span>/</span></li>
                    <li class="active">Digital Marketing</li>
                </ul>
                <h2>Digital Marketing</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Service Details Start-->
    <section class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="service-details__left">
                        <div class="service-details__service">
                            <h3 class="service-details__title">Services</h3>
                            <ul class="service-details__service-list list-unstyled">
                                <li><a href="{{route('software')}}">Software Development <span class="fa fa-long-arrow-alt-right"></span></a></li>

                                <li><a href="{{route('uidesign')}}">UI/UX designing <span class="fa fa-long-arrow-alt-right"></span></a></li>

                                <li class="active"><a href="{{route('marketing')}}">Digital marketing <span class="fa fa-long-arrow-alt-right"></span></a></li>

                                <li><a href="{{route('graphic')}}">Graphic Design <span class="fa fa-long-arrow-alt-right"></span></a></li>
                            </ul>
                        </div>
                        <div class="service-details__need-help">
                            <div class="service-details__need-help-bg" style="background-image: url(assets/images/backgrounds/service-details-need-help-bg.jpg)">
                            </div>
                            <div class="service-details__need-help-icon">
                                <img src="assets/images/icon/service-details-need-help-icon.png" alt="">
                            </div>
                            <h2 class="service-details__need-help-title">Easy solutions <br> for your tech <br> problems</h2>
                            <div class="service-details__need-help-contact">
                                <p>Have any question?</p>
                                <a href="tel:0777789047"> <span>Free</span> +263777789047</a>
                            </div>
                        </div>
                        <div class="service-details__download">
                            <a href="about.html" class="thm-btn service-details__download-btn">Download our flyer</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="service-details__right">
                        <div class="service-details__img">
                            <img src="assets/images/services/service-details-img-3.jpg" alt="">
                        </div>
                        <div class="service-details__content">
                            <h3 class="service-details__content-title">Digital marketing</h3>
                            <p class="service-details__text-1">This is the promotion of brands to connect with potential customers using the internet and other forms of digital communication. This does not only include email but social media and web-based advertising and also text and multimedia messages as a marketing channel.</p>
                            <p class="service-details__text-2">What differentiates us as digital marketers ?</p>
                            <p class="service-details__text-3">With our team of experienced digital marketers with qualifications from accredited universities you are rest assured that your business is known out there</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Service Details End-->


@endsection

@section('title','Lance Hurler | Digital Marketing')