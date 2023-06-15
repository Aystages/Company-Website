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
                    <li class="active">Software Development</li>
                </ul>
                <h2>Software Development</h2>
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
                                <li class="active"><a href="{{route('software')}}">Software Development <span class="fa fa-long-arrow-alt-right"></span></a></li>

                                <li><a href="{{route('uidesign')}}">UI/UX designing <span class="fa fa-long-arrow-alt-right"></span></a></li>

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
                            <h2 class="service-details__need-help-title">Easy solutions <br> for all your business <br> problems</h2>
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
                            <img src="assets/images/services/service-details-img-1.jpg" alt="">
                        </div>
                        <div class="service-details__content">
                            <h3 class="service-details__content-title">Software Development</h3>
                            <p class="service-details__text-1">Software development refers to a set of computer science activities dedicated to the process of creating, designing, deploying and supporting software. Software itself is the set of instructions or programs that tell a computer what to do. It is independent of hardware and makes computers programmable.</p>
                            <p class="service-details__text-2">What makes us different from other software developers</p>
                            <p class="service-details__text-3">Through the use of agile methodologies we focus on flexibility, collaboration and efficiency to deliver quality products.</p>
                        </div>
                        {{-- <ul class="list-unstyled service-details__points">
                            <li>
                                <div class="service-details__points-icon">
                                    <span class="icon-customer-service"></span>
                                </div>
                                <h4 class="service-details__points-title">Trusted IT advisor</h4>
                                <p class="service-details__points-text">Lorem ipsum is simply free <br> text used by refring.</p>
                            </li>
                            <li>
                                <div class="service-details__points-icon">
                                    <span class="icon-market-analysis"></span>
                                </div>
                                <h4 class="service-details__points-title">Market analysis</h4>
                                <p class="service-details__points-text">Lorem ipsum is simply free <br> text used by refring.</p>
                            </li>
                            <li>
                                <div class="service-details__points-icon">
                                    <span class="icon-technical-support"></span>
                                </div>
                                <h4 class="service-details__points-title">Endpoint managed</h4>
                                <p class="service-details__points-text">Lorem ipsum is simply free <br> text used by refring.</p>
                            </li>
                        </ul>
                        <div class="service-details__points-two">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="service-details__points-two-single">
                                        <div class="service-details__points-two-content">
                                            <h4>Proin tempus</h4>
                                            <p>There are many of of lorem Ipsum, but the majori have suffered.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="service-details__points-two-single">
                                        <div class="service-details__points-two-content">
                                            <h4>Proin tempus</h4>
                                            <p>There are many of of lorem Ipsum, but the majori have suffered.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                        <p class="service-betails__benefits-text-1">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                                        <ul class="list-unstyled service-details__benefits-points">
                                            <li>
                                                <div class="icon">
                                                    <i class="icon-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Praesent efficitur quam sit amet</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="icon-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Nunc cursus dolor id purus euismod</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="icon-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Quisque tincidunt eros ac place viverra</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-details__faq">
                            <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>What is agile software development?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet pellentesque vitae.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h4>What are the benefits of business software?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet pellentesque vitae.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion last-chiled">
                                    <div class="accrodion-title">
                                        <h4>What is the benefit of a company website?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>T</p>
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

@section('title','Lance Hurler | Software Development')