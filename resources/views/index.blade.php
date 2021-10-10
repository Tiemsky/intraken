@extends('layouts.app',['title'=>__('Buy and Sell Over The World')])
@section('content')
    @include('partials.banner')
    <section class="category_area pt-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section_title">
                        <h3 class="title">Popular <br> Categories</h3>
                    </div>
                </div>
            </div>
            <div class="category_wrapper d-flex flex-wrap justify-content-center pt-30">

                @foreach ($categories as $category)

                    <div class="category-column">
                        <div class="single_category text-center mt-30">
                            <div class="icon">
                                <i class="{{ $category->class }}"></i>
                            </div>
                            <div class="content">
                                <h6 class="title">{{$category->category_name}} </h6>
                            </div>
                            <a href="{{route('showByCategory',[app()->getLocale(), $category->slug])}} "></a>
                        </div>
                    </div>
                @endforeach
                    <div class="category_btn">
                        <a class="main-btn" href="{{route('index.categories',[app()->getLocale()])}} ">View all Catagories</a>
                    </div>
               

            </div>
        </div>
    </section>


    <section class="ads_area pt-70 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ads_tabs d-sm-flex align-items-end justify-content-between pb-30">
                        <div class="section_title mt-45">
                            <h3 class="title">Popular <br> and Featured Ads</h3>
                        </div>
                        <div class="tabs_menu mt-50">
                            <ul class="nav" id="myTab" role="tablist">
                                <li>
                                    <a class="active" id="popular-tab" data-toggle="tab" href="#popular" role="tab"
                                        aria-controls="popular" aria-selected="true">Popular Ads</a>
                                </li>
                                <li>
                                    <a id="featured-tab" data-toggle="tab" href="#featured" role="tab"
                                        aria-controls="featured" aria-selected="false">Featured Ads</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
           @livewire('ads.index')
        </div>
    </section>


    <section class="choose_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="choose_content pt-35">
                        <div class="section_title pb-20">
                            <h3 class="title">Why Choose Us</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam.</p>
                        <ul class="list">
                            <li><i class="fa fa-check"></i> Powerful feature one.</li>
                            <li><i class="fa fa-check"></i> Much needed and important feature two.</li>
                            <li><i class="fa fa-check"></i> Essential features to rock.</li>
                        </ul>
                        <a href="#" class="main-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="choose_image">
            <div class="image">
                <img src="assets/images/choose.png" alt="choose">
            </div>
        </div>
    </section>


    <section class="locations_area pt-115 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section_title pb-15">
                        <h3 class="title">Explore <br> The Locations</h3>
                    </div>
                </div>
            </div>
            <div class="locations_wrapper">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-7 col-sm-8">
                        <div class="single_locations mt-30">
                            <div class="locations_image">
                                <img src="assets/images/locations-1.jpg" alt="Locations">
                            </div>
                            <div class="locations_content">
                                <h5 class="title"><a href="product.html"><i class="far fa-map-marker-alt"></i>Los
                                        Angeles</a></h5>
                                <p>25 ads posted in this location</p>
                                <a class="view" href="product.html">View All Ads Here <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-7 col-sm-8">
                        <div class="single_locations mt-30">
                            <div class="locations_image">
                                <img src="assets/images/locations-2.jpg" alt="Locations">
                            </div>
                            <div class="locations_content">
                                <h5 class="title"><a href="product.html"><i class="far fa-map-marker-alt"></i>California</a>
                                </h5>
                                <p>7 ads posted in this location</p>
                                <a class="view" href="product.html">View All Ads Here <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-7 col-sm-8">
                        <div class="single_locations mt-30">
                            <div class="locations_image">
                                <img src="assets/images/locations-3.jpg" alt="Locations">
                            </div>
                            <div class="locations_content">
                                <h5 class="title"><a href="product.html"><i class="far fa-map-marker-alt"></i>New York</a>
                                </h5>
                                <p>3 ads posted in this location</p>
                                <a class="view" href="product.html">View All Ads Here <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="locations_btn text-center">
                    <a class="main-btn" href="#">View all Locations</a>
                </div>
            </div>
        </div>
    </section>


    <section class="counter_area bg_cover" style="background-image: url(assets/images/counter-bg.jpg)">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-9">
                    <div class="counter_wrapper d-flex flex-wrap justify-content-between">
                        <div class="single_counter">
                            <div class="counter_items d-flex">
                                <div class="counter_icon">
                                    <img src="assets/images/icon/counter-1.svg" alt="counter">
                                </div>
                                <div class="counter_count media-body">
                                    <span class="count"><span class="counter">5000</span>+</span>
                                </div>
                            </div>
                            <p>Published Ads Here</p>
                        </div>
                        <div class="single_counter">
                            <div class="counter_items d-flex">
                                <div class="counter_icon">
                                    <img src="assets/images/icon/counter-2.svg" alt="counter">
                                </div>
                                <div class="counter_count media-body">
                                    <span class="count"><span class="counter">300</span>+</span>
                                </div>
                            </div>
                            <p>Register User Using</p>
                        </div>
                        <div class="single_counter">
                            <div class="counter_items d-flex">
                                <div class="counter_icon">
                                    <img src="assets/images/icon/counter-3.svg" alt="counter">
                                </div>
                                <div class="counter_count media-body">
                                    <span class="count"><span class="counter">200</span>+</span>
                                </div>
                            </div>
                            <p>Verified User Using</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="published_area pt-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section_title pb-15">
                        <h3 class="title">Recently <br> Published Ads</h3>
                    </div>
                </div>
            </div>
            <div class="published_wrapper">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_ads_card mt-30">
                            <div class="ads_card_image">
                                <img src="assets/images/ads-1.png" alt="ads">
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
                                <p class="sticker sticker_color-1">New</p>
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
                                <p class="sticker sticker_color-2">Popular</p>
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
                <div class="published_btn">
                    <a href="product.html" class="main-btn">View all Ads</a>
                </div>
            </div>
        </div>
    </section>


    <section class="services_area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-15">
                        <h3 class="title">ClassiFied <br> Here for You</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_services d-flex mt-30">
                        <div class="services_icon">
                            <i class="fal fa-hand-holding-box"></i>
                        </div>
                        <div class="services_content media-body">
                            <h4 class="title"><a href="#">Sell Your Item Safely</a></h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
                            <a class="more" href="#">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_services d-flex mt-30">
                        <div class="services_icon">
                            <i class="fal fa-shopping-bag"></i>
                        </div>
                        <div class="services_content media-body">
                            <h4 class="title"><a href="#">Buy Directly</a></h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
                            <a class="more" href="#">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_services d-flex mt-30">
                        <div class="services_icon">
                            <i class="fal fa-handshake"></i>
                        </div>
                        <div class="services_content media-body">
                            <h4 class="title"><a href="#">Friendly Platform</a></h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
                            <a class="more" href="#">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_services d-flex mt-30">
                        <div class="services_icon">
                            <i class="fal fa-wallet"></i>
                        </div>
                        <div class="services_content media-body">
                            <h4 class="title"><a href="#">Pay in Person</a></h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
                            <a class="more" href="#">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_services d-flex mt-30">
                        <div class="services_icon">
                            <i class="fal fa-headset"></i>
                        </div>
                        <div class="services_content media-body">
                            <h4 class="title"><a href="#">24/7 Support</a></h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
                            <a class="more" href="#">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_services d-flex mt-30">
                        <div class="services_icon">
                            <i class="fal fa-certificate"></i>
                        </div>
                        <div class="services_content media-body">
                            <h4 class="title"><a href="#">Verified Users</a></h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
                            <a class="more" href="#">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pricing_area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-15">
                        <h3 class="title">Find a Plan <br> That's Right For You</h3>
                    </div>
                </div>
            </div>
            <div class="row no-gutters align-items-center justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single_pricing text-center">
                        <div class="pricing_icon">
                            <img src="assets/images/icon/pricing-1.svg" alt="Icon">
                        </div>
                        <div class="pricing_title">
                            <h4 class="title">Beginers</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur.</p>
                        </div>
                        <div class="pricing_content">
                            <p>Lorem ipsum dolor. Sit amet, consetetur dost. sadipscing elitr, sed. Diam nonumy eirmod.
                                Tempor invidunt ut labore. Pet dolore magna. Aliquyam erat iamvoluptua.</p>
                            <span class="price">$0.00</span>
                        </div>
                        <div class="pricing_btn">
                            <a href="#" class="main-btn">View all Ads</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single_pricing pricing_active text-center">
                        <div class="pricing_icon">
                            <img src="assets/images/icon/pricing-2.svg" alt="Icon">
                        </div>
                        <div class="pricing_title">
                            <h4 class="title">Standard</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur.</p>
                        </div>
                        <div class="pricing_content">
                            <p>Lorem ipsum dolor. Sit amet, consetetur dost. sadipscing elitr, sed. Diam nonumy eirmod.
                                Tempor invidunt ut labore. Pet dolore magna. Aliquyam erat iamvoluptua.</p>
                            <span class="price">$0.00</span>
                        </div>
                        <div class="pricing_btn">
                            <a href="#" class="main-btn main-btn-2">View all Ads</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single_pricing text-center">
                        <div class="pricing_icon">
                            <img src="assets/images/icon/pricing-3.svg" alt="Icon">
                        </div>
                        <div class="pricing_title">
                            <h4 class="title">Premium</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur.</p>
                        </div>
                        <div class="pricing_content">
                            <p>Lorem ipsum dolor. Sit amet, consetetur dost. sadipscing elitr, sed. Diam nonumy eirmod.
                                Tempor invidunt ut labore. Pet dolore magna. Aliquyam erat iamvoluptua.</p>
                            <span class="price">$0.00</span>
                        </div>
                        <div class="pricing_btn">
                            <a href="#" class="main-btn">View all Ads</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog_area pt-115 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-15">
                        <h3 class="title">Latest<br> From The Blog</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7">
                    <div class="single_blog mt-30">
                        <div class="blog_image">
                            <img src="assets/images/blog-1.jpg" alt="blog">
                        </div>
                        <div class="blog_content">
                            <h4 class="title"><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit</a></h4>
                            <ul class="meta">
                                <li><i class="fal fa-clock"></i><a href="#">23 Jan, 2023</a></li>
                                <li><i class="fal fa-comment-dots"></i><a href="#">4 Comments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="single_blog mt-30">
                        <div class="blog_image">
                            <img src="assets/images/blog-2.jpg" alt="blog">
                        </div>
                        <div class="blog_content">
                            <h4 class="title"><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit</a></h4>
                            <ul class="meta">
                                <li><i class="fal fa-clock"></i><a href="#">23 Jan, 2023</a></li>
                                <li><i class="fal fa-comment-dots"></i><a href="#">4 Comments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="single_blog mt-30">
                        <div class="blog_image">
                            <img src="assets/images/blog-3.jpg" alt="blog">
                        </div>
                        <div class="blog_content">
                            <h4 class="title"><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit</a></h4>
                            <ul class="meta">
                                <li><i class="fal fa-clock"></i><a href="#">23 Jan, 2023</a></li>
                                <li><i class="fal fa-comment-dots"></i><a href="#">4 Comments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog_btn text-center mt-50">
                <a href="blog.html" class="main-btn">View All Post</a>
            </div>
        </div>
    </section>
@endsection
