<div class="col-lg-6">
    <div class="post_form mt-50">
        <div class="post_title">
            <h5 class="title">Ad Categories</h5>
        </div>
        @if ($success_message)
            @livewire('success-message',['success_message' => $success_message]) 
        @endif

        <form wire:submit.prevent='postAd'>

            {{-- Catgories --}}
            <div class="single_form">
                <select wire:model="selectedCategory" class="form-control">
                    <option value="" selected>Choose category*</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
                @error('selectedCategory')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message}} </strong>
                </span>
                @enderror
            </div>

            {{-- SubCatgroies --}}
            @if (!is_null($selectedCategory))
                <div class="single_form">
                    <select wire:model="selectedSubCategory" class="form-control">
                        <option value="none">Choose SubCategory*</option>
                        @foreach ($subCategories as $subCategory)
                            <option value="{{ $subCategory->id }}">{{ $subCategory->sub_category_name }}</option>
                        @endforeach

                    </select>
                    @error('selectedSubCategory')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message}} </strong>
                        </span>
                    @enderror
                </div>
            @endif

            {{-- ChildCategories --}}
            @if ($showChildCategory)
                @if (!is_null($selectedSubCategory))
               
                    <div class="single_form">
                        <option value="none">Choose Child Catgeory</option>
                        <select wire:model="selectedChildCategory" class="form-control">
                            @foreach ($childCategories as $childCategory)
                                <option value="{{ $childCategory->id }}">{{ $childCategory->child_category_name }}
                                </option>
                            @endforeach
                        </select>
                        @error('selectedChildCategory')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message}} </strong>
                        </span>
                    @enderror
                    </div>
                @endif
                
            @endif


            {{-- *******************************************************************************************  --}}
                {{-- Advertissement location details --}}
            <div class="post_title">
                <h5 class="title">Ad Locations</h5>
            </div>

            {{-- Countries --}}
            <div class="single_form">
                <select wire:model="selectedCountry" class="form-control">
                    <option value="" selected>Choose country*</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
                @error('selectedCountry')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message}} </strong>
                    </span>
                @enderror
            </div>

            {{-- states --}}
            @if (!is_null($selectedCountry))
                <div class="single_form">
                    <select wire:model="selectedState" class="form-control">
                        <option value="none">Choose state*</option>
                        @foreach ($states as $state)
                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach

                    </select>
                    @error('selectedState')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message}} </strong>
                        </span>
                    @enderror
                </div>
            @endif

            {{-- cities --}}
            @if (!is_null($selectedState))
                <div class="single_form">

                    <select wire:model="selectedCity" class="form-control">
                        <option value="none">Choose city</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                    @error('selectedCity')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message}} </strong>
                        </span>
                    @enderror
                </div>
            @endif

              

        {{-- *******************************************************************************************  --}}
            {{-- Advertissement  details --}}
            <div class="post_title">
                <h5 class="title">Ad Details</h5>
                <div class="single_form form-row">
                    <div class="form-group col-md-6">
                        <label for="title">Title*</label>
                        <input type="text" 
                                class="form-control"
                                id="title"
                                wire:model='title' >
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message}} </strong>
                                </span>
                            @enderror
                    </div>
                   
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Choose currency*</label>
                        <select wire:model='currency' class="form-control">
                            <option value="" >choose</option>
                            <option value="Euro">Euro</option>
                            <option value="Dollar" >US Dollar</option>
                            <option value="FCFA" >Franc CFA</option>
                        </select>
                        @error('currency')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message}} </strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="price">Price*</label>
                        <input type="text"
                                class="form-control" 
                                id="price"
                                wire:model='price'>
                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message}} </strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Fixed/Negociable price</label>
                        <select wire:model='isNegotiable' class="form-control">
                            <option value="">choose</option>
                            <option vbalue="fixed" >Fixed</option>
                            <option value="negotiable" >Negotiable</option>
                        </select>
                    </div>
                

                </div>
            </div>

                    
            {{-- *******************************************************************************************  --}}
            {{-- Cars  details --}}
            @if ($cars)
                <div class="post_title">
                    <h5 class="title">Cars</h5>
                    <div class="single_form form-row">
                    
                        <div class="form-group col-md-6">
                            <label for="fuel">Fuel Type</label>
                            <select wire:model='fuel' class="form-control">
                                <option value="" >choose</option>
                                <option value="Petrol" >Petrol</option>
                                <option value="Diesel" >Diesel</option>
                                <option value="Essence" >Essence</option>
                                <option value="Hybrid" >Hybrid</option>
                                <option value="Electric" >Electric</option>
                                <option value="Gas" >Gas</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="year">Year</label>
                            <input type="text" 
                                    class="form-control"
                                    id="year"
                                    wire:model='year'>
                        </div>
                    
                        <div class="form-group col-md-6">
                            <label for="transmission">Transmission</label>
                            <select wire:model='transmission' class="form-control">
                                <option value="">choose</option>
                                <option value="automatic">Automatic</option>
                                <option value="manual">manual</option>
                                <option value="semi-auto">semi-auto</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6 ">
                            <label for="kilometre">KM Driven</label>
                            <input type="text" 
                                    class="form-control"
                                    id="kilometre"
                                    wire:model='kilometer'>
                        </div>
                    
                    </div>
                </div> 
            @endif



            {{-- *******************************************************************************************  --}}
            {{-- Mobile  details --}}

            {{-- <div class="post_title">
                <h5 class="title">Mobile</h5>
                <div class="single_form form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Choose Brand</label>
                        <select class="form-control">
                            <option>XOF</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Title</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                </div>
            </div> --}}

            {{-- *******************************************************************************************  --}}
                {{-- Tablets  details --}}
            {{-- <div class="post_title">
                <h5 class="title">Tablets</h5>
                <div class="single_form form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Choose Brand</label>
                        <select class="form-control">
                            <option>XOF</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Title</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                </div>
            </div> --}}


            {{-- *******************************************************************************************  --}}
            {{-- Accesoories  details --}}
            {{-- <div class="post_title">
                <h5 class="title">Accessories</h5>
                <div class="single_form form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Accessory For</label>
                        <select class="form-control">
                            <option>XOF</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Title</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                </div>
            </div> --}}
             {{-- *******************************************************************************************  --}}
              {{-- Vehicle  details --}}
                @if ($motorcycles)
                    <div class="post_title">
                        <h5 class="title">Vehicle</h5>
                        <div class="single_form form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Choose Brand</label>
                                <select class="form-control">
                                    <option>XOF</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Year</label>
                                <input type="text" class="form-control" id="inputEmail4">
                            </div>
                        
                            <div class="form-group col-md-6 ">
                                <label for="inputEmail4">KM Driven</label>
                                <input type="text" class="form-control" id="inputEmail4">
                            </div>
        
                            <div class="form-group col-md-6 ">
                                <label for="inputEmail4">Vehicle Condition</label>
                                <select class="form-control">
                                    <option>XOF</option>
                                </select>
                            </div>
                        
                        </div>
                    </div>
                @endif
             

            {{-- *******************************************************************************************  --}}
            {{-- Properties House For Rent/Sales --}}
            @if ($houses)
                <div class="post_title">
                    <h5 class="title">Properties</h5>
                    <div class="single_form form-row">
                                             
                        <div class="form-group col-md-6">
                        <label for="inputEmail4">Furnishing</label>
                        <select wire:model='furnishing' class="form-control">
                            <option value="">choose</option>
                            <option value="furnished">Furnished</option>
                            <option value="semi-furnished">Semi-Furnished</option>
                            <option value="unfurnished">Unfurnished</option>
                        </select>
                        @error('furnishing')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message}} </strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Number of Bedroom</label>
                        <select wire:model='bedroom' class="form-control">
                            <option value="" >choose</option>
                            <option value="0">0</option>
                            <option value="1" >1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6+">6+</option>
                        </select>
                        @error('bedroom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message}} </strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Number of Bathroom</label>
                        <select wire:model='bathroom' class="form-control">
                            <option value="" >choose</option>
                            <option value="0">0</option>
                            <option value="1" >1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6+">6+</option>
                        </select>
                        @error('bathroom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message}} </strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Construct Status</label>
                        <select wire:model='status' class="form-control">
                            <option value="" >choose</option>
                            <option value="New Launch" >New Launch</option>
                            <option value="Ready To Mov">Ready To Move</option>
                            <option value="Under Construction">Under Construction</option>
                        </select>
                        @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message}} </strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Posted By</label>
                        <select wire:model='postedBy' class="form-control">
                            <option value="" >choose</option>
                            <option value="Builder" >Builder</option>
                            <option value="Owner">Owner</option>
                            <option value="Dealer">Dealer</option>
                        </select>
                        @error('postedBy')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message}} </strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Number Of Parking</label>
                        <select wire:model='parking' class="form-control">
                            <option value="">choose</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        @error('parking')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message}} </strong>
                        </span>
                        @enderror
                    </div>
                    
                    </div>
                </div>
            @endif
          

            {{-- *******************************************************************************************  --}}
            {{-- Office, Shop For Rent/Sales --}}
            @if ($offices)
                <div class="post_title">
                    <h5 class="title">Offices|Shops</h5>
                    <div class="single_form form-row">
                    
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Furnishing</label>
                            <select wire:model='furnishing' class="form-control">
                                <option value="">choose</option>
                                <option value="furnished">Furnished</option>
                                <option value="semi-furnished">Semi-Furnished</option>
                                <option value="unfurnished">Unfurnished</option>
                            </select>
                    </div>
                
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Number of Bathroom</label>
                        <select wire:model='bathroom' class="form-control">
                            <option value="" >choose</option>
                            <option value="0">0</option>
                            <option value="1" >1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6+">6+</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <select wire:model='status' class="form-control">
                            <option value="" >choose</option>
                            <option value="New Launch" >New Launch</option>
                            <option value="Ready To Mov">Ready To Move</option>
                            <option value="Under Construction">Under Construction</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Posted By</label>
                        <select wire:model='postedBy' class="form-control">
                            <option value="" >choose</option>
                            <option value="Builder" >Builder</option>
                            <option value="Owner">Owner</option>
                            <option value="Dealer">Dealer</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Number Of Parking</label>
                        <select wire:model='parking' class="form-control">
                            <option value="">choose</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Lenght</label>
                        <input type="text" class="form-control" id="inputEmail4">
                    </div>
                    
                    </div>
                </div>
            @endif
            


          {{-- *******************************************************************************************  --}}
          {{-- Land/Plot For Rent/Sales --}}
          @if ($lands_plots)
            <div class="post_title">
            <h5 class="title">Land|Plot</h5>
            <div class="single_form form-row">
               
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Posted By</label>
                    <select wire:model='postedBy' class="form-control">
                        <option value="" >choose</option>
                        <option value="Owner">Owner</option>
                        <option value="Dealer">Dealer</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="length">Lenght</label>
                  <input type="text"
                            class="form-control"
                            id="length"
                            wire:model='length'>
              </div>
            </div>
            </div>
          @endif


                {{-- *******************************************************************************************  --}}
            {{-- Job --}}
            @if ($jobs_training)
                <div class="post_title">
                    <h5 class="title">Jobs|Training</h5>
                    <div class="single_form form-row">
                    
                        <div class="form-group col-md-6">
                        <label for="inputEmail4">Salary Period</label>
                        <select class="form-control">
                            <option>Choose</option>
                            <option>Hourly</option>
                            <option>Weekly</option>
                            <option>Monthly</option>
                            <option>Yearly</option>
                        </select>
                    </div>
                
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Job Type</label>
                        <select class="form-control">
                            <option>Choose</option>
                            <option>Contract</option>
                            <option>FullTime</option>
                            <option>PartTime</option>
                            <option>Temporary</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Salary From</label>
                        <input type="text" class="form-control" id="inputEmail4">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Salary To</label>
                        <input type="text" class="form-control" id="inputEmail4">
                    </div>
                    
                    </div>
                </div>
            @endif
            

        

            <!-- Default description for all the categories -->
            <div class="form-group ">
                <label for="description">Description*</label>
                <textarea class="form-control" id="description" rows="4" wire:model='description'></textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message}} </strong>
                    </span>
                @enderror
            </div>

           
            <div class="image-upload col-md-12 col-sm-12">
              
                <label for="file-input0">
                    @if ($photo0)
                    
                        <img src="{{ $photo0->temporaryUrl() }}">
                        <span>
                            <a type="button" wire:click.prevent='removePhoto("photo0")'>
                                <i class="fas fa-window-close"></i>
                            </a> 
                        </span>
                    @else
                        <img src="{{ asset('assets/img/upload.jpg') }} " />
                       
                    @endif
                </label>
               
                

                <label for="file-input1">
                    @if ($photo1)
                    
                        <img src="{{ $photo1->temporaryUrl() }}">
                        <span>
                            <a type="button" wire:click.prevent='removePhoto("photo1")'>
                                <i class="fas fa-window-close"></i>
                            </a> 
                        </span>
                    @else
                        <img src="{{ asset('assets/img/upload.jpg') }} " />
                       
                    @endif
                </label>

                <label for="file-input2">
                    @if ($photo2)
                    
                        <img src="{{ $photo2->temporaryUrl() }}">
                        <span>
                            <a type="button" wire:click.prevent='removePhoto("photo2")'>
                                <i class="fas fa-window-close"></i>
                            </a> 
                        </span>
                    @else
                        <img src="{{ asset('assets/img/upload.jpg') }} " />
                       
                    @endif
                </label>

                <label for="file-input3">
                    @if ($photo3)
                    
                        <img src="{{ $photo3->temporaryUrl() }}">
                        <span>
                            <a type="button" wire:click.prevent='removePhoto("photo3")'>
                                <i class="fas fa-window-close"></i>
                            </a> 
                        </span>
                    @else
                        <img src="{{ asset('assets/img/upload.jpg') }} " />
                       
                    @endif
                </label>

                <label for="file-input4">
                    @if ($photo4)
                    
                        <img src="{{ $photo4->temporaryUrl() }}">
                        <span>
                            <a type="button" wire:click.prevent='removePhoto("photo4")'>
                                <i class="fas fa-window-close"></i>
                            </a> 
                        </span>
                    @else
                        <img src="{{ asset('assets/img/upload.jpg') }} " />
                       
                    @endif
                </label>

                <label for="file-input5">
                    @if ($photo5)
                    
                        <img src="{{ $photo5->temporaryUrl() }}">
                        <span>
                            <a type="button" wire:click.prevent='removePhoto("photo5")'>
                                <i class="fas fa-window-close"></i>
                            </a> 
                        </span>
                    @else
                        <img src="{{ asset('assets/img/upload.jpg') }} " />
                       
                    @endif
                </label>

                @error('photo0')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message}} </strong>
                </span>
                @enderror

                
                <input id="file-input0" type="file" accept=".jpg, .jpeg"  wire:model="photo0"/>
                <input id="file-input1" type="file" accept=".jpg, .jpeg" wire:model="photo1"/>
                <input id="file-input2" type="file" accept=".jpg, .jpeg" wire:model="photo2"/>
                <input id="file-input3" type="file" accept=".jpg, .jpeg" wire:model="photo3"/>
                <input id="file-input4" type="file" accept=".jpg, .jpeg" wire:model="photo4"/>
                <input id="file-input5" type="file" accept=".jpg, .jpeg" wire:model="photo5"/>
                
              
            </div>
           
            <button type="submit" class="btn btn-block btn-primary">submit</button>
        </form>

    </div>


</div>
