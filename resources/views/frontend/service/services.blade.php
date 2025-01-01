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
                        <h6><a href="{{ route('home') }}">Home</a> / Services</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Section  -->

    <div class="service-area gray-bg service-3 section-padding pt-100">
        <div class="container">
            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-6 mb-30 common-height">
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
                            <h5>Pure Octane</h5>
                            <p>Three times more detergent than the minimum required by the EPA and 30%* more than the minimum specified in the top tier Detergent Gasoline standard recommended by major car manufacturers.</p>
{{--                            <a class="main-btn primary" href="single-service.html">Read More</a>--}}
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 mb-30 common-height">
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
                            <h5>Renewable Diesel</h5>
                            <div class="color-898a9c">
                                <ul class="nav">
                                    <li>Fueling a Greener Future</li>
                                    <li>Lower carbon footprint</li>
                                    <li>More efficient engine</li>
                                    <li>Quicker start, quieter running</li>
                                    <li>High performance</li>
                                </ul>
                            </div>
{{--                            <a class="main-btn primary" href="single-service.html">Read More</a>--}}
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 mb-30 common-height">
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
                            <h5>Free Air and flat tire solution</h5>
                            <p>Tire Care That Goes the Extra Mile.</p>
                            <div class="color-898a9c">
                                <ul>
                                    <li><b>Free Air for Tires</b>: As part of our commitment to customer convenience, all our gas customers enjoy complimentary access to tire inflation stations.</li>
                                    <li><b>Flat Tire Solution</b>: Facing a flat tire? No worries! Our service ensures you’re back on the road quickly and safely with the necessary support.</li>
                                    <li><b>Drive with Confidence</b>: Properly inflated tires enhance fuel efficiency, improve vehicle handling, and reduce the risk of accidents.</li>
                                </ul>
                            </div>
{{--                            <a class="main-btn primary" href="single-service.html">Read More</a>--}}
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 mb-30 common-height">
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
                            <h5>10 min Oil Change services</h5>
                            <p>Fast, Reliable, and Hassle-Free.</p>
                            <div class="color-898a9c">
                                <ul>
                                    <li><b>Quick Oil Changes</b>: Our state-of-the-art facility ensures your engine oil is replaced in just 10 minutes, saving you time and keeping you on the go.</li>
                                    <li><b>High-Quality Oil</b>: We use premium-grade engine oil tailored to your vehicle's specifications to enhance engine performance and longevity.</li>
                                    <li><b>Convenience at Its Best</b>: No need to schedule hours out of your day. Drive in, get your oil changed, and drive out with confidence.</li>
                                    <li><b>Added Perks</b>: Our professional staff conducts a quick health check for your car during the oil change to ensure optimal vehicle condition.</li>
                                </ul>
                            </div>
                            <p><i>Experience speed, quality, and efficiency with our 10-Minute Oil Change Services.</i></p>
                            {{--                            <a class="main-btn primary" href="single-service.html">Read More</a>--}}
                        </div>
                    </div>
                </div>

