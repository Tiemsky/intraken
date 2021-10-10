<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChildCategoryController extends Controller
{
    public function create()
    {
        return view('backend.childCategories.create');
    }

    public function manageChildCategories()
    {
        return view('backend.childCategories.manage-child-categories');
    }
}
