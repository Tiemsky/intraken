<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('ads','subCategories')->get();
        return view('categories.index', compact('categories'));
    }

    public function showByCategory($lang, $slug){
        
        $category = Category::where('slug',$slug)->first();
        // Advertisement::where('id',$category->id)->get();

        if($slug == 'cars'){
            return view('categories.cars',compact('category'));
            }

        if($slug == 'electronics-appliances'){
            return view('categories.electronics-appliances',compact('category'));
        }

        if($slug == 'mobiles-tablets'){
            return view('categories.mobiles-tablets',compact('category'));
        }

        if($slug == 'furniture'){
            return view('categories.furniture',compact('category'));
        }

        if($slug == 'motorcycles'){
            return view('categories.motorcycles',compact('category'));
        }

        if($slug == 'properties'){
            return view('categories.properties',compact('category'));
        }

        if($slug == 'jewelry'){
            return view('categories.jewelry',compact('category'));
        }

        if($slug == 'fashion-clothes'){
            return view('categories.fashion-clothes',compact('category'));
        }

        if($slug == 'jobs-training'){
            return view('categories.jobs-training',compact('category'));
        }

        if($slug == 'services'){
            return view('categories.services',compact('category'));
        }

        if($slug == 'pets'){
            return view('categories.pets',compact('category'));
        }

        if($slug == 'sport-hobbies'){
            return view('categories.sport-hobbies',compact('category'));
        }

        if($slug == 'spa-well-being'){
            return view('categories.spa-well-being',compact('category'));
        }

        if($slug == 'holidays'){
            return view('categories.holidays',compact('category'));
        }

        if($slug == 'others'){
            return view('categories.others',compact('category'));
        }
        
    }
    
    public function create()
    {
        return view('backend.categories.create');
    }

    public function manageCategories()
    {
        return view('backend.categories.manage-categories');
    }

  
}
