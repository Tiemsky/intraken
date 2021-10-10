<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index($language, $category, $subCategory)
    {
        $page_name = $category;
        $dynamic_sub_title = 'Category '.$category;
       
        return view('categories.'.$page_name, compact('dynamic_sub_title','category','subCategory'));

    }

    public function create()
    {
        return view('backend.subCategories.create');
    }

    public function manageSubCategories()
    {
        return view('backend.subCategories.manage-sub-categories');
    }
}
