@extends('frontend.master')

@section('title', 'Home Page')

@section('body')
    <!-- Hero Area -->

    <div class="homepage-slides owl-carousel">
        <div class="single-slide-item">
            <div class="overlay"></div>
            <div class="hero-area-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".3s">
                            <div class="section-title">
                                <h6>Welcome to Fossil</h6>
                                <h1>Charging Solutions <br>for Electric Vehicle</h1>
                                <p> Fuel Revolution, in modern history, the process of change from an agrarian <br>and handicraft economy to one dominated by fuel and refueling services.</p>
                            </div>
                            <a href="services.html" class="main-btn">Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-slide-item hero-area-bg-2">
            <div class="overlay"></div>
            <div class="hero-area-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".3s">
                            <div class="section-title">
                                <h6>Since in 1995</h6>
                                <h1>We are leading <br> <b>Filling Station</b></h1>
                                <p> Fuel Revolution, in modern history, the process of change from an agrarian <br>and handicraft economy to one dominated by fuel and refueling services.</p>
                            </div>
                            <a href="price.html" class="main-btn">Get A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section-->

    <div class="about-area section-padding pt-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay=".3s">
                    <div class="info-content-area">
                        <div class="section-title">
                            <h6>About Us</h6>
                            <h2>Universal Charging Solutions for Electric Vehicles</h2>
                        </div>
                        <p>Since our launch in 1995, our vision and focus has been to deliver high value service for our clients with the emphasis on communication and attention to detail.</p>
                        <p class="highlight"><i class="las la-check-circle"></i>From Starting our launch to service with dignity.</p>
                        <p class="highlight"><i class="las la-check-circle"></i>We always provide flexible & quality task. </p>
                        <p class="highlight"><i class="las la-check-circle"></i>Unique latest machinary used the fuel supply.</p>

                        <a href="about.html" class="main-btn">Learn More</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay=".4s">

                    <div class="info-img">
                        <img src="{{ asset('/') }}frontend/assets/img/about/about.jpg" alt="">

                        <div class="experience-wrap">
                            <img src="{{ asset('/') }}frontend/assets/img/electric-station.png" alt="">
                            <span>25+</span>
                            <p>Year of Experience</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Services Area -->

    <div id="service-1" class="services-area gray-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 text-center">
                    <div class="section-title">
                        <h6>Services</h6>
                        <h2>Best Service for <br> all type of <b>Electric</b> vehicles</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-serv-item active mt-30 wow fadeInLeft" data-wow-delay=".6s">
                        <div class="serv-icon">
                            <i class="flaticon-charging-station"></i>
                        </div>
                        <div class="serv-content">
                            <h5>CNG Conversion</h5>
                            <p>This services involve transferring the parcels to the closest depot to the delivery location.</p>
                        </div>
                        <a href="single-service.html" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-serv-item mt-30 wow fadeInLeft" data-wow-delay=".6s">
                        <div class="serv-icon">
                            <i class="flaticon-biofuel"></i>
                        </div>
                        <div class="serv-content">
                            <h5>Electric Charging</h5>
                            <p>This services involve transferring the parcels to the closest depot to the delivery location.</p>
                        </div>
                        <a href="single-service.html" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-serv-item active mt-30 wow fadeInLeft" data-wow-delay=".6s">
                        <div class="serv-icon">
                            <i class="flaticon-car-wash"></i>
                        </div>
                        <div class="serv-content">
                            <h5>Cas Washing</h5>
                            <p>This services involve transferring the parcels to the closest depot to the delivery location.</p>
                        </div>
                        <a href="single-service.html" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-serv-item mt-30 wow fadeInLeft" data-wow-delay=".2s">
                        <div class="serv-icon">
                            <i class="flaticon-petrol"></i>
                        </div>
                        <div class="serv-content">
                            <h5>Pure Octane</h5>
                            <p>This services involve transferring the parcels to the closest depot to the delivery location.</p>
                        </div>
                        <a href="single-service.html" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-serv-item active mt-30 wow fadeInLeft" data-wow-delay=".4s">
                        <div class="serv-icon">
                            <i class="flaticon-diesel"></i>
                        </div>
                        <div class="serv-content">
                            <h5>Light Diesel</h5>
                            <p>This services involve transferring the parcels to the closest depot to the delivery location.</p>
                        </div>
                        <a href="single-service.html" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-serv-item mt-30 wow fadeInLeft" data-wow-delay=".6s">
                        <div class="serv-icon">
                            <i class="flaticon-gasoline"></i>
                        </div>
                        <div class="serv-content">
                            <h5>Crystal Petrol</h5>
                            <p>This services involve transferring the parcels to the closest depot to the delivery location.</p>
                        </div>
                        <a href="single-service.html" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Extra Service -->

    <div id="xtra" class="xtra-service-wrap section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="section-title">
                        <h6>We Also Do</h6>
                        <h2>More <b>Additional</b> Service in <br> Filling Station</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <div class="xtra-serve-area mt-30 wow fadeInLeft" data-wow-delay=".3s">
                        <img src="{{ asset('/') }}frontend/assets/img/xtra/01.jpg" alt="">
                        <h5>Car Evacaution</h5>
                        <a href="single-service.html" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="xtra-serve-area mt-30 bg-cover wow fadeInLeft" data-wow-delay=".4s">
                        <img src="{{ asset('/') }}frontend/assets/img/xtra/02.jpg" alt="">
                        <h5>Emergency Charging</h5>
                        <a href="single-service.html" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="xtra-serve-area mt-30 bg-cover wow fadeInRight" data-wow-delay=".4s">
                        <img src="{{ asset('/') }}frontend/assets/img/xtra/03.jpg" alt="">
                        <h5>Wheels Pumping</h5>
                        <a href="single-service.html" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="xtra-serve-area mt-30 bg-cover wow fadeInRight" data-wow-delay=".3s">
                        <img src="{{ asset('/') }}frontend/assets/img/xtra/04.jpg" alt="">
                        <h5>Engine Repair</h5>
                        <a href="single-service.html" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Achievement Area -->

    <div class="skill-area">
        <div class="skill-bg bg-cover">
            <div class="overlay">
            </div>
            <div class="pop-up-video">
                <a href="https://www.youtube.com/watch?v=nibU1Iq6g3Y" class="video-play-btn mfp-iframe">
                    <i class="fa fa-play"></i>
                </a>
            </div>
        </div>
        <div class="skill-content">
            <div class="section-title mb-30">
                <h6>Our Achievement</h6>
                <h2>Our Brilliant Skill & <b><br>Creativity</b></h2>
            </div>
            <p>There are planty industrial solution the filed. One of the best civil work in downtown have done by expert contractor.</p>
            <div class="row gx-0 mt-40">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="single-counter-box one">
                        <div class="fact-icon">
                            <i class="flaticon-book"></i>
                        </div>
                        <p class="counter-number"><span>2150</span>+</p>
                        <h6>Satisfied Client</h6>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="single-counter-box two">
                        <div class="fact-icon">
                            <i class="flaticon-attorney"></i>
                        </div>
                        <p class="counter-number"><span>132</span></p>
                        <h6>Worldwide Branches</h6>
                    </div>
                </div>
            </div>
            <div class="row gx-0">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="single-counter-box three">
                        <div class="fact-icon">
                            <i class="flaticon-support"></i>
                        </div>
                        <p class="counter-number"><span>55</span></p>
                        <h6>Countries Covered</h6>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="single-counter-box four">
                        <div class="fact-icon">
                            <i class="flaticon-insurance"></i>
                        </div>
                        <p class="counter-number"><span>5.0</span></p>
                        <h6>Review</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section-->

    <div class="team-area section-padding text-center pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 ">
                    <div class="section-title text-center">
                        <h6>Expert</h6>
                        <h2>Meet Our <b>Dedicated</b> Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-team-member wow fadeInLeft" data-wow-delay=".2s">
                        <div class="team-member-bg">
                            <div class="team-content">
                                <div class="team-title">
                                    <a href="#">James Cameron</a>
                                </div>
                                <div class="team-subtitle">
                                    <p>Manager</p>
                                </div>
                            </div>
                            <div class="team-social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i> </a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-team-member wow fadeInLeft" data-wow-delay=".4s">
                        <div class="team-member-bg team-bg-2">
                            <div class="team-content">
                                <div class="team-title">
                                    <a href="#">Mich Thomson</a>
                                </div>
                                <div class="team-subtitle">
                                    <p>Supervisor</p>
                                </div>
                            </div>
                            <div class="team-social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i> </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-team-member wow fadeInRight" data-wow-delay=".6s">
                        <div class="team-member-bg team-bg-3">
                            <div class="team-content">
                                <div class="team-title">
                                    <a href="#">Josh Batlar</a>
                                </div>
                                <div class="team-subtitle">
                                    <p>Sr. Executive</p>
                                </div>
                            </div>
                            <div class="team-social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-team-member wow fadeInRight" data-wow-delay=".8s">
                        <div class="team-member-bg team-bg-4">
                            <div class="team-content">
                                <div class="team-title">
                                    <a href="#">Albert Gill</a>
                                </div>
                                <div class="team-subtitle">
                                    <p>Relation Officer</p>
                                </div>
                            </div>
                            <div class="team-social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i> </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Faq Section  -->
    <div class="faq-section section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-content-wrap">
                        <div class="section-title">
                            <h6>FAQ</h6>
                            <h2>Frequently Asked Question</h2>
                        </div>
                        <div class="cp-custom-accordion mt-20">
                            <div class="accordions" id="accordionExample">
                                <div class="accordion-items">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-buttons" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            1. How does the charging process work?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            The time it takes to repair a roof depends on the extent of the damage.
                                            For minor repairs, it might take an hour or two. For significant repairs,
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            2. How to find the nearest charging station?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            The time it takes to repair a roof depends on the extent of the damage.
                                            For minor repairs, it might take an hour or two. For significant repairs,
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-items">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            4. What Payments method are accepted?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            The time it takes to repair a roof depends on the extent of the damage.
                                            For minor repairs, it might take an hour or two. For significant repairs,
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 align-items-end">
                    <div class="faq-img-wrap">
                        <img src="{{ asset('/') }}frontend/assets/img/faq-img.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Section -->

    <div class="testimonial-area gray-bg section-padding">
        <div class="capricorn-testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center ">
                        <div class="section-title">
                            <h6>Testimonial</h6>
                            <h2>What Our Clients Say About Us</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="client-carousel owl-carousel">
                            <div class="single-client-item">
                                <div class="testimonial-icon"><i class="las la-quote-left"></i></div>
                                <p>Tempore, cum soluta nobis est opio
                                    cumque nihil impedit quo minus ide
                                    maxime placeat facere possimus
                                    nis voluptas assumenda est, omni
                                    dolor repellendus emoribus autem
                                    quibusdam et aut officiis.
                                </p>
                                <div class="testimonial-author">
                                    <div class="author-img">
                                        <img src="{{ asset('/') }}frontend/assets/img/testimonial/1.jpg" alt="">
                                    </div>
                                    <div class="author-desc">
                                        <h5>Paul Scholes</h5><span>Customer</span>
                                    </div>
                                </div>


                            </div>

                            <div class="single-client-item">
                                <div class="testimonial-icon"><i class="las la-quote-left"></i></div>
                                <p>Doloremue laudantium totam
                                    rem aperiam eaque iesa zuae
                                    ab illo inventore veritatis et ua
                                    i architecto beatae vitae dicta
                                    sunt explicabo nemo am voluptatem vitae dicta
                                    suntruia.enim is
                                    am voluptatem ruia.</p>
                                <div class="testimonial-author">
                                    <div class="author-img">
                                        <img src="{{ asset('/') }}frontend/assets/img/testimonial/2.jpg" alt="">
                                    </div>
                                    <div class="author-desc">
                                        <h5>Monica Lisa</h5><span>Customer</span>
                                    </div>
                                </div>
                            </div>

                            <div class="single-client-item">
                                <div class="testimonial-icon"><i class="las la-quote-left"></i></div>
                                <p>Nam libero tempore, cum soluta nobi
                                    est eligendi optio cumque nihil impeit
                                    quo minus id quod maxime placeat
                                    facere possimus, omnis voluptas ass
                                    umenda est, omnis dolor repellendus
                                    emporibus autem zrosi.</p>
                                <div class="testimonial-author">
                                    <div class="author-img">
                                        <img src="{{ asset('/') }}frontend/assets/img/testimonial/3.jpg" alt="">
                                    </div>
                                    <div class="author-desc">
                                        <h5>Ryans Gigs</h5><span>Customer</span>
                                    </div>
                                </div>
                            </div>

                            <div class="single-client-item">
                                <div class="testimonial-icon"><i class="las la-quote-left"></i></div>
                                <p>Doloremue laudantium totam
                                    rem aperiam eaque iesa zuae
                                    ab illo inventore veritatis et ua
                                    i architecto beatae vitae dicta
                                    sunt explicabo nemo am voluptatem vitae dicta
                                    suntruia.enim is
                                    am voluptatem ruia.</p>
                                <div class="testimonial-author">
                                    <div class="author-img">
                                        <img src="{{ asset('/') }}frontend/assets/img/testimonial/4.jpg" alt="">
                                    </div>
                                    <div class="author-desc">
                                        <h5>Sarah Fatima</h5><span>Customer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Facility Area -->

    <div class="facility-area dark-bg section-padding">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 text-center">
                    <div class="section-title">
                        <h6>Our Facility</h6>
                        <h2>We <b>care</b> about your <br>comfort & <b>safety</b></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-facility-area wow fadeInLeft" data-wow-delay=".2s">
                        <div class="facility-icon">
                            <img src="{{ asset('/') }}frontend/assets/img/icon/wifi-router.png" alt="">
                        </div>
                        <h4>Free Wifi Zone</h4>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-facility-area wow fadeInLeft" data-wow-delay=".4s">
                        <div class="facility-icon">
                            <img src="{{ asset('/') }}frontend/assets/img/icon/dish.png" alt="">
                        </div>
                        <h4>Restaurant</h4>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".6s">
                    <div class="single-facility-area">
                        <div class="facility-icon">
                            <img src="{{ asset('/') }}frontend/assets/img/icon/teddy-bear.png" alt="">
                        </div>
                        <h4>Children's area</h4>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-facility-area wow fadeInLeft" data-wow-delay=".8s">
                        <div class="facility-icon">
                            <img src="{{ asset('/') }}frontend/assets/img/icon/technology.png" alt="">
                        </div>
                        <h4>TV Hall</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Client Section -->

    <div class="client-area pt-50 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo-carousel owl-carousel">
                        <div class="single-logo-wrapper">
                            <div class="logo-inner-item">
                                <img src="{{ asset('/') }}frontend/assets/img/client/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="single-logo-wrapper">
                            <div class="logo-inner-item">
                                <img src="{{ asset('/') }}frontend/assets/img/client/2.jpg" alt="">
                            </div>
                        </div>
                        <div class="single-logo-wrapper">
                            <div class="logo-inner-item">
                                <img src="{{ asset('/') }}frontend/assets/img/client/3.jpg" alt="">
                            </div>
                        </div>
                        <div class="single-logo-wrapper">
                            <div class="logo-inner-item">
                                <img src="{{ asset('/') }}frontend/assets/img/client/4.jpg" alt="">
                            </div>
                        </div>
                        <div class="single-logo-wrapper">
                            <div class="logo-inner-item">
                                <img src="{{ asset('/') }}frontend/assets/img/client/5.jpg" alt="">
                            </div>
                        </div>
                        <div class="single-logo-wrapper">
                            <div class="logo-inner-item">
                                <img src="{{ asset('/') }}frontend/assets/img/client/6.jpg" alt="">
                            </div>
                        </div>
                        <div class="single-logo-wrapper">
                            <div class="logo-inner-item">
                                <img src="{{ asset('/') }}frontend/assets/img/client/7.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
