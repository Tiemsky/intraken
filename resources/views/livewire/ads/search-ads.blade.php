<div class="product_page pt-70 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="product_sidebar pt-20">
                    <div class="sidebar_categories mt-30">
                        <div class="sidebar_title">
                            <h5 class="title large_device">Categories</h5>
                             <!-- Button trigger modal -->
                                <h5 class="title small_device" >
                                    <a type="button" data-toggle="modal" data-target="#exampleModal">
                                        Show Categories
                                    </a>
                                </h5>
                        </div>

                     <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title sidebar_categories" id="exampleModalLabel">
                                <div class="sidebar_title">
                                    <h5 class="title">Categories</h5>
                                </div>
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <div class="modal-body">
                                    <div class="sidebar_categories">
                                        <div class="sidebar_categories_content">
                                            @foreach ($categories as $category)
                                                <div class="accordion" id="<?=str_replace('-','_',$category->slug);?>">
                                                        <div class="card">
                                                            <div class="card-header" id="headingOne">
                                                                <a href="" data-toggle="collapse" data-target="#collapseOne_<?=str_replace('-','_',$category->slug);?>"
                                                                    aria-expanded="true" aria-controls="collapseOne_<?=str_replace('-','_',$category->slug);?>">
                                                                        {{$category->category_name}} ({{count($category->ads)}})
                                                                </a>
                                                            </div>
                                                            <div id="collapseOne_<?=str_replace('-','_',$category->slug);?>" class="collapse" aria-labelledby="headingOne"
                                                                data-parent="#<?=str_replace('-','_',$category->slug);?>">
                                                                <div class="card-body">
                                                                    <ul class="sidebar_categories_list">
                                                                        @foreach ($category->subCategories as $subCategoryItem)
                                                                        <li><a href="{{route('ad.showBySubCategories',[app()->getLocale(),$category->slug, $subCategoryItem->slug])}}">{{$subCategoryItem->sub_category_name}}</a></li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>


                    <div class="sidebar_categories_content large_device">
                        @foreach ($categories as $category)
                        <div class="accordion" id="<?=str_replace('-','_',$category->slug);?>">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <a href="" data-toggle="collapse" data-target="#collapseOne_<?=str_replace('-','_',$category->slug);?>"
                                            aria-expanded="true" aria-controls="collapseOne_<?=str_replace('-','_',$category->slug);?>">
                                                {{$category->category_name}} ({{count($category->ads)}})
                                        </a>
                                    </div>
                                    <div id="collapseOne_<?=str_replace('-','_',$category->slug);?>" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#<?=str_replace('-','_',$category->slug);?>">
                                        <div class="card-body">
                                            <ul class="sidebar_categories_list">
                                                @foreach ($category->subCategories as $subCategoryItem)
                                                <li><a href="{{route('ad.showBySubCategories',[app()->getLocale(),$category->slug, $subCategoryItem->slug])}}">{{$subCategoryItem->sub_category_name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        @endforeach
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
                            @forelse ($ads as $ad)
                                <div class="col-xl-4 col-sm-6">
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
                                                <p>{{$ad->category->category_name}}</p>
                                                @livewire('ads.like',    ['ad_id' => $ad->id])                                            </div>
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
                                                    {{ $ad->currency == 'Dollar' ? '$' : ($ad->currency == 'Euro' ? '???' : 'FCFA') }}
                                                </span>
                                                <span class="date">{{$ad->created_at->diffForHumans()}} </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                @empty
                                    <p>Not found</p>
                            @endforelse
                     
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                        <div class="product_list">
                            @foreach ($ads as $ad)
                                <div class="single_ads_card ads_list d-sm-flex mt-30">
                                    <div class="ads_card_image">
                                        <img src="{{ asset('assets/images/ads-1.png') }}" alt="ads">
                                    </div>
                                    <div class="ads_card_content media-body">
                                        <div class="meta d-flex justify-content-between">
                                            <p>{{$ad->category->category_name}} </p>
                                            @livewire('ads.like',    ['ad_id' => $ad->id])                                        </div>
                                        <h4 class="title">
                                            <a href="#">
                                                {{$ad->title}}
                                            </a>
                                        </h4>
                                        <p><i class="far fa-map-marker-alt"></i>
                                            {{$ad->city->name}},
                                            {{$ad->state->name}} - 
                                            {{$ad->country->name}}
                                        </p>
                                        <p>{{$ad->description}} </p>
                                        <div class="ads_price_date d-flex justify-content-between">
                                            <span class="price">
                                                {{$ad->price}} 
                                                {{ $ad->currency == 'Dollar' ? '$' : ($ad->currency == 'Euro' ? '???' : 'FCFA') }}
                                            </span>
                                            <span class="date">{{$ad->created_at->diffForHumans()}} </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
</div>
