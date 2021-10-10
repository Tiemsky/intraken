<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <title>IntraKen - {{ __('Classified Ads') }} | {{ __('Sign In') }}</title>
    @include('partials.header')
</head>

<body class="gray-bg">

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <header class="header_area">
        @include('partials.navBar')
        <div class="page_banner bg_cover" style="background-image: url(assets/images/page-banner.jpg)">
            <div class="container">
                <div class="page_banner_content">
                    <h3 class="title">Sign In</h3>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('index', [app()->getLocale()]) }} ">Home</a></li>
                        <li>Sign In</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>


    <section class="sign_in_area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7 col-sm-9">
                    <div class="sign_in_form">
                        <div class="sign_title">
                            <h5 class="title">Sign In Now</h5>
                        </div>
                        <form method="POST" action="{{ route('login', [app()->getLocale()]) }} ">
                            @csrf
                            <div class="sign_form_wrapper">
                                <div class="single_form">
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                        name="email" placeholder="Email">
                                    <i class="fal fa-envelope"></i>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }} </strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="single_form">
                                    <input type="password" class="form-control @error('email') is-invalid @enderror"
                                        name="password" placeholder="Password">
                                    <i class="fal fa-key"></i>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }} </strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="single_form d-sm-flex justify-content-between">
                                    <div class="sign_checkbox">
                                        <input type="checkbox" id="checkbox" name="rememberme">
                                        <label for="checkbox"></label>
                                        <span>Keep me logged in</span>
                                    </div>
                                    <div class="sign_forgot">
                                        <a href="#">Forgot Password?</a>
                                    </div>
                                </div>
                                <div class="single_form">
                                    <button class="main-btn">Sign In</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="call_to_action_area pt-20 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="call_to_action_content mt-45">
                        <h4 class="title">Subscribe For Update</h4>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="call_to_action_form mt-50">
                        <form action="#">
                            <i class="fal fa-envelope"></i>
                            <input type="text" placeholder="Enter your mail address . . .">
                            <button class="main-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer_area">

        <div class="footer_copyright pt-15 pb-30">
            <div class="container">
                <div class="footer_copyright_wrapper text-center d-sm-flex justify-content-between align-items-center">
                    <div class="copyright mt-15">
                        <p>Designed and Developed by <a href="https://graygrids.com/" rel="nofollow">GrayGrids</a></p>
                    </div>
                    <div class="payment mt-15">
                        <ul>
                            <li><a href="#"><img src="{{ asset('assets/images/icon/payment-method1.jpg') }} "
                                        alt="payment"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/icon/payment-method2.jpg') }} "
                                        alt="payment"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/icon/payment-method3.jpg') }} "
                                        alt="payment"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/icon/payment-method4.jpg') }} "
                                        alt="payment"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }} "></script>

    <script src="{{ asset('assets/js/jquery.counterup.min.js') }} "></script>

    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }} "></script>

    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }} "></script>

    <script src="{{ asset('assets/js/vendor/modernizr-3.7.1.min.js') }} "></script>

    <script src="{{ asset('assets/js/popper.min.js') }} "></script>

    <script src="{{ asset('assets/js/bootstrap.min.js') }} "></script>

    <script src="{{ asset('assets/js/slick.min.js') }} "></script>

    <script src="{{ asset('assets/js/waypoints.min.js') }} "></script>

    <script src="{{ asset('assets/js/ion.rangeSlider.min.js') }} "></script>

    <script src="{{ asset('assets/js/ajax-contact.js') }} "></script>

    <script src="{{ asset('assets/js/main.js') }} "></script>

    <script src="{{ mix('js/app.js') }}" defer></script>
</body>

<!-- Mirrored from demo.graygrids.com/themes/classified/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Jun 2021 03:29:49 GMT -->

</html>
