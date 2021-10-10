<div class="col-md-8 grid-margin stretch-card ">
    <div class="card">
        <div class="card-body">
            <h6 class="card-title">{{__('Add New Category')}}</h6>
            @if ($success_message)
                @livewire('success-message', ['success_message' => $success_message])
            @endif
            <form wire:ignore.self class="forms-sample" wire:submit.prevent='store'>
                <div class="form-group row" enctype="multipart/form-data" >
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">{{__('Category Name')}}</label>
                    <div class="col-sm-9">
                        <input type="text" name="categoryName" 
                                class="form-control @error('categoryName') is-invalid @enderror" 
                                            placeholder="Category Name"
                                            wire:model='categoryName'
                                           
                                            >

                            @error('categoryName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                    
                </div>
                <div class="form-group row ">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">{{__('Class Name')}} </label>
                    <div class="col-sm-9">
                        <input type="text" name="class" 
                        class="form-control @error('class') is-invalid @enderror" 
                                    placeholder="Class Name"
                                    wire:model='class'
                                   
                                    >

                    @error('class')
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
