<div class="col-lg-9">
    <div class="privacy_setting_content mt-50">
        <div class="post_title">
            <h5 class="title">{{__('Privacy Setting')}}</h5>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="privacy_list mt-30">
                    <div class="privacy_title">
                        <h5 class="title">{{__('Privacy Setting')}}</h5>
                    </div>
                    <div class="privacy_list_wrapper">
                        <ul>
                            <li>
                                <div class="single_privacy_list">
                                    <div class="list_checkbox">
                                        <input type="checkbox" checked="" name="radio" id="photo">
                                        <label for="photo"></label>
                                    </div>
                                    <div class="list_content">
                                        <p>{{__('Make my profile photo public')}}</p>
                                    </div>
                                </div>
                            </li>
                        
                        
                            <li>
                                <div class="single_privacy_list">
                                    <div class="list_checkbox">
                                        <input type="checkbox" checked="" name="radio" id="alert">
                                        <label for="alert"></label>
                                    </div>
                                    <div class="list_content">
                                        <p>{{__('I want to receive e-mail alerts about new listings')}}</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single_privacy_list">
                                    <div class="list_checkbox">
                                        <input type="checkbox" checked="" name="radio" id="message">
                                        <label for="message"></label>
                                    </div>
                                    <div class="list_content">
                                        <p>{{__('Enable offers/messages option in all my ads Post')}}</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="main-btn">Update</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="privacy_account_delete mt-30">
                    <div class="privacy_title">
                        <h5 class="title">{{__('Delete Account')}}</h5>
                    </div>
                    <div class="account_delete">
                        <form wire:submit.prevent='deleteAccount'>
                            <div class="single_form ">
                                <select wire:model='reason' class="form-control">
                                    <option value="">Select Country</option>
                                    <option value="1">Country 1</option>
                                    <option value="2">Country 2</option>
                                   
                                </select>
                            </div>
                            @if ($other_reason)
                                <div class="single_form">
                                    <textarea placeholder="Description"></textarea>
                                </div>
                            @endif
                            
                            <div class="single_form">
                                <button type="submit" class="main-btn">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
