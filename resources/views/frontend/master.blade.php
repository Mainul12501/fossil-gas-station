<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title> Fossil - Gas Station | @yield('title')</title>

    @include('frontend.includes.assets.head')

</head>

<body>

<!-- Pre-Loader -->
<div id="loader">
    <div class="loading">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
</div>

<!-- Header Top Area -->
@include('frontend.includes.header-top')

<!-- Header Area -->
@include('frontend.includes.header')

<!-- body area -->
@yield('body')

<!-- Newsletter Section  -->
@include('frontend.includes.newsletter')

<!-- Footer Area -->
@include('frontend.includes.footer')

<!-- Footer Bottom Area -->
@include('frontend.includes.footer-bottom')

<!-- Scroll Top Area -->
<a href="#top" class="go-top"><i class="las la-angle-up"></i></a>

@include('frontend.includes.assets.script')

</body>

</html>
