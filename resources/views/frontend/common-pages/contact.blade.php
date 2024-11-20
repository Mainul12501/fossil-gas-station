@extends('frontend.master')

@section('title', 'Contact Page')

@section('body')

    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area bread-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title">
                        <h1>Contact</h1>
                        <h6><a href="index.html">Home</a> / Contact</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Area -->

    <div id="contact-us" class="contact-us-area section-padding">
        <div class="container">
            <div class="contact-us-wrapper">
                <div class="row gx-0">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="contact-us-inner">
                            <div class="info-i"><span><i class="las la-map-marker"></i></span></div>
                            <h5>Location</h5>
                            <p>66 Broklyn Streat <br>New York, USA</p>
                            <a href="#">Find us on map</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="contact-us-inner">
                            <div class="info-i"><span><i class="las la-clock"></i></span></div>
                            <h5>Office Hour</h5>
                            <p>Monday-Friday <br>08.00-20.00</p>
                            <a href="#">Get Direction</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="contact-us-inner">
                            <div class="info-i"><span><i class="las la-mobile"></i></span></div>
                            <h5>Phone Number</h5>
                            <p>(+1)212-946-2064 <br>(+3)112-976-2067</p>
                            <a href="#">Call Now</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="contact-us-inner">
                            <div class="info-i"><span><i class="las la-envelope"></i></span></div>
                            <h5>E-mail Address</h5>
                            <p>info@expoint.com<br>info@webmail.com</p>
                            <a href="#">Mail Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact Form -->

    <div id="contact-page" class="contact-section blue-bg section-padding">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 text-center wow fadeInRight">
                    <div class="contact-form-wrapper">
                        <div class="section-title">
                            <h2>Get in <b>Touch</b></h2>
                        </div>
                        <div class="contact-form">
                            <form action="https://capricorn-theme.com/html/fossil/index.html">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="email" placeholder="E-mail">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="tel" placeholder="Phone Number">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" placeholder="Subject">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Write Message"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-12 text-center">
                                        <button class="main-btn">Get A Quote</button>
                                    </div>
                                </div>
                            </form>
                        </div>
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