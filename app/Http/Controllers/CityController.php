<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function getState($stateId)
    {
        $city = City::where('country_id',$stateId)->get();
        return response()->json($city);
    }
}
