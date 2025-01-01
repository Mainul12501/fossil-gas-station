@extends('frontend.master')

@section('title', 'Career Page')

@section('body')

    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area bread-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title">
                        <h1>Career</h1>
                        <h6><a href="{{ route('home') }}">Home</a> / Dedicated Team</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                            <div class="team-member-bg" style="max-height: 300px; background-image: url({{ asset($employee->profile_image) }}); ">
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
            </div>
        </div>
    </div>



@endsection
