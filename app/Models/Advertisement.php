<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class,'sub_category_id');
    }


    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }


    public function vehicle()
    {
        return $this->hasOne(Vehicle::class,'post_id');
    }
    
    public function property()
    {
        return $this->hasOne(Property::class, 'post_id');
    }
    public function image()
    {
        //using has one coz we are using a single row to store all the images belong to one particular ad
        return $this->hasOne(Image::class,'post_id');
        //if we had multiples rows storing images
        // return $this->hasMany(Image::class,'post_id');
    }

    //like functionality
    public function likes()
    {
        return $this->belongsToMany(User::class,'advertisement_like');
    }

   
}
