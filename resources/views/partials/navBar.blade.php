<div class="header_navbar">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" 
                href="{{ route('index', [app()->getLocale()]) }} ">
                <img src="{{ asset('assets/images/logo.png') }} " alt="logo"> 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li><a class="active" href="{{ route('index', [app()->getLocale()]) }} ">
                        Home
                        <span class="line"></span>
                        </a>
                    </li>
                    <li><a href="{{ route('index.categories', [app()->getLocale()]) }} ">
                            Categories 
                            <span class="line"></span></a>
                    </li>

                    {{-- <li><a href="#">Blog <i class="fa fa-angle-down"></i> <span class="line"></span></a>
    <ul class="sub-menu">
    <li><a href="blog.html">Blog</a></li>
    <li><a href="blog-details.html">Blog Details</a></li>
    </ul>
    </li> --}}
                    <li><a href="contact.html">
                        Contact
                        <span class="line"></span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="navbar_btn">
                <ul>
                    <li>

                        @if (Auth::user())
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">My Account</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                    <ul>
                                        <li><a href="{{route('user.home',[app()->getLocale()])}} ">
                                            <i class="fal fa-tachometer-alt-average"></i>
                                                Dashboard
                                            </a>
                                        </li>
                                        <li><a href="{{route('user.profile',[app()->getLocale()])}} ">
                                            <i class="fal fa-cog"></i>
                                                Profile Settings
                                            </a>
                                        </li>
                                        <li><a href="{{route('ad.store',[app()->getLocale()])}} ">
                                            <i class="fal fa-plus-octagon"></i>
                                            Post New Ad
                                            </a>
                                        </li>

                                        <li><a href="{{route('ad.myAds',[app()->getLocale()])}} ">
                                            <i class="fal fa-layer-group"></i>
                                            My Ads
                                            </a>
                                        </li>
                                        <li><a href="{{route('user.message',[app()->getLocale()])}} ">
                                            <i class="fal fa-envelope"></i>
                                                Offers/Messages
                                            </a>
                                        </li>
                                        <li><a href="{{route('user.favoriteAds',[app()->getLocale()])}}">
                                            <i class="fal fa-wallet"></i>
                                            Payments
                                            </a>
                                        </li>
                                        <li><a href="{{route('user.favoriteAds',[app()->getLocale()])}} ">
                                            <i class="fal fa-heart"></i>
                                            My Favourites
                                            </a>
                                        </li>
                                        <li>
                                            <a type="button" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                <i class="fal fa-sign-out"></i>
                                                Sign Out
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @else
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Login</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                    <ul>
                                        <li><a href="{{ route('login', [app()->getLocale()]) }} "><i
                                                    class="fal fa-tachometer-alt-average"></i> Login</a></li>
                                        <li><a href="{{ route('register', [app()->getLocale()]) }}"><i
                                                    class="fal fa-cog"></i> Create Account</a></li>

                                    </ul>
                                </div>
                            </div>

                        @endif


                    </li>
                    <li>

                        <div class="dropdown">
                            <a href="" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="flag-icon flag-icon-{{ Config::get('languages')[App::getLocale()]['flag-icon'] }}">
                                </span>
                                {{ Config::get('languages')[App::getLocale()]['display'] }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <ul>
                                    @foreach (Config::get('languages') as $lang => $language)
                                        @if ($lang != App::getLocale())
                                            <li>
                                                <a
                                                    href="{{ route(Route::currentRouteName(), [$language['lang-abbreviation'], $slug ?? '', $slug ?? '']) }}">
                                                    <span
                                                        class="flag-icon flag-icon-{{ $language['flag-icon'] }}"></span>
                                                    {{ $language['display'] }}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach

                                </ul>
                            </div>
                        </div>



                    </li>
                    <li><a class="sign-up" href="{{route('ad.store',[app()->getLocale()])}} ">Post Ads</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" class="d-none">
    @csrf
</form>
