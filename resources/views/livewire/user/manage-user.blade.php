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
                                <th>{{__('Avatar')}} </th>
                                <th>{{__('user-name')}} </th>
                                <th>{{__('address')}} </th>
                                <th>{{__('isAdmin')}} </th>
                                <th>{{__('user type')}} </th>
                                <th>{{__('joined date')}} </th>
                                <th>{{__('Action')}} </th>
                                
                            </tr>
                        </thead>
                        <tbody>
                           
                                <tr>
                                    <td class="py-1">
                                        <img src=" " alt="image">
                                    </td>
                                    <td></td>
                                    <td> </td>
                                    <td></td>
                                    <td> </td>
                                    <td></td>
                                  
                                    <td>
                                      <button  class="btn btn-success"  >{{__('Verified')}} </button>
                                    <button  class="btn btn-warning"  >{{__('Block')}} </button>
                                    <button  class="btn btn-danger">{{__('Delete')}} </button>
                                    </td>
                                
                                </tr>
                                
                           
                        
                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" >
   
  </button>
  <!-- Modal -->
  <div class="modal fade" id="editCatgeory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h4></h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
