<div>
    @if (Auth::user() && count($this->likeChecker(Auth::user()->id, $ad_id))>0)
    <a type='button' class="like" wire:click='disLike({{$ad_id}})'>
        <i class="fas fa-heart" style="color: #FF4367"></i>
    </a>
    @else
    <a type='button' class="like" wire:click='like({{$ad_id}})'>
        <i class="fal fa-heart"></i>
    </a>
    @endif

    
   

   
</div>