{{--                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">--}}
{{--                    <div class="service-single wow fadeInLeft animated" data-wow-delay="200ms">--}}
{{--                        <div class="service-img-wrap">--}}
{{--                            <div class="service-thumb">--}}
{{--                                <img src="{{ asset('/') }}frontend/assets/img/service/3-2.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="services_icon">--}}
{{--                                <i class="flaticon-biofuel"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="service-content">--}}
{{--                            <h4>CNG Conversion</h4>--}}
{{--                            <p>--}}
{{--                                This courier will usually transport the goods during the night or early of the morning.--}}
{{--                            </p>--}}
{{--                            --}}{{--                            <a class="main-btn primary" href="single-service.html">Read More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="col-xl-4 col-lg-4 col-md-6 mb-30 common-height">
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
                            <h5>Cas Washing</h5>
                            <p>A Sparkling Clean Ride Awaits!</p>
                            <div class="color-898a9c">
                                <ul>
                                    <li><b>Eco-Friendly Wash</b>: We use environmentally safe cleaning agents that protect your car’s surface while preserving nature.</li>
                                    <li><b>Quick and Efficient Service</b>: Get your car thoroughly washed and dried in under 15 minutes without compromising quality.</li>
                                    <li><b>Advanced Technology</b>: State-of-the-art equipment ensures a spotless, streak-free shine on every vehicle.</li>
                                    <li><b>Customizable Options</b>: Choose from a range of services, including exterior wash, interior vacuuming, waxing, and tire cleaning.</li>
                                    <li><b>Affordable Pricing</b>: High-quality car washing at prices that don’t break the bank.</li>
                                </ul>
                            </div>

                            {{--                            <a class="main-btn primary" href="single-service.html">Read More</a>--}}
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
{{--                        <a href="single-service.html" class="read-more">Read More</a>--}}
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="xtra-serve-area mt-50 bg-cover wow fadeInLeft" data-wow-delay=".4s">
                        <img src="{{ asset('/') }}frontend/assets/img/xtra/02.jpg" alt="">
                        <h5>Emergency Charging</h5>
{{--                        <a href="single-service.html" class="read-more">Read More</a>--}}
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="xtra-serve-area mt-50 bg-cover wow fadeInRight" data-wow-delay=".4s">
                        <img src="{{ asset('/') }}frontend/assets/img/xtra/03.jpg" alt="">
                        <h5>Wheels Pumping</h5>
{{--                        <a href="single-service.html" class="read-more">Read More</a>--}}
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="xtra-serve-area mt-50 bg-cover wow fadeInRight" data-wow-delay=".3s">
                        <img src="{{ asset('/') }}frontend/assets/img/xtra/04.jpg" alt="">
                        <h5>Engine Repair</h5>
{{--                        <a href="single-service.html" class="read-more">Read More</a>--}}
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
                                    <p>Three times more detergent than the minimum required by the EPA and 30%* more than the minimum specified in the top tier Detergent Gasoline standard recommended by major car manufacturers.</p>
{{--                                    <a href="single-service.html" class="read-more">Read More</a>--}}
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
                                    <h5>Renewable Diesel</h5>
                                    <div class="color-898a9c">
                                        <ul class="nav">
                                            <li>Fueling a Greener Future</li>
                                            <li>Lower carbon footprint</li>
                                            <li>More efficient engine</li>
                                            <li>Quicker start, quieter running</li>
                                            <li>High performance</li>
                                        </ul>
                                    </div>
{{--                                    <a href="single-service.html" class="read-more">Read More</a>--}}
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
                                    <h5>Free Air and flat tire solution</h5>
                                    <p>Tire Care That Goes the Extra Mile.</p>
                                    <div class="color-898a9c">
                                        <ul>
                                            <li><b>Free Air for Tires</b>: As part of our commitment to customer convenience, all our gas customers enjoy complimentary access to tire inflation stations.</li>
                                            <li><b>Flat Tire Solution</b>: Facing a flat tire? No worries! Our service ensures you’re back on the road quickly and safely with the necessary support.</li>
                                            <li><b>Drive with Confidence</b>: Properly inflated tires enhance fuel efficiency, improve vehicle handling, and reduce the risk of accidents.</li>
                                        </ul>
                                    </div>
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
                                    <h5>10 min Oil Change services</h5>
                                    <p>Fast, Reliable, and Hassle-Free.</p>
                                    <div class="color-898a9c">
                                        <ul>
                                            <li><b>Quick Oil Changes</b>: Our state-of-the-art facility ensures your engine oil is replaced in just 10 minutes, saving you time and keeping you on the go.</li>
                                            <li><b>High-Quality Oil</b>: We use premium-grade engine oil tailored to your vehicle's specifications to enhance engine performance and longevity.</li>
                                            <li><b>Convenience at Its Best</b>: No need to schedule hours out of your day. Drive in, get your oil changed, and drive out with confidence.</li>
                                            <li><b>Added Perks</b>: Our professional staff conducts a quick health check for your car during the oil change to ensure optimal vehicle condition.</li>
                                        </ul>
                                    </div>
                                    <p><i>Experience speed, quality, and efficiency with our 10-Minute Oil Change Services.</i></p>
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
@endsection
@push('style')
    <style>
        .color-898a9c {color: #898a9c!important;}
        .service-content ul li  {padding-left: 0px;}
    </style>
@endpush

@push('script')
    <script>
        $(function () {
            let height = 0;
            $('.common-height').each(function () {
                if ($(this).height() > height) {
                    height = $(this).height();
                }
            });
            console.log(height);
            $('.common-height .single-serv-item').css('height', height+'px');
        })
    </script>
@endpush
