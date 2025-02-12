@extends('frontend.master')

@section('title', 'Station Details')

@section('body')

{{--    Carousal Image Slider--}}
@if(isset($station->sub_images))
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-interval="2000"  data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach(json_decode($station->sub_images) as $key => $item)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide 1"></button>
            @endforeach
{{--            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>--}}
{{--            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>--}}
        </div>
        <div class="carousel-inner">
            @foreach(json_decode($station->sub_images) as $key => $image)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ asset($image ?? '') }}" class="d-block w-100" alt="img-{{ $key }}" style="height: 550px">
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endif
    <!-- About Section-->

    <div class="about-area section-padding pt-120" style="padding-top: 35px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay=".3s">
                    <div class="info-content-area">
                        <div class="section-title">
                            <h6>About Us</h6>
                            <h2>{{ $station->name ?? 'Station Name' }}</h2>
                        </div>
                        <p>{!! $station->overview ?? 'Station Overview' !!}</p>

{{--                        <a href="{{ route('about') }}" class="main-btn">Learn More</a>--}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay=".4s">

                    <div class="info-img">
                        <img src="{{ asset($station->main_image ?? 'frontend/assets/img/gas-custom/11.jpg') }}" alt="{{ $station->name ?? '' }}" style="max-height: 665px; width: 100%!important;">

                        <div class="experience-wrap">
                            <img src="{{ asset('/') }}frontend/assets/img/electric-station.png" alt="">
                            <span>{{ round(\Illuminate\Support\Carbon::parse($station->incorporated_year)->diffInYears(now())) ?? 0 }}+</span>
                            <p>Year of Experience</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@if(isset($station->gasStations) && count($station->gasStations) > 0)
    <!-- Companies Area -->

    <div id="company-1" class="services-area gray-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 text-center">
                    <div class="section-title">
                        <h6>Companies</h6>
                        <h2>Sister Companies</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 mx-auto">
                    <div class="single-serv-item mt-30 wow fadeInLeft" data-wow-delay=".2s">
                        <div class="">
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Status</th>
                                    {{--                                        <th>Incorporated</th>--}}
                                    <th>Employees </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($station->gasStations as $sisterStation)
                                    <tr>
                                        <td><a href="{{ route('gas-details', ['slug' => $sisterStation->slug]) }}" class="nav-link p-1"><span><i class="fa fa-building-o fa-fw"></i> </span>{{ $sisterStation->name ?? 'station Name' }}</a></td>
                                        <td class="text-center"><button type="button" class="btn btn-outline-primary">{{ $sisterStation->status == 1 ? 'Active' : 'Inactive' }}</button></td>
                                        {{--                                            <td>{{ $sisterStation->created_at->format('Y') }}</td>--}}
                                        <td class="text-center">{{ $sisterStation->gasStationEmployees->count() ?? 0 }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if(isset($station->location_map))
    <div class="map-section bg-gray-100 py-5" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center py-4" style="font-size: 50px">Station Location</h3>
                    <div class="text-center gas-station-single-map">
                        {!! $station->location_map ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

    <!-- Network Visualizer Section-->
    @if(count($station->gasStations) > 0)
        <div class="team-area section-padding text-center pb-60">
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
                        <div class="single-team-member wow fadeInLeft" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                            <div>
                                <div id="treeExample"></div>


                                {{--                            css tree start--}}
                                <ol class="organizational-chart">
                                    <li>
                                        <div>
                                            <h2><a href="{{ route('gas-details', ['slug' => $station->slug]) }}" class="nav-link">{{ $station->name ?? 'Parent station' }}</a></h2>
                                        </div>
                                        @if(isset($station->gasStations) && count($station->gasStations) > 0)
                                            <ol>
                                                @foreach($station->gasStations as $key => $gasStation)
                                                    @include('frontend.gas-stations.include-tree-view', ['childGasStation' => $gasStation])
                                                @endforeach
                                            </ol>
                                        @endif
                                    </li>
                                </ol>

                                {{--                            css tree ends--}}




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif


<!-- Corporate Filling Area -->

<div id="filling-1" class="services-area gray-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="offset-lg-2 col-lg-8 text-center">
                <div class="section-title">
                    <h6>Filling</h6>
                    <h2>Corporate Filling</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="single-serv-item mt-30 wow fadeInLeft" data-wow-delay=".2s">
                    <div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td style="width: 20%"><b>State :</b></td>
                                    <td>{{ $station->state ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td><b>State Id:</b></td>
                                    <td>{{ $station->state_id ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td><b>Date Filled :</b></td>
                                    <td>{{ \Illuminate\Support\Carbon::parse($station->incorporated_year)->format('d M Y') ?? 'No data found' }}</td>
                                </tr>
                                <tr>
                                    <td><b>Registered Agent :</b></td>
                                    <td>{{ $station->gasStationKeyPeople->name ?? 'Station Key People Name' }}</td>
                                </tr>
                                <tr>
                                    <td><b>Phone :</b></td>
                                    <td>{{ $station->office_phone_number ?? 'Station Phone Number' }}</td>
                                </tr>
                                <tr>
                                    <td><b>Status :</b></td>
                                    <td><span class="btn btn-outline-primary">{{ $station->status == 1 ? 'Active' : 'Inactive' }}</span></td>
                                </tr>
                                <tr>
                                    <td><b>Social :</b></td>
                                    <td>
                                        <ul class="">
                                            <li><a href="{{ $station->fb ?? '' }}" target="_blank" class="p-1"><i class="lab la-facebook-f"></i></a></li>
                                            <li><a href="{{ $station->insta ?? '' }}" target="_blank" class="p-1"><i class="lab la-instagram"></i></a></li>
                                            <li><a href="{{ $station->linkedin ?? '' }}" target="_blank" class="p-1"><i class="lab la-linkedin-in"></i></a></li>
                                            <li><a href="{{ $station->skype ?? '' }}" target="_blank" class="p-1"><i class="la la-skype"></i></a></li>
                                            <li><a href="{{ $station->whatsapp ?? '' }}" target="_blank" class="p-1"><i class="la la-whatsapp"></i></a></li>
                                            <li><a href="{{ $station->telegram ?? '' }}" target="_blank" class="p-1"><i class="la la-telegram"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
                @foreach($station->gasStationEmployees as $key => $employee)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-team-member wow fadeInLeft" data-wow-delay=".2s">
                            <div class="team-member-bg" style="max-height: 300px; background-image: url({{ asset($employee->profile_image  ?? 'frontend/assets/img/team/1.jpg') }}); ">
                                <div class="team-content">
                                    <div class="team-title">
                                        <a href="javascript:void(0)">{{ $employee->name }}</a>
                                    </div>
                                    <div class="team-subtitle">
                                        <p>{{ $employee->gasStationEmployeeRoles[0]->name ?? 'Role Name' }}</p>
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


                {{--                <div class="col-lg-3 col-md-6 col-sm-6 col-12">--}}
                {{--                    <div class="single-team-member wow fadeInLeft" data-wow-delay=".4s">--}}
                {{--                        <div class="team-member-bg team-bg-2">--}}
                {{--                            <div class="team-content">--}}
                {{--                                <div class="team-title">--}}
                {{--                                    <a href="#">Mich Thomson</a>--}}
                {{--                                </div>--}}
                {{--                                <div class="team-subtitle">--}}
                {{--                                    <p>Supervisor</p>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <div class="team-social">--}}
                {{--                                <ul>--}}
                {{--                                    <li>--}}
                {{--                                        <a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i> </a>--}}
                {{--                                    </li>--}}
                {{--                                    <li>--}}
                {{--                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a>--}}
                {{--                                    </li>--}}
                {{--                                    <li>--}}
                {{--                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> </a>--}}
                {{--                                    </li>--}}
                {{--                                    <li>--}}
                {{--                                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i> </a>--}}
                {{--                                    </li>--}}

                {{--                                </ul>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                {{--                <div class="col-lg-3 col-md-6 col-sm-6 col-12">--}}
                {{--                    <div class="single-team-member wow fadeInRight" data-wow-delay=".6s">--}}
                {{--                        <div class="team-member-bg team-bg-3">--}}
                {{--                            <div class="team-content">--}}
                {{--                                <div class="team-title">--}}
                {{--                                    <a href="#">Josh Batlar</a>--}}
                {{--                                </div>--}}
                {{--                                <div class="team-subtitle">--}}
                {{--                                    <p>Sr. Executive</p>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <div class="team-social">--}}
                {{--                                <ul>--}}
                {{--                                    <li>--}}
                {{--                                        <a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i> </a>--}}
                {{--                                    </li>--}}
                {{--                                    <li>--}}
                {{--                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a>--}}
                {{--                                    </li>--}}
                {{--                                    <li>--}}
                {{--                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> </a>--}}
                {{--                                    </li>--}}
                {{--                                    <li>--}}
                {{--                                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i> </a>--}}
                {{--                                    </li>--}}
                {{--                                </ul>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                {{--                <div class="col-lg-3 col-md-6 col-sm-6 col-12">--}}
                {{--                    <div class="single-team-member wow fadeInRight" data-wow-delay=".8s">--}}
                {{--                        <div class="team-member-bg team-bg-4">--}}
                {{--                            <div class="team-content">--}}
                {{--                                <div class="team-title">--}}
                {{--                                    <a href="#">Albert Gill</a>--}}
                {{--                                </div>--}}
                {{--                                <div class="team-subtitle">--}}
                {{--                                    <p>Relation Officer</p>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <div class="team-social">--}}
                {{--                                <ul>--}}
                {{--                                    <li>--}}
                {{--                                        <a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i> </a>--}}
                {{--                                    </li>--}}
                {{--                                    <li>--}}
                {{--                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a>--}}
                {{--                                    </li>--}}
                {{--                                    <li>--}}
                {{--                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> </a>--}}
                {{--                                    </li>--}}
                {{--                                    <li>--}}
                {{--                                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i> </a>--}}
                {{--                                    </li>--}}

                {{--                                </ul>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
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
                    <h2>Best Service for <br> all type of <b>Fuel</b> vehicles</h2>
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
                        <i class="flaticon-gasoline"></i>
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

    <!-- Achievement Area -->

    <div class="skill-area">
        <div class="skill-bg bg-cover" style="background-image: url({{ asset('frontend/assets/img/gas-custom/16.jpg') }}); background-repeat: no-repeat;">
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
                        <p class="counter-number"><span>{{ \App\Models\Backend\GasStation::where(['status' => 1])->count() ?? 0 }}</span></p>
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
                            <img src="{{ asset('/') }}frontend/assets/img/icon/low-rate.png" alt="">
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
        .gas-station-single-map iframe {width: 95%!important; min-height: 500px!important;}
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
