<div class="col-md-8 grid-margin stretch-card ">
    <div class="card">
        <div class="card-body">
            <h6 class="card-title">{{__('Add New User')}}</h6>
            @if ($success_message)
                @livewire('success-message', ['success_message' => $success_message])
            @endif
            <form  class="forms-sample" wire:submit.prevent='store'>
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">{{__('Username')}}</label>
                    <div class="col-sm-9">
                        <input type="text" name="username" 
                                class="form-control @error('username') is-invalid @enderror" 
                                            placeholder="User Name"
                                            wire:model='username'
                                           
                                            >

                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">{{__('E-Mail Address')}}</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                            placeholder="{{__('E-Mail Address')}} "
                                            wire:model='email'
                                           
                                            >

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">{{__('Password')}}</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" 
                                class="form-control @error('password') is-invalid @enderror" 
                                            placeholder="{{__('Password')}} "
                                            wire:model='password'
                                           
                                            >

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                </div>


                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">{{__('Role')}}</label>
                    <div class="col-sm-9">
                        <div class="form-group">
                            <select class="js-example-basic-single w-100" data-width="100%">
                                <option value="admin">{{__('Admin')}} </option>
                                <option value="user">{{__('User')}} </option>
                            
                            </select>
                        </div>
                       

                            @error('role')
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
