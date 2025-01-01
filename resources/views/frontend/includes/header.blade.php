<header class="header-area">
    <div class="sticky-area">
        <div class="navigation">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">

                        <div class="logo">
{{--                            @if(isset($isDetailsPage))--}}
{{--                                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset(isset($gasStation) ? $gasStation->logo : 'frontend/assets/img/logo.png' ) }}" alt="site logo" style="width: 190px; height: 50px"></a>--}}
{{--                            @else--}}
                                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset(isset($basicSetting) ? $basicSetting->logo : 'frontend/assets/img/logo.png' ) }}" alt="site logo" style="width: 190px; height: 50px"></a>
{{--                            @endif--}}
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                    <span class="navbar-toggler-icon"></span>
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>

                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->is('about-us') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->is('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->is('services') ? 'active' : '' }}" href="{{ route('career') }}">Career</a>
                                        </li>
                                        @foreach($gasStations as $key => $gasStation)
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('gas-details', ['slug' => $gasStation->slug]) }}">{{ $gasStation->name ?? 'station Name' }}
                                                    <span class="sub-nav-toggler">
 													</span>
                                                </a>
                                                @if(count($gasStation->gasStations) > 0)
                                                    <ul class="sub-menu">
                                                        @foreach($gasStation->gasStations as $childGasStation)
                                                            <li>
                                                                <a href="{{ route('gas-details', ['slug' => $childGasStation->slug]) }}">{{ $childGasStation->name }}</a>
{{--                                                                <ul class="sub-menu">--}}
{{--                                                                    <li><a href="choose-us.html">Sub Station 2</a></li>--}}
{{--                                                                </ul>--}}
                                                            </li>
                                                        @endforeach

                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->is('contact-us') ? 'active' : '' }}" href="{{ route('locations') }}">Locations</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->is('contact-us') ? 'active' : '' }}" href="{{ route('contact-us') }}">Contact</a>
                                        </li>
                                    </ul>

                                </div>
                            </nav>
                        </div>
                    </div>
{{--                    <div class="col-lg-3">--}}
{{--                        <div class="header-right-content">--}}

{{--                            <div class="search-box">--}}
{{--                                <button class="search-btn"><i class="la la-search"></i></button>--}}
{{--                            </div>--}}
{{--                            <a href="price.html" class="main-btn">Get Quote</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>

    <!-- Search Dropdown Area -->
    <div class="search-popup">
        <span class="search-back-drop"></span>

        <div class="search-inner">
            <div class="auto-container">
                <div class="upper-text">
                    <div class="text">Search for anything.</div>
                    <button class="close-search"><span class="la la-times"></span></button>
                </div>

                <form method="post" action="https://capricorn-theme.com/html/fossil/index.html">
                    <div class="form-group">
                        <input type="search" name="search-field" value="" placeholder="Search..." required="">
                        <button type="submit"><i class="la la-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
