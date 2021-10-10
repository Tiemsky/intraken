<div class="col-lg-3">
    <div class="sidebar_profile mt-50">
        <div class="profile_user">
          @livewire('user.profile-picture')
            <div class="user_list">
                <ul>
                    <li><a class="active" href="{{route('user.home',[app()->getLocale()])}} ">
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
                    <li><a href="{{route('user.message',[app()->getLocale()])}}">
                        <i class="fal fa-envelope"></i>
                            Offers/Messages
                        </a>
                    </li>
                    <li><a href="payments.html">
                        <i class="fal fa-wallet"></i>
                            Payments
                        </a>
                    </li>
                    <li><a href="{{route('user.favoriteAds',[app()->getLocale()])}} ">
                        <i class="fal fa-heart"></i>
                            My Favourites
                        </a>
                    </li>
                    <li><a href="{{route('user.privacy',[app()->getLocale()])}} ">
                        <i class="fal fa-star"></i>
                        Privacy Settings
                        </a>
                    </li>
                    <li><a type="button" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fal fa-sign-out"></i>
                            Sign Out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" class="d-none">
    @csrf
</form>