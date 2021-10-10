<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Message extends Model
{
    use HasFactory;
    use \Znck\Eloquent\Traits\BelongsToThrough;
    protected $guarded = [];
    protected $appends = ['sentByMe'];

    public function getSentByMeAttribute()
    {
        return $this->receiver_id == Auth::user()->id;
    }

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function ad()
    {
        return $this->belongsTo(Advertisement::class);

    }

    public function image()
    {
        // return $this->belongsToThrough('App\Models\Advertisement', ['App\Models\Image'], ['App\Models\Image'=>'post_id']);
        return $this->belongsTo(Image::class, 'post_id');
    }
}
