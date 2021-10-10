@extends('layouts.app')
@section('content')
    <section class="categories_page pt-70 pb-120">
        <div class="container">
            <div class="categories_top_bar d-flex align-items-center justify-content-between pb-30">
                <div class="categories_story mt-50">
                  
                </div>
                <div class="categories_tab_menu mt-50">
                    <ul class="nav" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="active" id="grid-tab" data-toggle="tab" href="#grid" role="tab" aria-controls="grid"
                                aria-selected="true">
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
                    <div class="row">
                      @foreach ($categories as $category)
                        <div class="col-lg-3 col-6">
                            <div class="single_categories text-center mt-30">
                                <div class="categories_icon">
                                    {{-- <i class="fal fa-gem"></i> --}}
                                    <i class="{{$category->class}}"></i>
                                </div>
                                <div class="categories_content">
                                    <h5 class="title">{{$category->category_name}} </h5>
                                    <p>{{count($category->ads)}} </p>
                                </div>
                                <a href="{{route('showByCategory',[app()->getLocale(), $category->slug])}} "></a>
                            </div>
                        </div>
                      @endforeach


                    </div>
                </div>
                <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                    <div class="categories_list">
                       @foreach ($categories as $category)
                       <div class="single_list mt-30">
                        <div class="list_title_icon d-flex align-items-center">
                            <div class="icon">
                                <img src="{{ asset('assets/images/categories_icon/categories-1.svg') }}" alt="Icon">
                            </div>
                            <div class="list_title media-body">
                                <h5 class="title">{{$category->category_name}} </h5>
                            </div>
                        </div>
                        <div class="categories_list_wrapper">
                            <div class="row">
                                @foreach ($category->subCategories as $item)
                                <div class="col-lg-3 col-sm-6">
                                    <ul class="list">
                                        <li><a href=""> {{$item->sub_category_name}} </a></li>
                                    </ul>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                       @endforeach
                      
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
