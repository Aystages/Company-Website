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
                    <li class="active">Graphic Design</li>
                </ul>
                <h2>Graphic Design</h2>
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

                                <li><a href="{{route('marketing')}}">Digital marketing <span class="fa fa-long-arrow-alt-right"></span></a></li>

                                <li class="active"><a href="{{route('graphic')}}">Graphic Design <span class="fa fa-long-arrow-alt-right"></span></a></li>
                            </ul>
                        </div>
                        <div class="service-details__need-help">
                            <div class="service-details__need-help-bg" style="background-image: url(assets/images/backgrounds/service-details-need-help-bg.jpg)">
                            </div>
                            <div class="service-details__need-help-icon">
                                <img src="assets/images/icon/service-details-need-help-icon.png" alt="">
                            </div>
                            <h2 class="service-details__need-help-title">Affordable solutions <br> for all your tech <br>
                                problems</h2>
                            <div class="service-details__need-help-contact">
                                <p>Have any question?</p>
                                <a href="tel:0777789047"> <span>Free</span> +263777789047</a>
                            </div>
                        </div>
                        <div class="service-details__download">
                            <a href="about.html" class="thm-btn service-details__download-btn">Download our
                                flyer</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="service-details__right">
                        <div class="service-details__img">
                            <img src="assets/images/services/service-details-img-4.jpg" alt="">
                        </div>
                        <div class="service-details__content">
                            <h3 class="service-details__content-title">Graphic Design</h3>
                            <p class="service-details__text-1">This is a craft where our professionals create visual
                                 content to communicate messages. By applying visual hierarchy and page layout techniques,
                                  designers use typography and pictures to meet your specific needs and focus on the
                                   logic of displaying elements in interactive designs, to optimize the user experience.</p>
                            <p class="service-details__text-2">What can you expect from our designs ?</p>
                            <p class="service-details__text-3">As per your request wehether be it it a company logo, poster, business card
                                or flier we will make sure that you are satisfied by our work and that you get to reach your clients out
                                there.</p>
                        </div>
                        
                        
                        <div class="service-details__benefits">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="service-details__benefits-img">
                                        <img src="assets/images/services/service-details-benefits-img.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="service-details__benefits-right">
                                        <h3 class="service-details__benefits-title">Our benefits</h3>
                                        <p class="service-betails__benefits-text-1">Doing business with us
                                           will be a game changer for your business.</p>
                                        <ul class="list-unstyled service-details__benefits-points">
                                            <li>
                                                <div class="icon">
                                                    <i class="icon-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Improved process efficiency</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="icon-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Great designs</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="icon-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Smart implementation</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Service Details End-->


@endsection

@section('title','Lance Hurler | Graphic Design')