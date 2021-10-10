<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return view('user.home');
    }
    public function profile()
    {
        return view('user.profile');
    }

    public function myAds()
    {
        return view('user.my-ads');
    }

    public function message()
    {
        return view('user.message');
    }

    public function privacySettings()
    {
        return view('user.privacy-settings');
    }

    public function userLastActivity()
    {
         if (Cache::get(Auth::user()->id)){
            return Auth::user()->id;
         }
    }

}
