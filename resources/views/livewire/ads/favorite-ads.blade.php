<div class="col-lg-9">
    <div class="my_ads mt-50">
        <div class="post_title">
            <h5 class="title">{{__('My Favourite Ads')}}</h5>
        </div>
       
        <div class="ads_table table-responsive mt-30">
            <table class="table">
                <thead>
                    <tr>
                       
                        <th class="photo">Photo</th>
                        <th class="title">Title</th>
                        <th class="category">Category</th>
                        <th class="status">Ad Status</th>
                        <th class="price">Price</th>
                        <th class="action">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ads as $ad)
                        <tr>
                            
                            <td class="photo">
                                <div class="table_photo">
                                    
                                        <img src="{{ asset('storage/advertisement/' . $ad->image->photo0) }} " alt="ads">
                                   
                                </div>
                            </td>
                            <td class="title">
                                <div class="table_title">
                                    <h6 class="titles">{{ $ad->title }} </h6>
                                    <p>Ad ID: ng3D5hAMHPajQrM</p>
                                </div>
                            </td>
                            <td class="category">
                                <div class="table_category">
                                    <p>{{ $ad->category->category_name }} </p>
                                </div>
                            </td>
                            <td class="status">
                                <div class="table_status">
                                    <span class="active">active</span>
                                </div>
                            </td>
                            <td class="price">
                                <div class="table_price">
                                    <span>{{ $ad->price }}
                                        {{ $ad->currency == 'Dollar' ? '$' : ($ad->currency == 'Euro' ? '€' : 'FCFA') }}
                                    </span>
                                </div>
                            </td>
                            <td class="action">
                                <div class="table_action">
                                    <ul>
                                        <li>
                                            <a href="{{route('ad.show',[app()->getLocale(), $ad->slug])}} ">
                                                <i class="fal fa-eye"></i>
                                            </a>
                                        </li>
                                       
                                        <li>
                                            <a type="button" wire:click="deleteId({{ $ad->id }})" data-toggle="modal" data-target="#exampleModal">
                                                <i class="fal fa-trash-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>


                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                    <button type="button" wire:click.prevent="deleteFavoriteAd()" class="btn btn-danger close-modal"
                        data-dismiss="modal">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>

</div>
