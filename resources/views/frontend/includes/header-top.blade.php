<div class="header-top " style="background-color: orange;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="contact-info">
                    <i class="las la-envelope text-light"></i> <span style="">{{ $basicSetting->email ?? 'info@fossil.com' }}</span>
                    <i class="las la-map-marker text-light"></i> <span class="text-light ad" style="">{!! $basicSetting->address ?? '66, Broklyn St, New York, USA' !!}</span>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 text-end">
                <div class="site-info">
                    Turning big ideas into great services!
                    <div class="social-area text-danger">
                        <a href="{{ $basicSetting->fb ?? 'https://fb.com' }}" target="_blank"><i class="lab la-facebook-f text-light"></i></a>
                        <a href="{{ $basicSetting->insta ?? 'https://www.instagram.com/' }}" target="_blank"><i class="lab la-instagram text-light"></i></a>
                        <a href="https://wa.me/{{ $basicSetting->whatsapp ?? '0000' }}" target="_blank"><i class="lab la-whatsapp text-light"></i></a>
                        <a href="{{ $basicSetting->skype ?? 'https://www.skype.com/en/' }}" target="_blank"><i class="la la-skype text-light"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        $(function () {
            setTimeout(function () {
               $('.ad p').css('color', 'white').css('padding', '0px');
            }, 500)
        })
    </script>
@endpush
