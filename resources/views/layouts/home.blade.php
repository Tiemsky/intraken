<!DOCTYPE html>
<html lang="fr">

<head>
    <title>IntraKen - {{__('Classified Ads')}} @isset($title) |{{ $title }} @endisset</title>
    @include('partials.header')
</head>

<body class="gray-bg">

    <div id="app">
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
        </header>

        <section class="dashboard_page pt-70 pb-120">
            <div class="container">
                <div class="row">
                    @include('partials.user-sideBar')
                    @yield('content')
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


        @include('partials.footer')
    </div>
    @include('partials.script')
</body>

</html>
