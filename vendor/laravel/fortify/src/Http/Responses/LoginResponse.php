<?php

namespace Laravel\Fortify\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Auth;

class LoginResponse implements LoginResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        if(Auth::user() && Auth::user()->role == '1'){
            return redirect()->intended(app()->getLocale().'/admin');
        }else{
            return redirect()->intended(app()->getLocale().'/home');
        }
        return redirect()->intended(Fortify::redirects('login'));
        // return $request->wantsJson()
        //             ? response()->json(['two_factor' => false])
        //             : redirect()->intended(Fortify::redirects('login'));
    }
}
