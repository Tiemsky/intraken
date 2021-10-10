<!doctype html>
<html class="no-js" lang="fr">
<head>
    <title>IntraKen - {{ __('Classified Ads') }} | {{ __('Sign Up') }}</title>
</head>
@include('partials.header')
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
        <div class="header_navbar">
            <div class="container">
                @include('partials.navBar')
            </div>
        </div>
        <div class="page_banner bg_cover" style="background-image: url(assets/images/page-banner.jpg)">
            <div class="container">
                <div class="page_banner_content">
                    <h3 class="title">Sign up</h3>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Sign up</li>
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
                            <h5 class="title">{{__('Sign Up Now')}}</h5>
                        </div>
                        <form action="{{ route('register', [app()->getLocale()]) }} " method="POST">
                            @csrf
                            <div class="sign_form_wrapper">

                                <div class="single_form">
                                    <input type="text" class="form-control @error('username') is-invalid @enderror"
                                        name="username" value="{{ old('username') }}" placeholder="Username">
                                    <i class="fal fa-user"></i>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }} </strong>
                                        </span>
                                    @enderror


                                </div>
                                <div class="single_form">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" placeholder="Email">
                                    <i class="fal fa-envelope"></i>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }} </strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="single_form">

                                    <input type="tel" id="phone"
                                        class="form-control @error('phone') is-invalid @enderror" name="phone[full]"
                                        placeholder="Phone">
                                    <input type="hidden" name="phonefull" id="phonefull" />

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }} </strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="single_form">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password" placeholder="Password">
                                    <i class="fal fa-key"></i>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }} </strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="single_form">
                                    <input type="password" name="password_confirmation" placeholder="Confirm Password">
                                    <i class="fal fa-key"></i>
                                </div>
                                <div class="single_form">
                                    <div class="sign_checkbox">
                                        <input type="checkbox" id="checkbox" name="licence[]" value="1"
                                            {{ is_array(old('licence')) && in_array(1, old('licence')) ? ' checked' : '' }}>
                                        <label for="checkbox"></label>
                                        <span>By registering, you accept our Terms & Conditions</span><br>
                                        @error('licence')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }} </strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="single_form">
                                    <button type="submit" class="main-btn">Sign Up</button>
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

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

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
    @include('partials.script')

    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            //   excludeCountries: ["us"],
            // formatOnDisplay: false,
            geoIpLookup: function(callback) {
                $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },

            // hiddenInput: "phone",
            initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            //   separateDialCode: true,
            utilsScript: "../../../public/assets/js/",
        });

        $(document).ready(function() {
            $('.iti__flag-container,#phone').click(function() {
                var countryCode = $('.iti__selected-flag').attr('title');
                var countryCode = countryCode.replace(/[^0-9]/g, '')
                $('#phone').val("");
                $('#phone').val("+" + countryCode + " " + $('#phone').val());
            });
        });

    </script>
</body>

</html>
