@extends('frontend.master')

@section('title', 'About Page')

@section('body')

    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area bread-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title">
                        <h1>About Us</h1>
                        <h6><a href="{{ route('home') }}">Home</a> / About Us</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->

    <div class="about-area sky-bg section-padding">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-5">
                    <div class="mt-10"></div>
                    <div class="about-bg-wrapper wow fadeInUp" data-wow-delay=".2s">
                        <div class="about-bg-innner bg-cover" style="background-image: url({{ asset('frontend/assets/img/gas-custom/11.jpg') }})"></div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-content-wrapper wow fadeInUp" data-wow-delay=".4s">
                        <div class="section-title">
                            <h6>About Us</h6>
{{--                            <h2>We're the Top <br><b>Filling Station</b> in Downdown</h2>--}}
                            <h2>We are the <br><b>Cheapest Filling Station</b> in this area</h2>
                        </div>
                        <p style="text-align: justify">JAMUNA-CA INC. is your trusted partner for all your fueling and convenience needs. Whether you’re on a long road trip or just getting around town, our 24/7 stations and commitment to the best quality fuel, fair pricing, and extra customer perks ensure you’ll always have a reliable place to stop. Visit us today and experience the difference at JAMUNA-CA INC. </p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="key-feature">
                                    <div class="row gx-0">
                                        <div class="col-lg-4">
                                            <div class="about-icon">
                                                <img src="{{ asset('/') }}frontend/assets/img/icon/oil.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <h4>100% Pure Oil</h4>
                                            <p style="text-align: justify">Experience the power of 100% Pure Oil at our gas station and feel the difference in your vehicle's performance.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="key-feature">
                                    <div class="row gx-0">
                                        <div class="col-lg-4">
                                            <div class="about-icon">
                                                <img src="{{ asset('/') }}frontend/assets/img/icon/meter-checker.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <h4>Accurate Meter</h4>
                                            <p style="text-align: justify;">we ensure every drop counts with an Accurate Meter system, delivering honest and precise fuel measurements you can trust.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Achievement Section-->

    <div class="achievement-area">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter-box wow fadeInLeft" data-wow-delay=".2s">
                        <p class="counter-number"><span>2150</span>+</p>
                        <h6>Satisfied Client</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter-box wow fadeInLeft" data-wow-delay=".4s">
                        <p class="counter-number"><span>{{ \App\Models\Backend\GasStation::where('status', 1)->count() ?? 0 }}</span></p>
                        <h6>Total Branches</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter-box wow fadeInLeft" data-wow-delay=".6s ">
                        <p class="counter-number"><span>4</span></p>
                        <h6>States Covered</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter-box wow fadeInLeft" data-wow-delay=".8s">
                        <p class="counter-number"><span>5.0</span></p>
                        <h6>Review</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Choose Us Section -->

    <div class="chooseus-area section-padding">
        <div class="container">
            <div class="row align-items-center">
{{--                <div class="col-lg-12 col-md-12">--}}
{{--                    <div class="feature-img wow fadeInUp" data-wow-delay=".6s">--}}
{{--                        --}}{{--                        <img src="{{ asset('/') }}frontend/assets/img/feature.jpg" alt="">--}}
{{--                        <img src="https://i.pinimg.com/736x/64/b7/9e/64b79edc105260db469cf80fa19b9367.jpg" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h6>Best Feature</h6>
                        <h2 class="section-heading">Great Experience of<b> <br>Vehicle</b> Services</h2>
                    </div>
                    <div>
                        <div class="feature-img wow fadeInUp" data-wow-delay=".6s">
                            {{--                        <img src="{{ asset('/') }}frontend/assets/img/feature.jpg" alt="">--}}
                            <img src="https://img.freepik.com/premium-photo/woman-near-car-portrait-happy-woman-operating-fuel-pump-machine-gas-station_43780-7685.jpg" alt="" class="img-fluid" style="height: 550px; width: 100%!important">
                        </div>
                    </div>
                    <p class="pt-3 highlight mb-20 text-justify">JAMUNA-CA INC. is a leading operator of 76 Gas Stations across California and Nevada, providing top-notch services to customers and businesses alike. Our mission is to deliver exceptional value, quality, and convenience, with a focus on customer satisfaction and community service. Whether you're fueling up or seeking reliable business solutions, JAMUNA-CA INC. is committed to offering the best in fuel quality, flat-rate pricing, and a range of customer-friendly services available 24/7.</p>
                    <div class="single-feature-item wow fadeInUp" data-wow-delay=".4s">
                        <div class="num"><i class="las la-external-link-alt"></i></div>
                        <div class="feature-content">
                            <h5>24/7 Services: Always Available for You</h5>
                            <p class="text-justify">
                                At JAMUNA-CA INC., we understand that your needs don't stop when the sun goes down. That's why all our 76 Gas Stations are open 24/7, ensuring you have access to our services whenever you need them, day or night. Whether you're in need of fuel, air, or simply looking for a convenient stop on the road, our stations are always ready to serve you.</p>
                            <p><b>Our Key Services:</b></p>
                        </div>
                    </div>
                    <div class="single-feature-item wow fadeInUp" data-wow-delay=".2s">
                        <div class="num"><i class="las la-external-link-alt"></i></div>
                        <div class="feature-content">
                            <h5>Best Quality Fuel: Engineered for Performance</h5>
                            <p class="text-justify">We take pride in offering Best Quality Fuel at all our 76 Gas Stations. Our fuel is formulated to optimize engine performance, improve fuel efficiency, and keep your vehicle running smoothly. With high-quality additives, our fuel helps prevent engine buildup and extends the life of your vehicle. When you choose 76 fuels, you're choosing reliability, performance, and peace of mind on the road.</p>
                        </div>
                    </div>

                    <div class="single-feature-item wow fadeInUp" data-wow-delay=".6s">
                        <div class="num"><i class="las la-external-link-alt"></i></div>
                        <div class="feature-content">
                            <h5>Flat Rate Products: No Hidden Costs</h5>
                            <p class="text-justify">At JAMUNA-CA INC., transparency is key. That's why we offer Flat Rate Products with no hidden fees or additional charges. Whether you're purchasing fuel or other in-store items, our pricing is clear and straightforward, so you can always know what to expect at the pump and at checkout. No surprises, just simple, honest pricing that puts you in control.</p>
                        </div>
                    </div>

                    <div class="single-feature-item wow fadeInUp" data-wow-delay=".4s">
                        <div class="num"><i class="las la-external-link-alt"></i></div>
                        <div class="feature-content">
                            <h5>No Extra Charge: Fair and Honest Pricing</h5>
                            <p class="text-justify">
                                We believe in fairness and integrity in all our transactions. When you fuel up at one of our 76 Gas Stations, you won’t have to worry about extra charges. There are no hidden fees or additional costs added to your bill—just the price you see, with no surprises at the pump.
                            </p>
                        </div>
                    </div>

                    <div class="single-feature-item wow fadeInUp" data-wow-delay=".2s">
                        <div class="num"><i class="las la-external-link-alt"></i></div>
                        <div class="feature-content">
                            <h5>Free Air for Tires: Always There for You</h5>
                            <p class="text-justify">At JAMUNA-CA INC., we want to make sure you’re always ready to hit the road. That’s why we offer Free Air for your tires at all of our 76 Gas Stations. Whether you’re topping off your tire pressure for a long road trip or simply checking on your vehicle's health, our Free Air service is available to help you maintain optimal tire performance—at no extra charge.</p>
                        </div>
                    </div>

                    <div>
                        <h3>Why Choose JAMUNA-CA INC.?</h3>
                        <div>
                            <ol class="mt-2" style="color: #898a9c">
                                <li>* Convenient Locations: With 76 Gas Stations across California and Nevada, we're strategically located to serve your needs wherever you are in these states.</li>
                                <li>* Customer-Centered Approach: Our focus is always on making your experience easier, more affordable, and more convenient. From our 24/7 service to flat-rate products, everything is designed with you in mind.</li>
                                <li>* Reliable Fuel: We offer Best Quality Fuel that supports engine performance and efficiency, keeping your vehicle running at its best.</li>
                                <li>* No Hidden Fees: With our No Extra Charge policy, you can always count on clear, upfront pricing—no surprises, just honest service.</li>
                                <li>* Free Air: Our commitment to customer service includes free access to air for tire maintenance, ensuring you’re always ready for the road.</li>
                            </ol>
                        </div>
                        <p class="text-justify">JAMUNA-CA INC. is your trusted partner for all your fueling and convenience needs. Whether you’re on a long road trip or just getting around town, our 24/7 stations and commitment to the best quality fuel, fair pricing, and extra customer perks ensure you’ll always have a reliable place to stop. Visit us today and experience the difference at JAMUNA-CA INC.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Testimonial Section -->

    <div class="testimonial-area dark-bg section-padding">
        <div class="capricorn-testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center ">
                        <div class="section-title">
                            <h6>Testimonial</h6>
                            <h2 class="text-white">What Our Clients Say About Us</h2>
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
                                        <img style="height: 70px" src="{{ asset('/frontend/assets/img/gas-custom/sara.webp') }}" alt="client-2">
                                    </div>
                                    <div class="author-desc">
                                        <h5>Sarah Haymes</h5><span>Customer</span>
                                    </div>
                                </div>
                            </div>

                            {{--                            <div class="single-client-item">--}}
                            {{--                                <div class="testimonial-icon"><i class="las la-quote-left"></i></div>--}}
                            {{--                                <p>Nam libero tempore, cum soluta nobi--}}
                            {{--                                    est eligendi optio cumque nihil impeit--}}
                            {{--                                    quo minus id quod maxime placeat--}}
                            {{--                                    facere possimus, omnis voluptas ass--}}
                            {{--                                    umenda est, omnis dolor repellendus--}}
                            {{--                                    emporibus autem zrosi.</p>--}}
                            {{--                                <div class="testimonial-author">--}}
                            {{--                                    <div class="author-img">--}}
                            {{--                                        <img src="{{ asset('/') }}frontend/assets/img/testimonial/3.jpg" alt="">--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="author-desc">--}}
                            {{--                                        <h5>Ryans Gigs</h5><span>Customer</span>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}

                            {{--                            <div class="single-client-item">--}}
                            {{--                                <div class="testimonial-icon"><i class="las la-quote-left"></i></div>--}}
                            {{--                                <p>Doloremue laudantium totam--}}
                            {{--                                    rem aperiam eaque iesa zuae--}}
                            {{--                                    ab illo inventore veritatis et ua--}}
                            {{--                                    i architecto beatae vitae dicta--}}
                            {{--                                    sunt explicabo nemo am voluptatem vitae dicta--}}
                            {{--                                    suntruia.enim is--}}
                            {{--                                    am voluptatem ruia.</p>--}}
                            {{--                                <div class="testimonial-author">--}}
                            {{--                                    <div class="author-img">--}}
                            {{--                                        <img src="{{ asset('/') }}frontend/assets/img/testimonial/4.jpg" alt="">--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="author-desc">--}}
                            {{--                                        <h5>Sarah Fatima</h5><span>Customer</span>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section-->

    <div class="team-area section-padding gray-bg text-center pb-100">
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
                @forelse($employees as $employee)
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-team-member wow fadeInLeft" data-wow-delay=".2s">
                        <div class="team-member-bg" style="max-height: 300px; background-size: contain; background-image: url({{ asset($employee->profile_image ?? 'frontend/assets/img/team/1.jpg') }}); ">
                            <div class="team-content">
                                <div class="team-title">
                                    <a href="#">{{ $employee->name ?? 'Employee Name' }}</a>
                                </div>
                                <div class="team-subtitle">
                                    <p>{{ $employee->gasStationEmployeeRoles[0]->name ?? 'Position Name' }}</p>
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
                                        <a href="https://wa.me/{{ $employee->whatsapp ?? '' }}" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i> </a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                @empty
                    <div class="col-12"><p class="text-danger">No employee found.</p></div>
                @endforelse
            </div>
        </div>
    </div>



@endsection
@push('style')
    <style>
        .single-client-item {min-height: 302px}
    </style>
@endpush
