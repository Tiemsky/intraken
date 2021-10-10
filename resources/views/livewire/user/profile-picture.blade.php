<div class="user_author d-flex align-items-center">
    <div class="author">
        @if (Auth::user() && Auth::user()->photo)
            <img src="{{ asset('storage/users/'.Auth::user()->photo) }} " alt="avatar">
        @else
        <img src="{{ asset('storage/users/default.png') }} " alt="avatar">
        @endif
       
    </div>
    <div class="user_content media-body">
        <h6 class="author_name">User</h6>
        <p>{{Auth::user()->username}} </p>
    </div>
</div>
