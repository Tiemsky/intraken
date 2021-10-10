<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use PHPUnit\Util\Json;

class CountryController extends Controller
{
    public function getCountry()
    {
        $countries = Country::all();
        return response()->json($countries);
    }
}
