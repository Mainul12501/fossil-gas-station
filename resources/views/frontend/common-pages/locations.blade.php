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

    <section class="py-5 location-banner-min-height" style="background-image: url({{ asset('frontend/assets/img/gas-custom/1.jpeg') }}); background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="card bg-transparent border-0">
{{--                            <img src="{{ asset(isset($basicSetting) ? $basicSetting->logo : 'frontend/assets/img/logo.png' ) }}" alt="" class="card-img-top">--}}
                            <div class="card-body ">
                                <h1 class="text-white">Find Us</h1>
                                <p class="text-white">Explore what we have to offer</p>
                                <div>
                                    <a href="#locationsArea" class="btn btn-outline-primary text-white">Find A Station Near You</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>

{{--    <div id="service-1" class="services-area gray-bg section-padding">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="offset-lg-2 col-lg-8 text-center">--}}
{{--                    <div class="section-title">--}}
{{--                        <h6>Services</h6>--}}
{{--                        <h2>Best Service for <br> all type of <b>Electric</b> vehicles</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-12 common-height">--}}
{{--                    <div class="single-serv-item mt-30 wow fadeInLeft" data-wow-delay=".2s">--}}
{{--                        <div class="serv-icon">--}}
{{--                            <i class="flaticon-petrol"></i>--}}
{{--                        </div>--}}
{{--                        <div class="serv-content">--}}
{{--                            <h5> Pure Octane</h5>--}}
{{--                            <p style="text-align: justify">Three times more detergent than the minimum required by the EPA and 30%* more than the minimum specified in the top tier Detergent Gasoline standard recommended by major car manufacturers.</p>--}}
{{--                        </div>--}}
{{--                        --}}{{--                        <a href="single-service.html" class="read-more">Read More</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-12 common-height">--}}
{{--                    <div class="single-serv-item active mt-30 wow fadeInLeft" data-wow-delay=".4s">--}}
{{--                        <div class="serv-icon">--}}
{{--                            <i class="flaticon-diesel"></i>--}}
{{--                        </div>--}}
{{--                        <div class="serv-content pb-4">--}}
{{--                            <h5>Renewable Diesel</h5>--}}
{{--                            <div class="color-898a9c">--}}
{{--                                <ul class="nav">--}}
{{--                                    <p class="mb-1">Fueling a Greener Future</p>--}}
{{--                                    <p class="mb-1">Lower carbon footprint</p>--}}
{{--                                    <p class="mb-1">More efficient engine</p>--}}
{{--                                    <p class="mb-1">Quicker start, quieter running</p>--}}
{{--                                    <p class="mb-1">High performance</p>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        --}}{{--                        <a href="single-service.html" class="read-more">Read More</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-12 common-height">--}}
{{--                    <div class="single-serv-item mt-30 wow fadeInLeft" data-wow-delay=".6s">--}}
{{--                        <div class="serv-icon">--}}
{{--                            <i class="flaticon-gasoline"></i>--}}
{{--                        </div>--}}
{{--                        <div class="serv-content">--}}
{{--                            <h5>Free Air </h5>--}}
{{--                            <div class="color-898a9c">--}}
{{--                                <p style="text-align: justify">As part of our commitment to customer convenience, all our gas customers enjoy complimentary access to tire inflation stations</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        --}}{{--                        <a href="single-service.html" class="read-more">Read More</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-12 common-height">--}}
{{--                    <div class="single-serv-item active mt-30 wow fadeInLeft" data-wow-delay=".6s">--}}
{{--                        <div class="serv-icon">--}}
{{--                            <i class="flaticon-charging-station"></i>--}}
{{--                        </div>--}}
{{--                        <div class="serv-content">--}}
{{--                            <h5>10 min Oil Change services</h5>--}}
{{--                            <p>Fast, Reliable, and Hassle-Free.</p>--}}
{{--                            <div class="color-898a9c">--}}
{{--                                <p style="text-align: justify">Get a premium oil change in just 10 minutes, tailored to your vehicle. Enjoy added convenience with a quick health check and top-quality oil for optimal performance and longevity</p>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                        --}}{{--                        <a href="single-service.html" class="read-more">Read More</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-12 common-height">--}}
{{--                    <div class="single-serv-item  mt-30 wow fadeInLeft" data-wow-delay=".6s">--}}
{{--                        <div class="serv-icon">--}}
{{--                            <i class="flaticon-car-wash"></i>--}}
{{--                        </div>--}}
{{--                        <div class="serv-content">--}}
{{--                            <h5>Cas Washing</h5>--}}
{{--                            <p>A Sparkling Clean Ride Awaits!</p>--}}
{{--                            <div class="color-898a9c">--}}
{{--                                <p style="text-align: justify">Enjoy an eco-friendly, quick, and efficient car wash in under 15 minutes. Choose from customizable services with advanced technology, ensuring a spotless finish at affordable prices.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        --}}{{--                        <a href="single-service.html" class="read-more">Read More</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-12 common-height">--}}
{{--                    <div class="single-serv-item active mt-30 wow fadeInLeft" data-wow-delay=".6s">--}}
{{--                        <div class="serv-icon">--}}
{{--                            <i class="flaticon-gasoline"></i>--}}
{{--                        </div>--}}
{{--                        <div class="serv-content">--}}
{{--                            <h5>Flat Tire</h5>--}}
{{--                            <p>Tire Care That Goes the Extra Mile.</p>--}}
{{--                            <div class="color-898a9c">--}}
{{--                                <p style="text-align: justify">Facing a flat tire? No worries! Our service ensures you’re back on the road quickly and safely with the necessary support.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        --}}{{--                        <a href="single-service.html" class="read-more">Read More</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <section class="py-5" id="locationsArea">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <div id="map" style="min-height: 600px"></div>
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
            const myLatLng = { lat: 36.7783, lng: -119.4179 };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 6,
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
