<div class="product_details_page pt-70 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="product_details mt-50">
                    <div class="product_image">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="details-1" role="tabpanel"
                                aria-labelledby="details-1-tab">
                                <img src="{{ asset('storage/advertisement/' . $ad->image->photo0) }} "
                                    alt="product details">
                                {{-- <img src="{{ asset('assets/images/product_details-1.jpg') }} " alt="product details"> --}}
                                <ul class="sticker">
                                    <li>Featured</li>
                                    <li>New</li>
                                </ul>
                            </div>
                            @if ($ad->image->photo1)
                                <div class="tab-pane fade" id="details-2" role="tabpanel"
                                    aria-labelledby="details-2-tab">
                                    <img src="{{ asset('storage/advertisement/' . $ad->image->photo1) }} "
                                        alt="product details">
                                </div>

                            @endif
                            @if ($ad->image->photo2)
                                <div class="tab-pane fade" id="details-3" role="tabpanel"
                                    aria-labelledby="details-3-tab">
                                    <img src="{{ asset('storage/advertisement/' . $ad->image->photo2) }} "
                                        alt="product details">
                                </div>
                            @endif
                            @if ($ad->image->photo3)
                                <div class="tab-pane fade" id="details-4" role="tabpanel"
                                    aria-labelledby="details-4-tab">
                                    <img src="{{ asset('storage/advertisement/' . $ad->image->photo3) }}"
                                        alt="product details">
                                </div>
                            @endif
                            @if ($ad->image->photo4)
                                <div class="tab-pane fade" id="details-5" role="tabpanel"
                                    aria-labelledby="details-5-tab">
                                    <img src="{{ asset('storage/advertisement/' . $ad->image->photo4) }}"
                                        alt="product details">
                                </div>
                            @endif
                            @if ($ad->image->photo5)
                                <div class="tab-pane fade" id="details-6" role="tabpanel"
                                    aria-labelledby="details-6-tab">
                                    <img src="{{ asset('storage/advertisement/' . $ad->image->photo5) }}"
                                        alt="product details">
                                </div>
                            @endif

                        </div>

                        {{-- sliding images start --}}
                        <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="details-1-tab" data-toggle="tab" href="#details-1" role="tab"
                                    aria-controls="details-1" aria-selected="true">
                                    <img src="{{ asset('storage/advertisement/' . $ad->image->photo0) }} "
                                        alt="product details">
                                </a>
                            </li>

                            @if ($ad->image->photo1)
                                <li class="nav-item">
                                    <a id="details-2-tab" data-toggle="tab" href="#details-2" role="tab"
                                        aria-controls="details-2" aria-selected="false">
                                        <img src="{{ asset('storage/advertisement/' . $ad->image->photo1) }} "
                                            alt="product details">
                                    </a>
                                </li>
                            @endif
                            @if ($ad->image->photo2)
                                <li class="nav-item">
                                    <a id="details-3-tab" data-toggle="tab" href="#details-3" role="tab"
                                        aria-controls="details-3" aria-selected="false">
                                        <img src="{{ asset('storage/advertisement/' . $ad->image->photo2) }} "
                                            alt="product details">
                                    </a>
                                </li>
                            @endif
                            @if ($ad->image->photo3)
                                <li class="nav-item">
                                    <a id="details-4-tab" data-toggle="tab" href="#details-4" role="tab"
                                        aria-controls="details-4" aria-selected="false">
                                        <img src="{{ asset('storage/advertisement/' . $ad->image->photo3) }} "
                                            alt="product details">
                                    </a>
                                </li>
                            @endif
                            @if ($ad->image->photo4)
                                <li class="nav-item">
                                    <a id="details-5-tab" data-toggle="tab" href="#details-5" role="tab"
                                        aria-controls="details-4" aria-selected="false">
                                        <img src="{{ asset('storage/advertisement/' . $ad->image->photo5) }} "
                                            alt="product details">
                                    </a>
                                </li>
                            @endif
                            @if ($ad->image->photo5)
                                <li class="nav-item">
                                    <a id="details-6-tab" data-toggle="tab" href="#details-6" role="tab"
                                        aria-controls="details-4" aria-selected="false">
                                        <img src="{{ asset('storage/advertisement/' . $ad->image->photo5) }} "
                                            alt="product details">
                                    </a>
                                </li>
                            @endif

                        </ul>
                    </div>
                    <div class="product_details_meta d-sm-flex justify-content-between align-items-end">
                        <div class="product_price">
                            <span class="price">{{ $ad->price }}
                                {{ $ad->currency == 'Dollar' ? '$' : ($ad->currency == 'Euro' ? '€' : 'FCFA') }}</span>
                            <p>{{ $ad->price_status }} </p>
                        </div>
                        <div class="product_date">
                            <ul class="meta">
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                    <a>{{ $ad->created_at->diffForHumans() }} </a>

                                </li>
                                <li>
                                    <i class="fa fa-eye"></i>
                                    <a href="#">1573 VIEWS</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product_details_features">
                        <div class="product_details_title">
                            <h5 class="title">{{ $ad->title }} </h5>
                        </div>
                    </div>

                    <div class="product_details_features">
                        <div class="product_details_title">
                            <h5 class="title">Advertisement Location:</h5>
                        </div>
                        <div class="details_features_wrapper d-flex flex-wrap">
                            <div class="single_features d-flex">
                                <h6 class="features_title">Country :</h6>
                                <p>{{ $ad->country->name }} </p>
                            </div>
                            <div class="single_features d-flex">
                                <h6 class="features_title">State :</h6>
                                <p>{{ $ad->state->name }} </p>
                            </div>
                            <div class="single_features d-flex">
                                <h6 class="features_title">City :</h6>
                                <p>{{ $ad->city->name }} </p>
                            </div>

                        </div>
                    </div>
                    @if ($properties_details)
                        <div class="product_details_features">
                            <div class="product_details_title">
                                <h5 class="title">Property Details:</h5>
                            </div>
                            <div class="details_features_wrapper d-flex flex-wrap">
                                <div class="single_features d-flex">
                                    <h6 class="features_title">Category :</h6>
                                    <p>{{ $ad->category->category_name }} </p>
                                </div>
                                <div class="single_features d-flex">
                                    <h6 class="features_title">Type :</h6>
                                    <p>{{ $ad->subCategory->sub_category_name }} </p>
                                </div>
                                <div class="single_features d-flex">
                                    <h6 class="features_title">Condition :</h6>
                                    <p>{{ $properties_details->status }} </p>
                                </div>
                                <div class="single_features d-flex">
                                    <h6 class="features_title">Furnishing:</h6>
                                    <p>{{ $properties_details->furnishing }} </p>
                                </div>
                                <div class="single_features d-flex">
                                    <h6 class="features_title">Bedrooms:</h6>
                                    <p>{{ $properties_details->bedroom }} </p>
                                </div>
                                <div class="single_features d-flex">
                                    <h6 class="features_title">Bathroom:</h6>
                                    <p>{{ $properties_details->bathroom }} </p>
                                </div>
                                <div class="single_features d-flex">
                                    <h6 class="features_title">Parking:</h6>
                                    <p>{{ $properties_details->parking }} </p>
                                </div>
                                <div class="single_features d-flex">
                                    <h6 class="features_title">Listed:</h6>
                                    <p>{{ $properties_details->listed_by }} </p>
                                </div>
                                <div class="single_features d-flex">
                                    <h6 class="features_title">Length:</h6>
                                    <p>{{ $properties_details->length }} </p>
                                </div>

                            </div>
                        </div>
                    @endif
                    @if ($car_details)
                        <div class="product_details_features">
                            <div class="product_details_title">
                                <h5 class="title">Car Details:</h5>
                            </div>
                            <div class="details_features_wrapper d-flex flex-wrap">
                                <div class="single_features d-flex">
                                    <h6 class="features_title">Category :</h6>
                                    <p>{{ $ad->category->category_name }} </p>
                                </div>
                                <div class="single_features d-flex">
                                    <h6 class="features_title">Brand :</h6>
                                    <p>{{ $ad->subCategory->sub_category_name }} </p>
                                </div>
                                <div class="single_features d-flex">
                                    <h6 class="features_title">Fuel :</h6>
                                    <p>{{ $car_details->fuel }} </p>
                                </div>
                                <div class="single_features d-flex">
                                    <h6 class="features_title">Transmission :</h6>
                                    <p>{{ $car_details->transmission }} </p>
                                </div>
                                <div class="single_features d-flex">
                                    <h6 class="features_title">KM Drivem :</h6>
                                    <p>{{ $car_details->km_driven }} </p>
                                </div>
                                <div class="single_features d-flex">
                                    <h6 class="features_title">Year :</h6>
                                    <p>{{ $car_details->year }} </p>
                                </div>


                            </div>
                        </div>
                    @endif
                    <div class="product_details_description">
                        <div class="product_details_title">
                            <h5 class="title">Description :</h5>
                        </div>
                        <p>{{ $ad->description }} </p>
                    </div>
                </div>
                @if (Auth::user() && Auth::user()->id != $ad->user->id)
                    <div class="product_rating mt-30">
                        <div class="product_rating_top_bar">
                            <div class="product_details_title">
                                <h5 class="title">1 Review :</h5>
                            </div>
                            <div class="product_rating_star">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_rating_author mt-30">
                            <div class="rating_author d-flex align-items-center">
                                <div class="author_image">
                                    <img src="assets/images/author-1.jpg" alt="author">
                                </div>
                                <div class="author_content media-body">
                                    <h5 class="author_name">Angel Grantham</h5>
                                    <span class="date">25 January, 2023</span>
                                    <ul class="rating_star">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rating_description">
                                <p>That, sleep. Reposed that considerable, found a failing. In a means, turned would
                                    according of semantics, far were remember support from waved. had to of fully then
                                    can
                                    name blocks being her not in afforded. devotion logged to and remember and the of in
                                    the
                                    language would </p>
                            </div>
                        </div>
                    </div>
                    <div class="product_rating_form mt-30">
                        <div class="product_details_title">
                            <h5 class="title">Leave Your Review :</h5>
                        </div>
                        <div class="product_rating_form_wrapper d-flex flex-wrap">
                            <div class="product_details_rating_wrapper">
                                <div class="product_details_rating mt-20">
                                    <p><i class="fa fa-star-o"></i> Your Rating</p>
                                    <ul class="rating_radio">
                                        <li>
                                            <input type="radio" checked="" name="radio" id="radio1">
                                            <label for="radio1"></label>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <input type="radio" name="radio" id="radio2">
                                            <label for="radio2"></label>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fal fa-star"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <input type="radio" name="radio" id="radio3">
                                            <label for="radio3"></label>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fal fa-star"></i>
                                                <i class="fal fa-star"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <input type="radio" name="radio" id="radio4">
                                            <label for="radio4"></label>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fal fa-star"></i>
                                                <i class="fal fa-star"></i>
                                                <i class="fal fa-star"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <input type="radio" name="radio" id="radio5">
                                            <label for="radio5"></label>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fal fa-star"></i>
                                                <i class="fal fa-star"></i>
                                                <i class="fal fa-star"></i>
                                                <i class="fal fa-star"></i>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_details_form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single_form">
                                                <input type="text" placeholder="Enter your name . . .">
                                                <i class="fal fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single_form">
                                                <input type="text" placeholder="Enter your mail address . . .">
                                                <i class="fal fa-envelope"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single_form">
                                                <textarea placeholder="Type your review . . ."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single_form">
                                                <button class="main-btn">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="related_product mt-45">
                        <div class="div_title">
                            <h3 class="title">Related Ads</h3>
                        </div>
                        <div class="row">
                            @forelse ($similar_ads as $similar_ad)
                                <div class="col-md-4">
                                    <div class="single_ads_card mt-30">
                                        <div class="ads_card_image">
                                            @if ($similar_ad->image->photo0)
                                                <img src="{{ asset('storage/advertisement/'.$similar_ad->image->photo0) }}" alt="ads">
                                            @else
                                                <img src="assets/images/ads-1.png" alt="ads">
                                            @endif
                                            
                                        </div>
                                        <div class="ads_card_content">
                                            <div class="meta d-flex justify-content-between">
                                                <p>{{$similar_ad->category->category_name}} </p>
                                              @auth
                                                @if(count($this->likeChecker(Auth::user()->id, $ad->id))>0)
                                                    <a type='button' class="like" wire:click='disLike({{$ad->id}})'>
                                                        <i class="fas fa-heart" style="color: #FF4367"></i>
                                                    </a>
                                              @endauth
                                               
                                                @else
                                                    <a type='button' class="like" wire:click='like({{$similar_ad->id}})'>
                                                        <i class="fal fa-heart"></i>
                                                    </a>
                                                @endif
                                                
                                            </div>
                                            <h4 class="title">
                                                <a href="{{route('ad.show',[app()->getLocale(), $similar_ad->slug])}} ">
                                                    {{$similar_ad->title}}
                                                </a>
                                            </h4>
                                            <p><i class="far fa-map-marker-alt"></i>
                                                {{$similar_ad->city->name}},
                                                {{$similar_ad->state->name}} - 
                                                {{$similar_ad->country->name}}
                                            </p>
                                            <div class="ads_price_date d-flex justify-content-between">
                                                <span class="price">
                                                    {{$similar_ad->price}} 
                                                    {{ $similar_ad->currency == 'Dollar' ? '$' : ($similar_ad->currency == 'Euro' ? '€' : 'FCFA') }}
                                                </span>
                                                <span class="date">
                                                    {{$similar_ad->created_at->diffForHumans()}}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           
                            @empty
                                
                            @endforelse
                            
                        </div>
                        <div class="related_product_btn">
                            <a class="main-btn" href="#">View all Ads</a>
                        </div>
                    </div>

                
            </div>
            <div class="col-lg-3">
                <div class="product_details_sidebar pt-20">
                    <div class="product_sidebar_owner mt-30">
                        <div class="product_details_title">
                            <h5 class="title">Ad Owner :</h5>
                        </div>
                        <div class="product_owner_wrapper mt-20">
                            <div class="owner_author d-flex align-items-center">
                                <div class="author_image">
                                    @if ($ad->user->photo)
                                        <img src="{{ asset('storage/users/' . $ad->user->photo) }} " alt="author">
                                    @else
                                        <img src="{{ asset('storage/users/default.png') }} " alt="author">
                                    @endif

                                </div>
                                <div class="author_content media-body">
                                    <h5 class="author_name">{{ $ad->user->username }} </h5>
                                    <p>Member Since: {{ $ad->user->created_at->diffForHumans() }} </p>
                                </div>
                            </div>
                            <div class="owner_address d-flex">
                                <div class="address_icon">
                                    <i class="far fa-map-marker-alt"></i>
                                </div>
                                <div class="address_content media-body">
                                    <p>{{ $ad->country->name }} {{ $ad->state->name }} {{ $ad->city->name }}</p>
                                </div>
                            </div>
                            <div class="owner_call">
                                <button class="main-btn" wire:click.prevent='showNumber'>
                                    {{ $showNumber == false ? 'Click to See Number' : 'Hide Number' }}
                                </button>
                            </div>
                            <div class="owner_call">
                                <button class="main-btn user-ads" wire:click.prevent='showUserAd({{$ad->user->id}})'>
                                    Ads Posted By: {{$ad->user->username}}
                                </button>
                            </div>

                            <div class="owner_call">
                                @if (Auth::user())
                                    @if ($showNumber)
                                        <button class="main-btn" style="background: #FF4367">
                                            <i class="fal fa-phone"></i>
                                            {{ Auth::user()->phone }}
                                        </button>
                                    @endif
                                @endif
                                {{-- <a class="main-btn" href="{{route('ad.myAds',[app()->getLocale()])}} "><i class="fal fa-phone"></i> Click to See Number</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="product_sidebar_contact mt-30">
                        <div class="product_details_title">
                            <h5 class="title">Contact Seller :</h5>
                        </div>
                        <div class="sidebar_contact_form">
                            <div class="single_form">
                                @if (Auth::user())
                                    @if (Auth::user()->id != $ad->user_id)
                                        <send-message seller-name="{{ $ad->user->username }}"
                                            sender-id="{{ Auth::user()->id }}" receiver-id="{{ $ad->user->id }}"
                                            ad-id="{{ $ad->id }}" />
                                    @endif
                                   
                                @else
                                    @if (!$showLogin)
                                        <button class="main-btn" wire:click.prevent='contactSeller'>
                                            <i class="fal fa-paper-plane">
                                            </i>Send to Seller
                                        </button>
                                    @else
                                        <a type="button" class="main-btn"
                                            href='{{ route('login', [app()->getLocale()]) }}'>
                                            Login
                                        </a>
                                    @endif

                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="product_sidebar_action mt-30">
                        <div class="product_details_title">
                            <h5 class="title">Ad Action :</h5>
                        </div>
                        <div class="sidebar_action_items d-flex justify-content-between align-items-center">
                            <div class="single_action">
                                <a href="#">
                                    <i class="fal fa-share-alt"></i>
                                    <span>Share</span>
                                </a>
                            </div>
                            <div class="single_action">
                                <a href="#">
                                    <i class="fal fa-bookmark"></i>
                                    <span>Save</span>
                                </a>
                            </div>
                            <div class="single_action">
                                <a href="#">
                                    <i class="fal fa-heart"></i>
                                    <span>Share</span>
                                </a>
                            </div>
                            <div class="single_action">
                                <a href="#">
                                    <i class="fal fa-flag"></i>
                                    <span>Share</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product_sidebar_map mt-30">
                        <div class="product_details_title">
                            <h5 class="title">Location Map :</h5>
                        </div>
                        <div class="gmap_canvas">
                            <iframe id="gmap_canvas"
                                src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                        </div>
                    </div>
                    <div class="product_sidebar_tips mt-30">
                        <div class="product_details_title">
                            <h5 class="title">Location Map :</h5>
                        </div>
                        <div class="sidebar_tips">
                            <ul class="tips_list">
                                <li><span></span> Began because on to lay about manage been.</li>
                                <li><span></span> Is all increasing up in it he as would was epic and perception.</li>
                                <li><span></span> Console great gradually pattern.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
