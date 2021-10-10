<div class="col-lg-9">
    <div class="post_form mt-50">
        <div class="post_title">
            <h5 class="title">Profile Settings</h5>
        </div>
        @if ($success_message)
            @livewire('success-message',['success_message' => $success_message]) 
        @endif
        <form wire:submit.prevent='updateProfile'>
            <div class="row">
                <div class="col-md-6">
                    <div class="single_form">
                        <input type="text" 
                                placeholder="Username"
                                wire:model='username'>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}} </strong>
                                    </span>
                                @enderror
                                
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="single_form">
                        <input type="email" 
                                placeholder="E-mail Address"
                                wire:model='email'>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}} </strong>
                                    </span>
                                @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single_form">
                        <input type="text" 
                                placeholder="Phone Number"
                                wire:model='phone'>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}} </strong>
                                    </span>
                                @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single_form">
                        <input type="password" 
                                placeholder="Current Password"
                                wire:model='current_password'>
                                @error('current_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}} </strong>
                                    </span>
                                @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single_form">
                        <input type="password" 
                                placeholder="New Password"
                                wire:model='new_password'>
                                @error('new_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}} </strong>
                                    </span>
                                @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single_form">
                        <input type="password" 
                                placeholder="Confirm Password"
                                wire:model='confirm_password'>
                                @error('confirm_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}} </strong>
                                    </span>
                                @enderror 
                    </div>
                </div>
                <div class="image-upload col-md-12 col-sm-12">
              
                    <label for="file-input0">
                        @if ($photo)
                        
                            <img src="{{ $photo->temporaryUrl() }}">
                            <span>
                                <a type="button" wire:click.prevent='removePhoto("photo")'>
                                    <i class="fas fa-window-close"></i>
                                </a> 
                            </span>
                        @else
                            <img src="{{ asset('assets/img/upload.jpg') }} " />
                           
                        @endif
                    </label>
                    <input id="file-input0" type="file" accept=".jpg, .jpeg"  wire:model="photo"/>
                </div>
                <div class="col-md-6">
                    <div class="single_form">
                        <input type="checkbox" name="checkbox" id="checkbox">
                        <label for="checkbox"></label>
                        <span>Subscribe me to Newsletter</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single_form">
                        <button class="main-btn">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
