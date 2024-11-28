<footer class="footer-area">
    <div class="container">
        <div class="footer-up">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{ asset($basicSetting->logo ?? 'frontend/assets/img/logo-white.png') }}" alt="fossil-logo" style="width: 190px; height: 50px" />
                    </a>
                    <p>{!! $basicSetting->site_description ?? 'Footer site description' !!}</p>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5>Office</h5>
                    <p>{!! $basicSetting->corporate_office ?? 'corporate office address' !!}</p>
                    <div class="company-email">
                        <a href="#">{{ $basicSetting->email ?? 'Company Email' }}</a>
                    </div>
                    <div class="phone-number">
                        <p>{{ $basicSetting->phone ?? '01600000' }}</p>
                    </div>

                </div>
                <div class="col-lg-2 offset-lg-1 col-md-6 com-sm-12">
                    <h5>Links</h5>
                    <ul>
                        <li>
                            <a href="{{ route('about') }}">About</a>
                            <a href="{{ route('services') }}">Services</a>
{{--                            <a href="faq.html"> FAQ</a>--}}
{{--                            <a href="blog.html"> News</a>--}}
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h5>Get in Touch</h5>
                    <ul>
                        <li>
                            <div class="social-area">
                                <a href="{{ $basicSetting->fb ?? 'https://fb.com' }}" target="_blank"><i class="lab la-facebook-f"></i>Facebook</a>
                                <a href="{{ $basicSetting->insta ?? 'https://www.instagram.com/' }}" target="_blank"><i class="lab la-instagram"></i>Instagram</a>
                                <a href="{{ $basicSetting->linkedin ?? 'https://www.instagram.com/' }}" target="_blank"><i class="lab la-linkedin-in"></i>linkedin</a>
                                <a href="{{ $basicSetting->skype ?? 'https://www.skype.com/en/' }}" target="_blank"><i class="la la-skype"></i>Skype</a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>
