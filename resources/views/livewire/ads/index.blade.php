<div>
    <div class="ads_tabs">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                <div class="row">
                   @foreach ($ads as $ad)
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_ads_card mt-30">
                                <div class="ads_card_image">
                                    @if ($ad->image->photo0)
                                        <img src="{{ asset('storage/advertisement/'.$ad->image->photo0) }}" alt="ads">
                                    @else
                                        <img src="assets/images/ads-1.png" alt="ads">
                                    @endif
                                    
                                </div>
                                <div class="ads_card_content">
                                    <div class="meta d-flex justify-content-between">
                                        <p>{{$ad->category->category_name}} </p>
                                        @livewire('ads.like',    ['ad_id' => $ad->id])
                                    </div>
                                    <h4 class="title">
                                        <a href="{{route('ad.show',[app()->getLocale(), $ad->slug])}} ">
                                            {{$ad->title}}
                                        </a>
                                    </h4>
                                    <p><i class="far fa-map-marker-alt"></i>
                                        {{$ad->city->name}},
                                        {{$ad->state->name}} - 
                                        {{$ad->country->name}}
                                    </p>
                                    <div class="ads_price_date d-flex justify-content-between">
                                        <span class="price">
                                            {{$ad->price}} 
                                            {{ $ad->currency == 'Dollar' ? '$' : ($ad->currency == 'Euro' ? '€' : 'FCFA') }}
                                        </span>
                                        <span class="date">
                                            {{$ad->created_at->diffForHumans()}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                   @endforeach
                    
                </div>
            </div>
            <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_ads_card mt-30">
                            <div class="ads_card_image">
                                <img src="assets/images/ads-1.png" alt="ads">
                                <p class="sticker">Featured</p>
                            </div>
                            <div class="ads_card_content">
                                <div class="meta d-flex justify-content-between">
                                    <p>Ram & Laptop</p>
                                    <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                </div>
                                <h4 class="title"><a href="product-details.html">8 GB DDR4 Ram, 4th Gen</a></h4>
                                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                                <div class="ads_price_date d-flex justify-content-between">
                                    <span class="price">$299.00</span>
                                    <span class="date">25 Jan, 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_ads_card mt-30">
                            <div class="ads_card_image">
                                <img src="assets/images/ads-2.png" alt="ads">
                                <p class="sticker">Featured</p>
                            </div>
                            <div class="ads_card_content">
                                <div class="meta d-flex justify-content-between">
                                    <p>Ram & Laptop</p>
                                    <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                </div>
                                <h4 class="title"><a href="product-details.html">8 GB DDR4 Ram, 4th Gen</a></h4>
                                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                                <div class="ads_price_date d-flex justify-content-between">
                                    <span class="price">$299.00</span>
                                    <span class="date">25 Jan, 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_ads_card mt-30">
                            <div class="ads_card_image">
                                <img src="assets/images/ads-3.png" alt="ads">
                                <p class="sticker">Featured</p>
                            </div>
                            <div class="ads_card_content">
                                <div class="meta d-flex justify-content-between">
                                    <p>Ram & Laptop</p>
                                    <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                </div>
                                <h4 class="title"><a href="product-details.html">8 GB DDR4 Ram, 4th Gen</a></h4>
                                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                                <div class="ads_price_date d-flex justify-content-between">
                                    <span class="price">$299.00</span>
                                    <span class="date">25 Jan, 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_ads_card mt-30">
                            <div class="ads_card_image">
                                <img src="assets/images/ads-4.png" alt="ads">
                                <p class="sticker">Featured</p>
                            </div>
                            <div class="ads_card_content">
                                <div class="meta d-flex justify-content-between">
                                    <p>Ram & Laptop</p>
                                    <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                </div>
                                <h4 class="title"><a href="product-details.html">8 GB DDR4 Ram, 4th Gen</a></h4>
                                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                                <div class="ads_price_date d-flex justify-content-between">
                                    <span class="price">$299.00</span>
                                    <span class="date">25 Jan, 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_ads_card mt-30">
                            <div class="ads_card_image">
                                <img src="assets/images/ads-5.png" alt="ads">
                                <p class="sticker">Featured</p>
                            </div>
                            <div class="ads_card_content">
                                <div class="meta d-flex justify-content-between">
                                    <p>Ram & Laptop</p>
                                    <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                </div>
                                <h4 class="title"><a href="product-details.html">8 GB DDR4 Ram, 4th Gen</a></h4>
                                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                                <div class="ads_price_date d-flex justify-content-between">
                                    <span class="price">$299.00</span>
                                    <span class="date">25 Jan, 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_ads_card mt-30">
                            <div class="ads_card_image">
                                <img src="assets/images/ads-6.png" alt="ads">
                                <p class="sticker">Featured</p>
                            </div>
                            <div class="ads_card_content">
                                <div class="meta d-flex justify-content-between">
                                    <p>Ram & Laptop</p>
                                    <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                </div>
                                <h4 class="title"><a href="product-details.html">8 GB DDR4 Ram, 4th Gen</a></h4>
                                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                                <div class="ads_price_date d-flex justify-content-between">
                                    <span class="price">$299.00</span>
                                    <span class="date">25 Jan, 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_ads_card mt-30">
                            <div class="ads_card_image">
                                <img src="assets/images/ads-7.png" alt="ads">
                                <p class="sticker">Featured</p>
                            </div>
                            <div class="ads_card_content">
                                <div class="meta d-flex justify-content-between">
                                    <p>Ram & Laptop</p>
                                    <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                </div>
                                <h4 class="title"><a href="product-details.html">8 GB DDR4 Ram, 4th Gen</a></h4>
                                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                                <div class="ads_price_date d-flex justify-content-between">
                                    <span class="price">$299.00</span>
                                    <span class="date">25 Jan, 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_ads_card mt-30">
                            <div class="ads_card_image">
                                <img src="assets/images/ads-8.png" alt="ads">
                                <p class="sticker">Featured</p>
                            </div>
                            <div class="ads_card_content">
                                <div class="meta d-flex justify-content-between">
                                    <p>Ram & Laptop</p>
                                    <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                </div>
                                <h4 class="title"><a href="product-details.html">8 GB DDR4 Ram, 4th Gen</a></h4>
                                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                                <div class="ads_price_date d-flex justify-content-between">
                                    <span class="price">$299.00</span>
                                    <span class="date">25 Jan, 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
    </div>
    <div class="pt-5 d-flex justify-content-end">
        <a class="main-btn" href="{{route('ad.index',[app()->getLocale()])}} ">Load More</a>
    </div></div>
