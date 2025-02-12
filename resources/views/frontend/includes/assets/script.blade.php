<!-- jquery -->
<script src="{{ asset('/') }}frontend/assets/js/jquery-1.12.4.min.js"></script>
<!-- Popper JS -->
<script src="{{ asset('/') }}frontend/assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('/') }}frontend/assets/js/bootstrap.min.js"></script>
<!-- Wow JS -->
<script src="{{ asset('/') }}frontend/assets/js/wow.min.js"></script>
<!-- Way Points JS -->
<script src="{{ asset('/') }}frontend/assets/js/jquery.waypoints.min.js"></script>
<!-- Counter Up JS -->
<script src="{{ asset('/') }}frontend/assets/js/jquery.counterup.min.js"></script>
<!-- Owl Carousel JS -->
<script src="{{ asset('/') }}frontend/assets/js/owl.carousel.min.js"></script>
<!-- Magnific Popup JS -->
<script src="{{ asset('/') }}frontend/assets/js/magnific-popup.min.js"></script>
<!-- Sticky JS -->
<script src="{{ asset('/') }}frontend/assets/js/jquery.sticky.js"></script>
<!-- Progress Bar JS -->
<script src="{{ asset('/') }}frontend/assets/js/jquery.barfiller.js"></script>
<!-- Main JS -->
<script src="{{ asset('/') }}frontend/assets/js/main.js"></script>
<!-- Toastr JS -->
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    function getMaxHeight(classSelector)
    {
        let height = 0;
        $('.'+classSelector).each(function () {
            if ($(this).height() > height) {
                height = $(this).height();
            }
        });
        return height+'px';
    }
</script>
{!! $basicSetting->seo_footer ?? '' !!}
{!! Toastr::message() !!}
@yield('script')
@stack('script')
