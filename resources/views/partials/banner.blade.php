<div>
    <div class="header_content bg_cover" style="background-image: url(assets/images/hero.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="content_wrapper">
                        <h3 class="title">Welcome to ClassiFied</h3>
                        <p>Buy And Sell Everything From Used Cars To Mobile Phones And Computers, Or Search For Property, Jobs And More. Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        <ul class="header_btn">
                            <li>
                                <a class="main-btn" href="{{route('ad.index', app()->getLocale())}} ">Browse Ads</a>
                            </li>
                            <li>
                                <a class="main-btn main-btn-2" href="{{route('ad.store', app()->getLocale())}} ">Post an Ad</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header_search">
                <form action='{{route('ad.search', app()->getLocale())}}' method="GET">
                
                    <div class="search_wrapper d-flex flex-wrap">
                        <div class="search_column d-flex flex-wrap">
                            <div class="search_select mt-15">
                                <select name="country" class="form-control">
                                    <option value="">Select a Location</option>
                                    @foreach ($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}} </option>
                                    @endforeach
                                </select>
                                <i class="far fa-map-marker-alt"></i>
                            </div>
                            <div class="search_select mt-15">
                                <select name="category" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach ($searchCategories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}} </option>
                                    @endforeach
                                </select>
                                <i class="far fa-tags"></i>
                            </div>
                        </div>
                        <div class="search_column d-flex flex-wrap">
                            <div class="search_form mt-15">
                                <input name="query" type="text" placeholder="Type Your Keyword">
                                <i class="far fa-i-cursor"></i>
                            </div>
                            <div class="search_btn mt-15">
                                <button class="main-btn">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="header_keyword d-sm-flex">
                    <span class="title">Trending Keywords:</span>
                    <ul class="tags media-body">
                        <li><a href="#">Camera</a></li>
                        <li><a href="#">Mobile</a></li>
                        <li><a href="#">DSLR</a></li>
                        <li><a href="#">Packet</a></li>
                        <li><a href="#">Dress</a></li>
                        <li><a href="#">Shirt</a></li>
                        <li><a href="#">Pant</a></li>
                        <li><a href="#">Shoe</a></li>
                        <li><a href="#">Table</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
