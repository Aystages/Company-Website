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
                    <li class="active">UI UX Designing</li>
                </ul>
                <h2>UI UX Designing</h2>
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

                                <li class="active"><a href="{{route('uidesign')}}">UI/UX designing <span class="fa fa-long-arrow-alt-right"></span></a></li>

                                <li><a href="{{route('marketing')}}">Digital marketing <span class="fa fa-long-arrow-alt-right"></span></a></li>

                                <li><a href="{{route('graphic')}}">Graphic Design <span class="fa fa-long-arrow-alt-right"></span></a></li>
                            </ul>
                        </div>
                        <div class="service-details__need-help">
                            <div class="service-details__need-help-bg" style="background-image: url(assets/images/backgrounds/service-details-need-help-bg.jpg)">
                            </div>
                            <div class="service-details__need-help-icon">
                                <img src="assets/images/icon/service-details-need-help-icon.png" alt="">
                            </div>
                            <h2 class="service-details__need-help-title">Affordable solutions <br> for your design <br>
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
                            <img src="assets/images/services/service-details-img-2.jpg" alt="">
                        </div>
                        <div class="service-details__content">
                            <h3 class="service-details__content-title">UI/UX designing</h3>
                            <p class="service-details__text-1">User interface design or user interface engineering is the design
                                 of user interfaces for machines and software, such as computers, home appliances, 
                                 mobile devices, and other electronic devices, with the focus on maximizing usability and 
                                 the user experience.User experience or UX design is the process design teams use to create
                                 products that provide meaningful and relevant experiences to users.</p>
                            <p class="service-details__text-2">With our team of skilled UI designers and UX designers you
                                are ensured of getting the best designs for your application and software  </p>
                            <p class="service-details__text-3">If you need a software design or a software prototype
                                we at Lance Hurler are committed to giving our customers what they want and when they 
                                want it.
                            </p>
                        </div>
                        <br>
                        
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
                                        <p class="service-betails__benefits-text-1">With Lance Hurler you are ensured 
                                            of the following benefits.</p>
                                        <ul class="list-unstyled service-details__benefits-points">
                                            <li>
                                                <div class="icon">
                                                    <i class="icon-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Quality customer service.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="icon-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Premium software maintenance</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="icon-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>24/7 customer support</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="service-details__faq">
                            <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>What is a managed IT service provider?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>There are many variations of passages the majority have suffered
                                                alteration in some fo injected humour, or randomised words
                                                believable. Phasellus a rhoncus erat. Vivamus vel eros vitae est
                                                aliquet pellentesque vitae.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h4>What are the benefits of IT consultant?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>There are many variations of passages the majority have suffered
                                                alteration in some fo injected humour, or randomised words
                                                believable. Phasellus a rhoncus erat. Vivamus vel eros vitae est
                                                aliquet pellentesque vitae.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion last-chiled">
                                    <div class="accrodion-title">
                                        <h4>What can you do if we hire a IT advisor for business?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>There are many variations of passages the majority have suffered
                                                alteration in some fo injected humour, or randomised words
                                                believable. Phasellus a rhoncus erat. Vivamus vel eros vitae est
                                                aliquet pellentesque vitae.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
    <!--Service Details End-->


@endsection

@section('title', 'Lance Hurler | UI\UX Design')