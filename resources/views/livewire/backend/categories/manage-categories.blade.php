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
                                <th>{{__('Class')}} </th>
                                <th>{{__('categories-name')}} </th>
                                <th>{{__('Last edited')}} </th>
                                <th>{{__('Action')}} </th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key=>$category)
                            
                                <tr>
                                    <td>{{++$key}} </td>
                                    <td>{{$category->class}} </td>
                                    <td>{{$category->category_name}} </td>
                                    <td>{{$category->updated_at->diffForHumans()}}  </td>
                                    <td>
                                    <button  wire:click.prevent='editCategory({{$category->id}} )' data-toggle="modal" data-target="#exampleModal" class="btn btn-info" >{{__('edit')}} </button>
                                    <button wire:click.prevent='deleteCategory({{$category->id}} )' class="btn btn-danger">{{__('Delete')}} </button>
                                    </td>
                                
                                </tr>
                                
                            @endforeach
                        
                         
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end">
                    {{$categories->links('pagination::bootstrap-4')}}
                </div>
               
            </div>
            
        </div>
    </div>


    <!-- Button trigger modal -->
<!-- Modal -->
    <div wire:ignore.self  class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form wire:submit.prevent='update' class="forms-sample" enctype="multipart/form-data"  >
            <input type="hidden" name="category_id" wire:model.defer='category_id'>
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
                                    <h6 class="card-title">{{__('Edit Category')}}</h6>
                                        <div class="form-group row" >
                                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">{{__('Category Name')}}</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="categoryName" 
                                                        class="form-control @error('categoryName') is-invalid @enderror" 
                                                                    placeholder="Category Name"
                                                                    wire:model.defer='categoryName'
                                                                    
                                                                    >
                        
                                                    @error('categoryName')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                            </div>
                                            
                                        </div>

                                        <div class="form-group row" >
                                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">{{__('Class Name')}}</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="class" 
                                                        class="form-control @error('class') is-invalid @enderror" 
                                                                    placeholder="Class Name"
                                                                    wire:model.defer='class'
                                                                    
                                                                    >
                        
                                                    @error('class')
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
      
        








