<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
        name="keywords"
        content="smtechnology, sm technology, sms, school management system, modern school management system"
    />
    <meta
        name="description"
        content="SM Technology SMS is a modern school management system."
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Register</title>

    <!-- Favicon icon -->
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="{{ asset('/') }}backend/assets/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link href="{{ asset('/') }}backend/dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="main-wrapper">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg
            class="tea lds-ripple"
            width="37"
            height="48"
            viewbox="0 0 37 48"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
        >
            <path
                d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z"
                stroke="#233242"
                stroke-width="2"
            ></path>
            <path
                d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34"
                stroke="#233242"
                stroke-width="2"
            ></path>
            <path
                id="teabag"
                fill="#233242"
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z"
            ></path>
            <path
                id="steamL"
                d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke="#233242"
            ></path>
            <path
                id="steamR"
                d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13"
                stroke="#233242"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
            ></path>
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div
        class="
          auth-wrapper
          d-flex
          no-block
          justify-content-center
          align-items-center
        "
        style="
          background: url({{ asset('/') }}backend/assets/images/background/login-register.jpg)
            no-repeat top center;
          background-size: cover;
        "
    >
        <div class="auth-box on-sidebar p-4 bg-white m-0 rounded">
            <div>
                <div class="logo text-center">
              <span class="db">
                  <img src="{{ asset('/') }}backend/assets/images/logo-icon.png" alt="logo" />
                  <br />
{{--                  <img src="{{ asset('/') }}backend/assets/images/logo-text.png" alt="Home"/>--}}
                  <h1>SM Technology</h1>
              </span>
                </div>
                <h3 class="box-title mt-5 mb-0">Register Now</h3>
                <small class="text-muted">Create your account and enjoy</small>
                <!-- Form -->
                <div class="row mt-4">
                    <div class="col-12">
                        <form class="form-horizontal" action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" name="name" class="form-control form-input-bg" id="tb-rfname" placeholder="john deo" required />
                                <label for="tb-rfname">Name</label>
                                <div class="invalid-feedback">Full name is required</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control form-input-bg" name="email" id="tb-remail" placeholder="john@gmail.com" required />
                                <label for="tb-remail">Email</label>
                                <div class="invalid-feedback">Email is required</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-input-bg" name="mobile" id="tb-rmobile" placeholder="01*********" required />
                                <label for="tb-rmobile">Mobile</label>
                                <div class="invalid-feedback">Mobile Number is required</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control form-input-bg" name="password" id="text-rpassword" placeholder="*****" required />
                                <label for="text-rpassword">Password</label>
                                <div class="invalid-feedback">Password is required</div>
                                <span class="text-success">Minimum 8 Characters.</span>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control form-input-bg" name="password_confirmation" id="text-rcpassword" placeholder="*****" required />
                                <label for="text-rcpassword">Confirm Password</label>
                                <div class="invalid-feedback">Password is required</div>
                            </div>
{{--                            <div class="checkbox checkbox-primary mb-3">--}}
{{--                                <input--}}
{{--                                    id="checkbox-signup"--}}
{{--                                    type="checkbox"--}}
{{--                                    class="chk-col-indigo material-inputs"--}}
{{--                                />--}}
{{--                                <label for="checkbox-signup">--}}
{{--                                    I agree to all <a href="#">Terms</a></label--}}
{{--                                >--}}
{{--                            </div>--}}
                            <div class="d-flex align-items-stretch">
                                <button type="submit" class="btn btn-info d-block w-100">
                                    Sign up
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- All Required js -->
<!-- ============================================================== -->
<script src="{{ asset('/') }}backend/dist/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('/') }}backend/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugin js -->
<!-- ============================================================== -->
<script>
    $(".preloader ").fadeOut();
</script>
</body>
</html>
