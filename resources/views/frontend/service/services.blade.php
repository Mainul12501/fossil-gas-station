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
                <div class="col-lg-12 text-center ">
                    <div class="section-title">
{{--                        <h6>Favourite Station</h6>--}}
                        <h2>We Provide <b>Fuel</b> Service <br> all type of <b>vehicles</b></h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-6 mb-30 common-height">
                    <div class="service-single wow fadeInLeft animated" data-wow-delay="400ms">
                        <div class="service-img-wrap">
                            <div class="service-thumb">
{{--                                <img src="{{ asset('/') }}frontend/assets/img/service/3-4.jpg" alt="">--}}
                                <img src="{{ asset('/') }}frontend/assets/img/gas-custom/1.jpeg" alt="">
                            </div>
                            <div class="services_icon">
                                <i class="flaticon-petrol"></i>
                            </div>
                        </div>
                        <div class="service-content">
                            <h5>Pure Octane</h5>
                            <p style="text-align: justify">Three times more detergent than the minimum required by the EPA and 30%* more than the minimum specified in the top tier Detergent Gasoline standard recommended by major car manufacturers.</p>
{{--                            <a class="main-btn primary" href="single-service.html">Read More</a>--}}
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 mb-30 common-height">
                    <div class="service-single wow fadeInLeft animated" data-wow-delay="500ms">
                        <div class="service-img-wrap">
                            <div class="service-thumb">
{{--                                <img src="{{ asset('/') }}frontend/assets/img/service/3-5.jpg" alt="">--}}
                                <img src="{{ asset('/') }}frontend/assets/img/gas-custom/9.jpeg" alt="">
                            </div>
                            <div class="services_icon">
                                <i class="flaticon-diesel"></i>
                            </div>
                        </div>
                        <div class="service-content">
                            <h5>Renewable Diesel</h5>
                            <div class="color-898a9c">
                                <ul class="nav">
                                    <p class="mb-1">Fueling a Greener Future</p>
                                    <p class="mb-1">Lower carbon footprint</p>
                                    <p class="mb-1">More efficient engine</p>
                                    <p class="mb-1">Quicker start, quieter running</p>
                                    <p class="mb-1">High performance</p>
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
{{--                                <img src="{{ asset('/') }}frontend/assets/img/service/3-6.jpg" alt="">--}}
                                <img src="{{ asset('/') }}frontend/assets/img/gas-custom/14.jfif" alt="">
                            </div>
                            <div class="services_icon">
{{--                                <i class="flaticon-biofuel"></i>--}}
                                <img src="{{ asset('frontend/assets/img/gas-custom/free-air.png') }}" alt="" style="height: 45px; width: 45px;">
                            </div>
                        </div>
                        <div class="service-content">
                            <h5>Free Air</h5>
                            <div class="color-898a9c">
                                <p style="text-align: justify">As part of our commitment to customer convenience, all our gas customers enjoy complimentary access to tire inflation stations</p>
                            </div>
{{--                            <a class="main-btn primary" href="single-service.html">Read More</a>--}}
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 mb-30 common-height">
                    <div class="service-single wow fadeInLeft animated" data-wow-delay="100ms">
                        <div class="service-img-wrap">
                            <div class="service-thumb">
{{--                                <img src="{{ asset('/') }}frontend/assets/img/service/3-1.jpg" alt="">--}}
                                <img src="{{ asset('/') }}frontend/assets/img/gas-custom/6.jpeg" alt="">
                            </div>
                            <div class="services_icon">
                                <!--<i class="flaticon-charging-station"></i>-->
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/013/468/392/small_2x/clock-time-line-icon-png.png" class="" style="height:50px" />
                            </div>
                        </div>

                        <div class="service-content">
                            <h5>10 min Oil Change services</h5>
                            <p>Fast, Reliable, and Hassle-Free.</p>
                            <div class="color-898a9c">
                                <p style="text-align: justify">Get a premium oil change in just 10 minutes, tailored to your vehicle. Enjoy added convenience with a quick health check and top-quality oil for optimal performance and longevity</p>
                            </div>
{{--                            <p><i>Experience speed, quality, and efficiency with our 10-Minute Oil Change Services.</i></p>--}}
                            {{--                            <a class="main-btn primary" href="single-service.html">Read More</a>--}}
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 mb-30 common-height">
                    <div class="service-single wow fadeInLeft animated" data-wow-delay="300ms">
                        <div class="service-img-wrap">
                            <div class="service-thumb">
{{--                                <img src="{{ asset('/') }}frontend/assets/img/service/3-3.jpg" alt="">--}}
                                <img src="{{ asset('/') }}frontend/assets/img/gas-custom/12.jpg" alt="">
                            </div>
                            <div class="services_icon">
                                <i class="flaticon-car-wash"></i>
                            </div>
                        </div>
                        <div class="service-content">
                            <h5>Cas Washing</h5>
                            <p>A Sparkling Clean Ride Awaits!</p>
                            <div class="color-898a9c">
                                <p style="text-align: justify">Enjoy an eco-friendly, quick, and efficient car wash in under 15 minutes. Choose from customizable services with advanced technology, ensuring a spotless finish at affordable prices.</p>
                            </div>

                            {{--                            <a class="main-btn primary" href="single-service.html">Read More</a>--}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30 common-height">
                    <div class="service-single wow fadeInLeft animated" data-wow-delay="300ms">
                        <div class="service-img-wrap">
                            <div class="service-thumb">
{{--                                <img src="{{ asset('/') }}frontend/assets/img/service/3-3.jpg" alt="">--}}
                                <img src="{{ asset('/') }}frontend/assets/img/gas-custom/13.jpg" alt="" style="min-height: 250px">
                            </div>
                            <div class="services_icon">
{{--                                <i class="flaticon-car-wash"></i>--}}
                                <img src="{{ asset('/frontend/assets/img/gas-custom/flat-tire.png') }}" alt="" style="height: 45px; width: 45px;" >
                            </div>
                        </div>
                        <div class="service-content">
                            <h5>Flat Tire</h5>
                            <p>Tire Care That Goes the Extra Mile.</p>
                            <div class="color-898a9c">
                                <p style="text-align: justify">Facing a flat tire? No worries! Our service ensures you’re back on the road quickly and safely with the necessary support.</p>
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

{{--    <div id="service-2" class="service-area gray-bg section-padding">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12 text-center ">--}}
{{--                    <div class="section-title">--}}
{{--                        <h6>Favourite Station</h6>--}}
{{--                        <h2>We Provide <b>Fuel</b> Service <br> all type of <b>vehicles</b></h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row gx-0">--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12">--}}
{{--                    <div class="single-service-wrapper mt-40">--}}
{{--                        <div class="row gx-0">--}}
{{--                            <div class="col-lg-6 col-md-6">--}}
{{--                                <div class="single-service-bg bg-cover">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6">--}}
{{--                                <div class="single-service-area">--}}
{{--                                    <div class="service-icon">--}}
{{--                                        <i class="flaticon-petrol"></i>--}}
{{--                                    </div>--}}
{{--                                    <h5>Pure Octane</h5>--}}
{{--                                    <p>Three times more detergent than the minimum required by the EPA and 30%* more than the minimum specified in the top tier Detergent Gasoline standard recommended by major car manufacturers.</p>--}}
{{--                                    <a href="single-service.html" class="read-more">Read More</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12">--}}
{{--                    <div class="single-service-wrapper mt-40">--}}
{{--                        <div class="row gx-0">--}}
{{--                            <div class="col-lg-6 col-md-6">--}}
{{--                                <div class="single-service-bg service-bg-2 bg-cover">--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6">--}}
{{--                                <div class="single-service-area">--}}
{{--                                    <div class="service-icon">--}}
{{--                                        <i class="flaticon-diesel"></i>--}}
{{--                                    </div>--}}
{{--                                    <h5>Renewable Diesel</h5>--}}
{{--                                    <div class="color-898a9c">--}}
{{--                                        <ul class="nav">--}}
{{--                                            <li>Fueling a Greener Future</li>--}}
{{--                                            <li>Lower carbon footprint</li>--}}
{{--                                            <li>More efficient engine</li>--}}
{{--                                            <li>Quicker start, quieter running</li>--}}
{{--                                            <li>High performance</li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <a href="single-service.html" class="read-more">Read More</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row gx-0">--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12">--}}
{{--                    <div class="single-service-wrapper">--}}
{{--                        <div class="row gx-0">--}}

{{--                            <div class="col-lg-6 col-md-6">--}}
{{--                                <div class="single-service-area">--}}
{{--                                    <div class="service-icon">--}}
{{--                                        <i class="flaticon-gasoline"></i>--}}
{{--                                    </div>--}}
{{--                                    <h5>Free Air and flat tire solution</h5>--}}
{{--                                    <p>Tire Care That Goes the Extra Mile.</p>--}}
{{--                                    <div class="color-898a9c">--}}
{{--                                        <ul>--}}
{{--                                            <li><b>Free Air for Tires</b>: As part of our commitment to customer convenience, all our gas customers enjoy complimentary access to tire inflation stations.</li>--}}
{{--                                            <li><b>Flat Tire Solution</b>: Facing a flat tire? No worries! Our service ensures you’re back on the road quickly and safely with the necessary support.</li>--}}
{{--                                            <li><b>Drive with Confidence</b>: Properly inflated tires enhance fuel efficiency, improve vehicle handling, and reduce the risk of accidents.</li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6">--}}
{{--                                <div class="single-service-bg service-bg-3 bg-cover">--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12">--}}
{{--                    <div class="single-service-wrapper">--}}
{{--                        <div class="row gx-0">--}}
{{--                            <div class="col-lg-6 col-md-6">--}}
{{--                                <div class="single-service-area">--}}
{{--                                    <div class="service-icon">--}}
{{--                                        <i class="flaticon-charging-station"></i>--}}
{{--                                    </div>--}}
{{--                                    <h5>10 min Oil Change services</h5>--}}
{{--                                    <p>Fast, Reliable, and Hassle-Free.</p>--}}
{{--                                    <div class="color-898a9c">--}}
{{--                                        <ul>--}}
{{--                                            <li><b>Quick Oil Changes</b>: Our state-of-the-art facility ensures your engine oil is replaced in just 10 minutes, saving you time and keeping you on the go.</li>--}}
{{--                                            <li><b>High-Quality Oil</b>: We use premium-grade engine oil tailored to your vehicle's specifications to enhance engine performance and longevity.</li>--}}
{{--                                            <li><b>Convenience at Its Best</b>: No need to schedule hours out of your day. Drive in, get your oil changed, and drive out with confidence.</li>--}}
{{--                                            <li><b>Added Perks</b>: Our professional staff conducts a quick health check for your car during the oil change to ensure optimal vehicle condition.</li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <p><i>Experience speed, quality, and efficiency with our 10-Minute Oil Change Services.</i></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6">--}}
{{--                                <div class="single-service-bg service-bg-4 bg-cover">--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
@push('style')
    <style>
        .color-898a9c {color: #898a9c!important;}
        .service-content ul li  {padding-left: 0px;}
        .service-thumb {max-height: 250px}
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
            $('.common-height .service-single').css('height', height+'px');
        })
    </script>
@endpush
