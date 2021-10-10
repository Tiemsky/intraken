<div class="col-lg-9">
    <div class="my_ads mt-50">
        <div class="post_title">
            <h5 class="title">My Ads</h5>
        </div>
        <div class="my_ads_menu">
            <ul class="ads_menu">
                <li><a class="active" type="button" wire:click=''>All Ads (42)</a></li>
                <li><a type="button" wire:click=''>Published (88)</a></li>
                <li><a type="button" wire:click=''>Featured (12)</a></li>
                <li><a type="button" wire:click=''>Sold (02)</a></li>
                <li><a type="button" wire:click=''>Expired (01)</a></li>
            </ul>
        </div>
        <div class="ads_table table-responsive mt-30">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th class="photo">Photo</th>
                        <th class="title">Title</th>
                        <th class="price">Price</th>
                        <th class="status">Status</th>
                        <th class="action">Action</th>
                        <th class="action">Sold</th>
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
                                    <p>Posted : {{$ad->created_at->diffForHumans()}} </p>
                                </div>
                            </td>
                           
                          
                            <td class="price">
                                <div class="table_price">
                                    <span>{{ $ad->price }}
                                        {{ $ad->currency == 'Dollar' ? '$' : ($ad->currency == 'Euro' ? '€' : 'FCFA') }}
                                    </span>
                                </div>
                            </td>
                            <td class="status">
                                <div class="table_status">
                                    <p>{{ $ad->category->category_name }} </p>
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
                                            <a href="{{route('ad.edit',[app()->getLocale(), $ad->id])}} ">
                                                <i class="fal fa-pencil"></i>
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
                            <td class="action">
                                <div class="table_action">
                                    <ul>
                                        @if ($this->adStatus($ad->id) == 1)
                                            <li>
                                                <a type="button" wire:click="soldAd({{ $ad->id }})">
                                                    <i class="fas fa-badge-check"></i>
                                                </a>
                                            </li>
                                            @elseif($this->adStatus($ad->id) == 2)
                                            <li>
                                                {{-- <a type="button" class="btn btn-success" wire:click="reactivate({{ $ad->id }})">
                                                    Reactivate
                                                </a> --}}
                                                <label class="switch">
                                                    <input type="checkbox" data-toggle="tooltip" data-placement="top" title="Tooltip on top" >
                                                    <span class="slider round"></span>
                                                    
                                                  </label>
                                            </li>
                                            <li>
                                                {{-- <a type="button" class="btn btn-success" wire:click="reactivate({{ $ad->id }})">
                                                    Reactivate
                                                </a> --}}
                                                <label class="switch">
                                                    <input type="checkbox" >
                                                    <span class="slider round"></span>
                                                  </label>
                                            </li>
                                            @else
                                            <li>
                                                <a type="button" wire:click="soldAd({{ $ad->id }})">
                                                    ehat
                                                </a>
                                            </li>
                                        @endif
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
                    <button type="button" wire:click.prevent="delete()" class="btn btn-danger close-modal"
                        data-dismiss="modal">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>

</div>
