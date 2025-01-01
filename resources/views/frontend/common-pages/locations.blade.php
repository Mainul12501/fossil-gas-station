@extends('frontend.master')

@section('title', 'Locations page')

@section('body')

    <!-- Breadcroumb Area -->

{{--    <div class="breadcroumb-area bread-bg">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="breadcroumb-title">--}}
{{--                        <h1>Contact</h1>--}}
{{--                        <h6><a href="{{ route('home') }}">Home</a> / Locations</h6>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <section class="py-5 location-banner-min-height" style="background-image: url({{ asset('frontend/assets/img/slider/slide-1.jpg') }}); background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="card bg-transparent border-0">
                            <img src="{{ asset(isset($basicSetting) ? $basicSetting->logo : 'frontend/assets/img/logo.png' ) }}" alt="" class="card-img-top">
                            <div class="card-body ">
                                <h1 class="text-white">Find Us</h1>
                                <p class="text-white">Explore what we have to offer</p>
                                <div>
                                    <a href="#locationsArea" class="btn btn-outline-primary text-warning">Find A Station Near You</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>

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
                <div class="col-lg-4 col-md-6 col-sm-12 common-height">
                    <div class="single-serv-item mt-30 wow fadeInLeft" data-wow-delay=".2s">
                        <div class="serv-icon">
                            <i class="flaticon-petrol"></i>
                        </div>
                        <div class="serv-content">
                            <h5>Pure Octane</h5>
                            <p>Three times more detergent than the minimum required by the EPA and 30%* more than the minimum specified in the top tier Detergent Gasoline standard recommended by major car manufacturers.</p>
                        </div>
                        {{--                        <a href="single-service.html" class="read-more">Read More</a>--}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 common-height">
                    <div class="single-serv-item active mt-30 wow fadeInLeft" data-wow-delay=".4s">
                        <div class="serv-icon">
                            <i class="flaticon-diesel"></i>
                        </div>
                        <div class="serv-content pb-4">
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
                        </div>
                        {{--                        <a href="single-service.html" class="read-more">Read More</a>--}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 common-height">
                    <div class="single-serv-item mt-30 wow fadeInLeft" data-wow-delay=".6s">
                        <div class="serv-icon">
                            <i class="flaticon-gasoline"></i>
                        </div>
                        <div class="serv-content">
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
                        {{--                        <a href="single-service.html" class="read-more">Read More</a>--}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 common-height">
                    <div class="single-serv-item active mt-30 wow fadeInLeft" data-wow-delay=".6s">
                        <div class="serv-icon">
                            <i class="flaticon-charging-station"></i>
                        </div>
                        <div class="serv-content">
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
                        {{--                        <a href="single-service.html" class="read-more">Read More</a>--}}
                    </div>
                </div>
                {{--                <div class="col-lg-4 col-md-6 col-sm-12">--}}
                {{--                    <div class="single-serv-item mt-30 wow fadeInLeft" data-wow-delay=".6s">--}}
                {{--                        <div class="serv-icon">--}}
                {{--                            <i class="flaticon-biofuel"></i>--}}
                {{--                        </div>--}}
                {{--                        <div class="serv-content">--}}
                {{--                            <h5>Electric Charging</h5>--}}
                {{--                            <p>This services involve transferring the parcels to the closest depot to the delivery location.</p>--}}
                {{--                        </div>--}}
                {{--                        <a href="single-service.html" class="read-more">Read More</a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="col-lg-4 col-md-6 col-sm-12 common-height">
                    <div class="single-serv-item  mt-30 wow fadeInLeft" data-wow-delay=".6s">
                        <div class="serv-icon">
                            <i class="flaticon-car-wash"></i>
                        </div>
                        <div class="serv-content">
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
                        </div>
                        {{--                        <a href="single-service.html" class="read-more">Read More</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5" id="locationsArea">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <div id="map" style="min-height: 400px"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('style')
    <style>
        .location-banner-min-height {min-height: 450px}
        @media screen and (max-width: 768px) {
            .location-banner-min-height {min-height: 300px}
        }
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
    <script>
        function initMap() {
            const myLatLng = { lat: 22.2734719, lng: 70.7512559 };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 8,
                center: myLatLng,
            });
            var locations = {{ Js::from($locations) }};
            var infowindow = new google.maps.InfoWindow();
            var marker, i;
            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map
                });
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infowindow.setContent(locations[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }
        }
        window.initMap = initMap;
    </script>
    <script type="text/javascript" loading="async" src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>
@endpush
