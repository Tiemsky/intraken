<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Country;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
      $categories = Category::take(5)->get();
      $countries = Country::all();
      $searchCategories = Category::all();
      return view('index',compact('categories','countries','searchCategories'));
   }
   
}
