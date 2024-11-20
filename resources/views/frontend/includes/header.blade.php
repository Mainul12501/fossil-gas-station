<header class="header-area">
    <div class="sticky-area">
        <div class="navigation">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">

                        <div class="logo">
                            <a class="navbar-brand" href="index.html"><img src="{{ asset('/') }}frontend/assets/img/logo.png" alt=""></a>
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
                                            <a class="nav-link active" href="{{ route('home') }}">Home</a>

                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('about') }}">About</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('services') }}">Services</a>


                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Jomuna Gas Station
                                                <span class="sub-nav-toggler">
 													</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li><a href="choose-us.html">Sub Station 1</a></li>
                                                <li><a href="choose-us.html">Sub Station 2</a></li>
                                            </ul>
                                        </li>


                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('contact-us') }}">Contact</a>
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
