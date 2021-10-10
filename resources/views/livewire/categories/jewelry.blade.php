<div>
    <section class="product_page pt-70 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product_sidebar pt-20">
                        <div class="sidebar_categories mt-30">
                            <div class="sidebar_title">
                                <h5 class="title">Categories</h5>
                            </div>
                            <div class="sidebar_categories_content">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <a href="#" data-toggle="collapse" data-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne"><img
                                                    src="{{ asset('assets/images/sidebar_icon/categories-1.svg') }}" alt="Icon">
                                                Women's Clothing (10)</a>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul class="sidebar_categories_list">
                                                    <li><a href="#">iPhones</a></li>
                                                    <li><a href="#">Feature Phones</a></li>
                                                    <li><a href="#">Refurbished Phones</a></li>
                                                    <li><a href="#">Mobile Phone Accessories</a></li>
                                                    <li><a href="#">Mobile Phone Parts</a></li>
                                                    <li><a href="#">Phone Bags & Cases</a></li>
                                                    <li><a href="#">Communication Equipment's</a></li>
                                                    <li><a href="#">Walkie Talkie</a></li>
                                                    <li><a href="#">Walkie Talkie Parts</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar_price_range mt-30">
                            <div class="sidebar_title">
                                <h5 class="title">Price Range</h5>
                            </div>
                            <div class="price_range_content">
                                <div class="range-slider">
                                    <input type="text" class="js-range-slider" value="" />
                                </div>
                                <div class="extra-controls">
                                    <input type="text" class="js-input-from" value="0" />
                                    <input type="text" class="js-input-to" value="0" />
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="product_topbar d-md-flex align-items-center justify-content-between pb-30">
                        <div class="product_select pt-50  d-flex flex-wrap">
                            <div class="d-flex justify-content-between ">
                                <select class='form-control w-100 m-1'>
                                    <option value="0">Story by Acceding</option>
                                    <option value="1">Some option</option>
                                    <option value="2">Another option</option>
                                    <option value="4">Potato</option>
                                </select>
                                <select class='form-control w-100 m-1'>
                                    <option value="0">Location</option>
                                    <option value="1">Some option</option>
                                    <option value="2">Another option</option>
                                    <option value="4">Potato</option>
                                </select>
                                <select class='form-control w-100 m-1'>
                                    <option value="0">12 Items</option>
                                    <option value="1">Some option</option>
                                    <option value="2">Another option</option>
                                    <option value="4">Potato</option>
                                </select>

                            </div>
                         
                        </div>
                        <div class="product_tab_menu mt-50">
                            <ul class="nav justify-content-center" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="active" id="grid-tab" data-toggle="tab" href="#grid" role="tab"
                                        aria-controls="grid" aria-selected="true">
                                        <i class="fal fa-th"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list"
                                        aria-selected="false">
                                        <i class="fal fa-th-list"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                            <div class="product_grid">
                                <div class="row">
                                    @forelse ($jewelries as $jewelry)
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="single_ads_card mt-30">
                                                <div class="ads_card_image">
                                                    <img src="{{ asset('storage/advertisement/'.$jewelry->image->photo0)}}" alt="ads">
                                                </div>
                                                <div class="ads_card_content">
                                                    <div class="meta d-flex justify-content-between">
                                                        <p>{{$jewelry->category->category_name}} </p>
                                                        @livewire('ads.like', ['ad_id' => $jewelry->id])
                                                    </div>
                                                    <h4 class="title">
                                                        <a href="{{route('ad.show',[app()->getLocale(), $jewelry->slug])}} ">
                                                            {{$jewelry->title}}
                                                        </a>
                                                    </h4>
                                                    <p><i class="far fa-map-marker-alt"></i>
                                                        {{$jewelry->country->name}}-
                                                        {{$jewelry->state->name}}-
                                                        {{$jewelry->city->name}}
                                                    </p>
                                                    <div class="ads_price_date d-flex justify-content-between">
                                                        <span class="price">
                                                            {{$jewelry->price}} {{ $jewelry->currency == 'Dollar' ? '$' : ($jewelry->currency == 'Euro' ? '€' : 'FCFA') }}
                                                        </span>
                                                        <span class="date">{{$jewelry->created_at->diffForHumans()}} </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <div class="col-xl-12 col-sm-12">
                                            <h4 class='text-center'>No Data Found</h4>
                                        </div>
                                    @endforelse
                              
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                            <div class="product_list">
                                @forelse ($jewelries as $jewelry)
                                    <div class="single_ads_card ads_list d-sm-flex mt-30">
                                        <div class="ads_card_image" style="width: 300px">
                                            <img src="{{ asset('storage/advertisement/'.$jewelry->image->photo0)}}" alt="ads">
                                        </div>
                                        <div class="ads_card_content media-body">
                                            <div class="meta d-flex justify-content-between">
                                                <p>{{$jewelry->category->category_name}}</p>
                                                @livewire('ads.like', ['ad_id' => $jewelry->id])
                                            </div>
                                            <h4 class="title">
                                                <a href="#">{{$jewelry->category->category_name}}</a>
                                            </h4>
                                            <p><i class="far fa-map-marker-alt"></i>
                                                {{$jewelry->country->name}}-
                                                {{$jewelry->state->name}}-
                                                {{$jewelry->city->name}}
                                            </p>
                                            <p>.</p>
                                            <div class="ads_price_date d-flex justify-content-between">
                                                <span class="price">
                                                    {{$jewelry->price}} {{ $jewelry->currency == 'Dollar' ? '$' : ($jewelry->currency == 'Euro' ? '€' : 'FCFA') }}
                                                </span>
                                                <span class="date">{{$jewelry->created_at->diffForHumans()}} </span>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                    <h4 class='text-center'>No Data Found</h4>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="pagination_wrapper mt-50">
                        <ul class="pagination justify-content-center">
                            <li><a class="Previous" href="#"><i class="fal fa-angle-left"></i></a></li>
                            <li><a class="number" href="#">1</a></li>
                            <li><a class="number active" href="#">2</a></li>
                            <li><a class="number" href="#">3</a></li>
                            <li><a class="next" href="#"><i class="fal fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
