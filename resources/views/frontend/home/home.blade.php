@extends('frontend.master')

@section('title', 'Home Page')

@section('body')
    <!-- Hero Area -->

    <div class="homepage-slides owl-carousel">
        @foreach($homeSliders as $key => $homeSlider)
            <div class="single-slide-item" style="background-image: url({{ asset($homeSlider->banner_image ?? 'frontend/assets/img/slider/slide-1.jpg') }})">
                <div class="overlay"></div>
                <div class="hero-area-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".3s">
                                <div class="section-title">
                                    <h6>{{ $homeSlider->tiny_title ?? 'Tiny Title' }}</h6>
                                    <h1>{!! $homeSlider->title ?? 'Banner Title' !!}</h1>
                                    <p> {!! $homeSlider->description ?? '' !!}</p>
                                </div>
                                <a href="{{ route('services') }}" class="main-btn">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


{{--        <div class="single-slide-item hero-area-bg-2">--}}
{{--            <div class="overlay"></div>--}}
{{--            <div class="hero-area-content">--}}
{{--                <div class="container">--}}
{{--                    <div class="row justify-content-center">--}}
{{--                        <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".3s">--}}
{{--                            <div class="section-title">--}}
{{--                                <h6>Since in 1995</h6>--}}
{{--                                <h1>We are leading <br> <b>Filling Station</b></h1>--}}
{{--                                <p> Fuel Revolution, in modern history, the process of change from an agrarian <br>and handicraft economy to one dominated by fuel and refueling services.</p>--}}
{{--                            </div>--}}
{{--                            <a href="price.html" class="main-btn">Get A Quote</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

    <!-- About Section-->

    <div class="about-area section-padding pt-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay=".3s">
                    <div class="info-content-area">
                        <div class="section-title">
                            <h6>About Us</h6>
                            <h2>Universal Gas Solutions for Fuel Vehicles</h2>
                        </div>
                        <p>Since our launch in July 23, 2012, our vision and focus has been to deliver high value service for our clients with the emphasis on communication and attention to detail.</p>
                        <p class="highlight"><i class="las la-check-circle"></i>From Starting our launch to service with dignity.</p>
                        <p class="highlight"><i class="las la-check-circle"></i>We always provide flexible & quality task. </p>
                        <p class="highlight"><i class="las la-check-circle"></i>Unique latest machinary used the fuel supply.</p>

                        <a href="{{ route('about') }}" class="main-btn">Learn More</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay=".4s">

                    <div class="info-img">
{{--                        <img src="{{ asset('/') }}frontend/assets/img/about/about.jpg" alt="">--}}
                        <img src="{{ asset('/') }}frontend/assets/img/gas-custom/10.png" alt="">

                        <div class="experience-wrap">
                            <img src="{{ asset('/') }}frontend/assets/img/electric-station.png" alt="">
                            <span>13+</span>
                            <p>Year of Experience</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Network Visualizer Section-->
    @if(count($stations) > 0)
        <div class="team-area section-padding text-center pb-60 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 ">
                        <div class="section-title text-center">
                            <h6>Visualizer</h6>
                            <h2>Network <b>Visualizer</b></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
{{--                        <div class="single-team-member wow fadeInLeft" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">--}}
{{--                            <div>--}}
{{--                                <div id="treeExample"></div>--}}


{{--                                --}}{{--                            css tree start--}}
{{--                                @foreach($stations as $index => $station)--}}
{{--                                <ol class="organizational-chart mt-3">--}}

{{--                                        <li>--}}
{{--                                            <div>--}}
{{--                                                <h2><a href="{{ route('gas-details', ['slug' => $station->slug]) }}" class="nav-link">{{ $station->name ?? 'Parent station' }}</a></h2>--}}
{{--                                            </div>--}}
{{--                                            @if(isset($station->gasStations) && count($station->gasStations) > 0)--}}
{{--                                                <ol>--}}
{{--                                                    @foreach($station->gasStations as $key => $gasStation)--}}
{{--                                                        @include('frontend.gas-stations.include-tree-view', ['childGasStation' => $gasStation])--}}
{{--                                                    @endforeach--}}
{{--                                                </ol>--}}
{{--                                            @endif--}}
{{--                                        </li>--}}

{{--                                </ol>--}}
{{--                                @endforeach--}}
{{--                                --}}{{--                            css tree ends--}}




{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="card border-0">
                            <img src="{{ asset('/frontend/assets/img/gas-custom/gas-tree.jpeg') }}" alt="" class="card-img-top" style="min-height: 500px;">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Services Area -->

    <div id="service-1" class="services-area gray-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 text-center">
                    <div class="section-title">
                        <h6>Services</h6>
                        <h2>Best Service for <br> all type of Fuel vehicles</h2>
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
                            <h5> Pure Octane</h5>
                            <p style="text-align: justify">Three times more detergent than the minimum required by the EPA and 30%* more than the minimum specified in the top tier Detergent Gasoline standard recommended by major car manufacturers.</p>
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
                                    <p class="mb-1">Fueling a Greener Future</p>
                                    <p class="mb-1">Lower carbon footprint</p>
                                    <p class="mb-1">More efficient engine</p>
                                    <p class="mb-1">Quicker start, quieter running</p>
                                    <p class="mb-1">High performance</p>
                                </ul>
                            </div>
                        </div>
{{--                        <a href="single-service.html" class="read-more">Read More</a>--}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 common-height">
                    <div class="single-serv-item mt-30 wow fadeInLeft" data-wow-delay=".6s">
                        <div class="serv-icon">
{{--                            <i class="flaticon-gasoline"></i>--}}
                            <img src="{{ asset('/frontend/assets/img/gas-custom/free-air.png') }}" style="height: 50px" alt="free-air">
                        </div>
                        <div class="serv-content">
                            <h5>Free Air </h5>
                            <div class="color-898a9c">
                               <p style="text-align: justify">As part of our commitment to customer convenience, all our gas customers enjoy complimentary access to tire inflation stations</p>
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
                                <p style="text-align: justify">Get a premium oil change in just 10 minutes, tailored to your vehicle. Enjoy added convenience with a quick health check and top-quality oil for optimal performance and longevity</p>
                            </div>

                        </div>
{{--                        <a href="single-service.html" class="read-more">Read More</a>--}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 common-height">
                    <div class="single-serv-item  mt-30 wow fadeInLeft" data-wow-delay=".6s">
                        <div class="serv-icon">
                            <i class="flaticon-car-wash"></i>
                        </div>
                        <div class="serv-content">
                            <h5>Cas Washing</h5>
                            <p>A Sparkling Clean Ride Awaits!</p>
                            <div class="color-898a9c">
                                <p style="text-align: justify">Enjoy an eco-friendly, quick, and efficient car wash in under 15 minutes. Choose from customizable services with advanced technology, ensuring a spotless finish at affordable prices.</p>
                            </div>
                        </div>
{{--                        <a href="single-service.html" class="read-more">Read More</a>--}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 common-height">
                    <div class="single-serv-item active mt-30 wow fadeInLeft" data-wow-delay=".6s">
                        <div class="serv-icon">
{{--                            <i class="flaticon-gasoline"></i>--}}
                            <img src="{{ asset('/frontend/assets/img/gas-custom/flat-tire.png') }}" alt="flat-tire" style="height: 50px">
                        </div>
                        <div class="serv-content">
                            <h5>Flat Tire</h5>
                            <p>Tire Care That Goes the Extra Mile.</p>
                            <div class="color-898a9c">
                                <p style="text-align: justify">Facing a flat tire? No worries! Our service ensures you’re back on the road quickly and safely with the necessary support.</p>
                            </div>
                        </div>
                        {{--                        <a href="single-service.html" class="read-more">Read More</a>--}}
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
{{--                        <a href="single-service.html" class="read-more">Read More</a>--}}
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="xtra-serve-area mt-30 bg-cover wow fadeInLeft" data-wow-delay=".4s">
                        <img src="{{ asset('/') }}frontend/assets/img/xtra/02.jpg" alt="">
                        <h5>Emergency Charging</h5>
{{--                        <a href="single-service.html" class="read-more">Read More</a>--}}
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="xtra-serve-area mt-30 bg-cover wow fadeInRight" data-wow-delay=".4s">
                        <img src="{{ asset('/') }}frontend/assets/img/xtra/03.jpg" alt="">
                        <h5>Wheels Pumping</h5>
{{--                        <a href="single-service.html" class="read-more">Read More</a>--}}
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="xtra-serve-area mt-30 bg-cover wow fadeInRight" data-wow-delay=".3s">
                        <img src="{{ asset('/') }}frontend/assets/img/xtra/04.jpg" alt="">
                        <h5>Engine Repair</h5>
{{--                        <a href="single-service.html" class="read-more">Read More</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Achievement Area -->

    <div class="skill-area">
        <div class="skill-bg bg-cover" style="background-image: url({{ asset('frontend/assets/img/gas-custom/20.webp') }}); background-repeat: no-repeat;">
            <div class="overlay">
            </div>
{{--            <div class="pop-up-video">--}}
{{--                <a href="https://www.youtube.com/watch?v=nibU1Iq6g3Y" class="video-play-btn mfp-iframe">--}}
{{--                    <i class="fa fa-play"></i>--}}
{{--                </a>--}}
{{--            </div>--}}
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
                        <p class="counter-number"><span>{{ \App\Models\Backend\GasStation::where('status',1)->count() ?? 0 }}</span></p>
                        <h6>Total Branches</h6>
                    </div>
                </div>
            </div>
            <div class="row gx-0">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="single-counter-box three">
                        <div class="fact-icon">
                            <i class="flaticon-support"></i>
                        </div>
                        <p class="counter-number"><span>4</span></p>
                        <h6>State Covered</h6>
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
                @foreach($employees as $key => $employee)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-team-member wow fadeInLeft" data-wow-delay=".2s">
                            <div class="team-member-bg" style="max-height: 300px; background-image: url({{ asset($employee->profile_image  ?? 'frontend/assets/img/team/1.jpg') }}); ">
                                <div class="team-content">
                                    <div class="team-title">
                                        <a href="javascript:void(0)">{{ $employee->name }}</a>
                                    </div>
                                    <div class="team-subtitle">
{{--                                        <p>{{ $employee->gasStationEmployeeRoles[0]->name ?? 'Role Name' }}</p>--}}
                                        <p>
                                            @foreach($employee->gasStationEmployeeRoles as $key => $role)
                                                {{ $role->name }}{{ $key+1 < count($employee->gasStationEmployeeRoles) ? ', ' : '' }}

                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                                <div class="team-social">
                                    <ul>
                                        <li>
                                            <a href="{{ $employee->fb ?? '' }}" target="_blank"><i class="fa fa-facebook-f" aria-hidden="true"></i> </a>
                                        </li>
                                        <li>
                                            <a href="{{ $employee->x ?? '' }}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> </a>
                                        </li>
                                        <li>
                                            <a href="{{ $employee->linkedin ?? '' }}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                                        </li>
                                        <li>
                                            <a href="{{ $employee->whatsapp ?? '' }}" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i> </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
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
                                <p>Good quality gas at cheap prices. Free air if you need it.</p>
                                <div class="testimonial-author">
                                    <div class="author-img">
{{--                                        <img src="{{ asset('/') }}frontend/assets/img/testimonial/1.jpg" alt="">--}}
                                        <img style="height: 70px" src="https://futurenetworld.net/wp-content/uploads/2022/07/Manish_Gupta_Headshot_22-removebg-preview-removebg-preview-modified-e1659102266740.png" alt="">
                                    </div>
                                    <div class="author-desc">
                                        <h5>Manish Gupta</h5><span>Customer</span>
                                    </div>
                                </div>


                            </div>

                            <div class="single-client-item">
                                <div class="testimonial-icon"><i class="las la-quote-left"></i></div>
                                <p>These gus literally saved my from being stuck on the side of the road.</p>
                                <div class="testimonial-author">
                                    <div class="author-img">
{{--                                        <img src="{{ asset('/') }}frontend/assets/img/testimonial/2.jpg" alt="">--}}
                                        <img style="height: 70px" src="https://secondhandsongs.com/picture/400821" alt="">
                                    </div>
                                    <div class="author-desc">
                                        <h5>Sarah Haymes</h5><span>Customer</span>
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
                <div class="col-lg col-md-6 col-sm-12">
                    <div class="single-facility-area wow fadeInLeft" data-wow-delay=".2s">
                        <div class="facility-icon">
                            <img src="{{ asset('/') }}frontend/assets/img/icon/wifi-router.png" alt="">
                        </div>
                        <h4>Free Wifi Zone</h4>

                    </div>
                </div>
                <div class="col-lg col-md-6 col-sm-12">
                    <div class="single-facility-area wow fadeInLeft" data-wow-delay=".4s">
                        <div class="facility-icon">
                            <img src="{{ asset('/') }}frontend/assets/img/icon/dish.png" alt="">
                        </div>
                        <h4>Restaurant</h4>

                    </div>
                </div>
                <div class="col-lg col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".6s">
                    <div class="single-facility-area">
                        <div class="facility-icon">
                            <img src="{{ asset('/') }}frontend/assets/img/icon/teddy-bear.png" alt="">
                        </div>
                        <h4>Children's area</h4>

                    </div>
                </div>
                <div class="col-lg col-md-6 col-sm-12">
                    <div class="single-facility-area wow fadeInLeft" data-wow-delay=".8s">
                        <div class="facility-icon">
                            <img src="{{ asset('/') }}frontend/assets/img/icon/technology.png" alt="">
                        </div>
                        <h4>TV Hall</h4>

                    </div>
                </div>
                <div class="col-lg col-md-6 col-sm-12">
                    <div class="single-facility-area wow fadeInLeft" data-wow-delay=".8s">
                        <div class="facility-icon">
{{--                            <img src="{{ asset('/') }}frontend/assets/img/icon/low-rate.png" alt="">--}}
                            <img src="https://cdn-icons-png.freepik.com/512/8675/8675944.png" alt="" style="height: 64px">
                        </div>
                        <h4>Disabled Fuel Assistance</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('style')
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/tree-view.css" />
    <style>
        .color-898a9c {color: #898a9c!important;}
        .single-client-item {min-height: 302px}
    </style>
@endpush

@push('script')
    <script>
        $(function () {
            $('.common-height .single-serv-item').css('height', getMaxHeight('common-height'));
        })

    </script>
@endpush
