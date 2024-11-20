@extends('frontend.master')

@section('title', 'Services')

@section('body')

    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area bread-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title">
                        <h1>Services</h1>
                        <h6><a href="index.html">Home</a> / Services</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Section  -->

    <div class="service-area gray-bg service-3 section-padding pt-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="service-single wow fadeInLeft animated" data-wow-delay="100ms">
                        <div class="service-img-wrap">
                            <div class="service-thumb">
                                <img src="{{ asset('/') }}frontend/assets/img/service/3-1.jpg" alt="">
                            </div>
                            <div class="services_icon">
                                <i class="flaticon-charging-station"></i>
                            </div>
                        </div>

                        <div class="service-content">
                            <h4>Electric Charging</h4>
                            <p>
                                This services involve transferring the parcels to the closest depot to the delivery location.
                            </p>
                            <a class="main-btn primary" href="single-service.html">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="service-single wow fadeInLeft animated" data-wow-delay="200ms">
                        <div class="service-img-wrap">
                            <div class="service-thumb">
                                <img src="{{ asset('/') }}frontend/assets/img/service/3-2.jpg" alt="">
                            </div>
                            <div class="services_icon">
                                <i class="flaticon-biofuel"></i>
                            </div>
                        </div>
                        <div class="service-content">
                            <h4>CNG Conversion</h4>
                            <p>
                                This courier will usually transport the goods during the night or early of the morning.
                            </p>
                            <a class="main-btn primary" href="single-service.html">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="service-single wow fadeInLeft animated" data-wow-delay="300ms">
                        <div class="service-img-wrap">
                            <div class="service-thumb">
                                <img src="{{ asset('/') }}frontend/assets/img/service/3-3.jpg" alt="">
                            </div>
                            <div class="services_icon">
                                <i class="flaticon-car-wash"></i>
                            </div>
                        </div>
                        <div class="service-content">
                            <h4>Car Washing</h4>
                            <p>
                                This is a service provided to those that safely strict delivery and promptly delivers goods on pallets.
                            </p>

                            <a class="main-btn primary" href="single-service.html">Read More</a>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="service-single wow fadeInLeft animated" data-wow-delay="400ms">
                        <div class="service-img-wrap">
                            <div class="service-thumb">
                                <img src="{{ asset('/') }}frontend/assets/img/service/3-4.jpg" alt="">
                            </div>
                            <div class="services_icon">
                                <i class="flaticon-petrol"></i>
                            </div>
                        </div>
                        <div class="service-content">
                            <h4>Pure Octane</h4>
                            <p>
                                This is a transport service of goods or documents from one country to another country.
                            </p>
                            <a class="main-btn primary" href="single-service.html">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="service-single wow fadeInLeft animated" data-wow-delay="500ms">
                        <div class="service-img-wrap">
                            <div class="service-thumb">
                                <img src="{{ asset('/') }}frontend/assets/img/service/3-5.jpg" alt="">
                            </div>
                            <div class="services_icon">
                                <i class="flaticon-diesel"></i>
                            </div>
                        </div>
                        <div class="service-content">
                            <h4>Light Diesel</h4>
                            <p>
                                This type of service will involve managed storage solutions to give companies greater control.
                            </p>
                            <a class="main-btn primary" href="single-service.html">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="service-single wow fadeInLeft animated" data-wow-delay="600ms">
                        <div class="service-img-wrap">
                            <div class="service-thumb">
                                <img src="{{ asset('/') }}frontend/assets/img/service/3-6.jpg" alt="">
                            </div>
                            <div class="services_icon">
                                <i class="flaticon-biofuel"></i>
                            </div>
                        </div>
                        <div class="service-content">
                            <h4>Crystal Petrol</h4>
                            <p>
                                This is a service provided to those who need urgent delivery to be sent and received on the same day.
                            </p>
                            <a class="main-btn primary" href="single-service.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Extra Service -->

    <div id="xtra" class="xtra-service-wrap section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center ">
                    <div class="section-title">
                        <h6>We Also Do</h6>
                        <h2>More <b>Additional</b> Service in <br> Filling Station</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <div class="xtra-serve-area mt-50 wow fadeInLeft" data-wow-delay=".3s">
                        <img src="{{ asset('/') }}frontend/assets/img/xtra/01.jpg" alt="">
                        <h5>Car Evacaution</h5>
                        <a href="single-service.html" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="xtra-serve-area mt-50 bg-cover wow fadeInLeft" data-wow-delay=".4s">
                        <img src="{{ asset('/') }}frontend/assets/img/xtra/02.jpg" alt="">
                        <h5>Emergency Charging</h5>
                        <a href="single-service.html" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="xtra-serve-area mt-50 bg-cover wow fadeInRight" data-wow-delay=".4s">
                        <img src="{{ asset('/') }}frontend/assets/img/xtra/03.jpg" alt="">
                        <h5>Wheels Pumping</h5>
                        <a href="single-service.html" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="xtra-serve-area mt-50 bg-cover wow fadeInRight" data-wow-delay=".3s">
                        <img src="{{ asset('/') }}frontend/assets/img/xtra/04.jpg" alt="">
                        <h5>Engine Repair</h5>
                        <a href="single-service.html" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Area -->

    <div id="service-2" class="service-area gray-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center ">
                    <div class="section-title">
                        <h6>Favourite Station</h6>
                        <h2>We Provide <b>Fuel</b> Service <br> all type of <b>vehicles</b></h2>
                    </div>
                </div>
            </div>
            <div class="row gx-0">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="single-service-wrapper mt-40">
                        <div class="row gx-0">
                            <div class="col-lg-6 col-md-6">
                                <div class="single-service-bg bg-cover">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-service-area">
                                    <div class="service-icon">
                                        <i class="flaticon-petrol"></i>
                                    </div>
                                    <h5>Pure Octane</h5>
                                    <p>There are some reason build the site lorem ipsum dolor sit amet.</p>
                                    <a href="single-service.html" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="single-service-wrapper mt-40">
                        <div class="row gx-0">
                            <div class="col-lg-6 col-md-6">
                                <div class="single-service-bg service-bg-2 bg-cover">
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-service-area">
                                    <div class="service-icon">
                                        <i class="flaticon-diesel"></i>
                                    </div>
                                    <h5>Light Diesel</h5>
                                    <p>There are some reason build the site lorem ipsum dolor sit amet.</p>
                                    <a href="single-service.html" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gx-0">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="single-service-wrapper">
                        <div class="row gx-0">

                            <div class="col-lg-6 col-md-6">
                                <div class="single-service-area">
                                    <div class="service-icon">
                                        <i class="flaticon-gasoline"></i>
                                    </div>
                                    <h5>Crystal Petrol</h5>
                                    <p>There are some reason build the site lorem ipsum dolor sit amet.</p>
                                    <a href="single-service.html" class="read-more">Read More</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-service-bg service-bg-3 bg-cover">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="single-service-wrapper">
                        <div class="row gx-0">
                            <div class="col-lg-6 col-md-6">
                                <div class="single-service-area">
                                    <div class="service-icon">
                                        <i class="flaticon-charging-station"></i>
                                    </div>
                                    <h5>CNG Conversion</h5>
                                    <p>There are some reason build the site lorem ipsum dolor sit amet.</p>
                                    <a href="single-service.html" class="read-more">Read More</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-service-bg service-bg-4 bg-cover">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Section  -->
    <div class="pricing-section dark-bg section-padding pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h6 class="text-white">Pricing</h6>
                        <h2 class="text-white">Choose <b> Affordable Plan</b> for <br>Your <b>Package</b></h2>
                    </div>
                </div>
            </div>
            <div class="row gx-5 mt-40">
                <div class="col-xl-4- col-lg-4 col-md-6">
                    <div class="single-price-item">
                        <div class="price-inner">
                            <div class="price-amount">
                                <span class="currency">$</span>
                                <span class="value">68</span>
                            </div>
                            <div class="price-titte">
                                <h5>Basic Plan</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="price-feature">
                            <ul>
                                <li><i class="las la-check"></i>Mel detracto atomorum ne</li>
                                <li><i class="las la-check"></i>Eripuit minimum probatus</li>
                                <li><i class="las la-check"></i>Vix ex natum iracundia</li>
                                <li><i class="las la-check"></i>Integer dignissim eros lobor</li>
                                <li><i class="las la-check"></i>Nam et nulla ac urna</li>
                            </ul>
                        </div>
                        <div class="price-btn">
                            <a href="#" class="main-btn">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4- col-lg-4 col-md-6">
                    <div class="single-price-item active">
                        <div class="price-inner">
                            <div class="price-amount">
                                <span class="currency">$</span>
                                <span class="value">168</span>
                            </div>
                            <div class="price-titte">
                                <h5>Standard Plan</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="price-feature">
                            <ul>
                                <li><i class="las la-check"></i>Mel detracto atomorum ne</li>
                                <li><i class="las la-check"></i>Eripuit minimum probatus</li>
                                <li><i class="las la-check"></i>Vix ex natum iracundia</li>
                                <li><i class="las la-check"></i>Integer dignissim eros lobor</li>
                                <li><i class="las la-check"></i>Nam et nulla ac urna</li>
                            </ul>
                        </div>
                        <div class="price-btn">
                            <a href="#" class="main-btn">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4- col-lg-4 col-md-6">
                    <div class="single-price-item">
                        <div class="price-inner">
                            <div class="price-amount">
                                <span class="currency">$</span>
                                <span class="value">268</span>
                            </div>
                            <div class="price-titte">
                                <h5>Premium Plan</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="price-feature">
                            <ul>
                                <li><i class="las la-check"></i>Mel detracto atomorum ne</li>
                                <li><i class="las la-check"></i>Eripuit minimum probatus</li>
                                <li><i class="las la-check"></i>Vix ex natum iracundia</li>
                                <li><i class="las la-check"></i>Integer dignissim eros lobor</li>
                                <li><i class="las la-check"></i>Nam et nulla ac urna</li>
                            </ul>
                        </div>
                        <div class="price-btn">
                            <a href="#" class="main-btn">View More</a>
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
