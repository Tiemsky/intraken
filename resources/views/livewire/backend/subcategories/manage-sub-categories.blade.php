<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"> {{__('Manage categories')}}</h4>
                <p class="card-description">
                    {{__('Manage categories')}}
                   @if ($success_message)
                     @livewire('success-message', ['success_message' => $success_message])
                   @endif
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>{{__('SNO')}} </th>
                                <th>{{__('categories-name')}} </th>
                                <th>{{__('subcategory-name')}} </th>
                                <th>{{__('Last edited')}} </th>
                                <th>{{__('Action')}} </th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($subCategories as $key=>$subCategory)
                            
                                <tr>
                                    <td>{{++$key}} </td>
                                    <td>{{$subCategory->category->category_name}} </td>
                                    <td>{{$subCategory->sub_category_name}} </td>
                                    <td>{{$subCategory->updated_at->diffForHumans()}}  </td>
                                    <td>
                                    <button  wire:click.prevent='editSubCategory({{$subCategory->id}} )' data-toggle="modal" data-target="#exampleModal" class="btn btn-info" >{{__('edit')}} </button>
                                    <button wire:click.prevent='deleteSubCategory({{$subCategory->id}} )' class="btn btn-danger">{{__('Delete')}} </button>
                                    </td>
                                
                                </tr>
                                @empty
                                <tr>
                                    <td></td>
                                    <td>{{__('No data ')}} </td>
                                    <td></td>
                                </tr>
                               
                                
                            @endforelse
                        
                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- Button trigger modal -->
<!-- Modal -->
    <div wire:ignore.self  class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form wire:submit.prevent='update' class="forms-sample" enctype="multipart/form-data"  >
            <input type="hidden" name="subCategory_id" wire:model.defer='subCategory_id'>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{__('Editing')}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12 grid-margin stretch-card ">
                            <div class="card">
                        
                                <div class="card-body">
                                    <h6 class="card-title">{{__('Edit subCategory')}}</h6>

                                    <div class="form-group row ">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">{{__('Category')}} </label>
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                              
                                                <select wire:model.defer='category_id'class="js-example-basic-single w-100" data-width="100%">
                                                 
                                                    @foreach($categories as $category)
                                                    <option   value="{{$category->id}}" {{$subCategory->category_id == $category->id ? 'selected' : ''}} >{{$category->category_name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                                                        
                                        </div>
                                    </div>

                                        <div class="form-group row" >
                                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">{{__('subCategory')}}</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="subCategoryName" 
                                                        class="form-control @error('subCategoryName') is-invalid @enderror" 
                                                                    placeholder="subCategory Name"
                                                                    wire:model.defer='subCategoryName'
                                                                    
                                                                    >
                        
                                                    @error('subCategoryName')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                            </div>
                                            
                                        </div>
                                    
                                </div>
                        
                                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('Cancel')}} </button>
                                    <input type="submit" class="btn btn-primary mr-2" value=" {{__('Save changes')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </form>
    </div>

    
</div>

<script>

  window.addEventListener('closeModal', event => {
    $('#exampleModal').modal('hide');
})
</script>
      
        








