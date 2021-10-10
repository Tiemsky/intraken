<div class="col-md-8 grid-margin stretch-card ">
    <div class="card">
        <div class="card-body">
            <h6 class="card-title">{{__('Add Child Category')}}</h6>
            @if ($success_message)
                @livewire('success-message', ['success_message' => $success_message])
            @endif
            <form wire:ignore.self class="forms-sample" wire:submit.prevent='store'>
                <div class="form-group row" enctype="multipart/form-data" >
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">{{__('Sub Category Name')}}</label>
                    <div class="col-sm-9">
                        <div class="form-group">
                            <select class="js-example-basic-single w-100" data-width="100%"
                                wire:model.defer='subCategory'>
                                <option value="" >{{__('Choose Sub Category') }} </option>
                                @foreach ($subCategories as $subCategory)
                                    <option value="{{$subCategory->id}}" >{{$subCategory->sub_category_name}} </option>
                                @endforeach
                            
                            </select>
                        </div>

                            @error('subCategory')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                    
                </div>
                <div class="form-group row ">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">{{__('Child Category')}} </label>
                    <div class="col-sm-9">
                        <input type="text" name="childCategoryName" 
                        class="form-control @error('childCategoryName') is-invalid @enderror" 
                                    placeholder="Child Category Name"
                                    wire:model='childCategoryName'
                                   
                                    >

                                    @error('childCategoryName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    
                    </div>
                </div>
                <input type="submit" class="btn btn-primary mr-2" value="Submit" >
            </form>
        </div>
    </div>
</div>
