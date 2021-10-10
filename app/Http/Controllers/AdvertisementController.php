<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
     public function index()
    {
        return view('ads.index');
    }

    public function store()
    {
        return view('ads.post-ad');
    }

    public function myAds()
    {
        return view('ads.my-ads');
    }

    public function show($lang, $slug)
    {
        // $ad = Advertisement::where('slug','=',$slug)->first();
        // $slug = $ad->slug;
        return view('ads.show', compact('slug'));
    }

    public function edit($lang, $id)
    {
        $ad = Advertisement::with('category','vehicle','property')->findOrFail($id);
        //passing the ad as props instead of passing the id
        return view('ads.edit-ad', compact('ad'));
    }

    public function favoriteAds()
    {
        return view('ads.favorite-ads');
    }

    public function allItemPostedByUser($lang, $id)
    {
        $user_id= $id;
        return view('ads.all-ads-posted-by-user', compact('user_id'));
    }

    public function search($lang, Request $request){
        $data = $request->all();
        if($data['country']=='' && $data['category']=='' && $data['query']=='')
            {
            return redirect()->route('ad.index',[$lang]);
            }
        $ads = Advertisement::with(['image','category','country','state','city'])
                                        ->where('country_id', $data['country'])
                                        ->orWhere('category_id', $data['category'])
                                        ->orWhere('title', 'LIKE', "%{$data['query']}%") 
                                        ->orWhere('description', 'LIKE', "%{$data['query']}%") 
                                        ->get(); 
    return view('ads.searchAd', compact('ads'));
}

public function showAdsBySubCategories($lang, $categorySlug, $subCategorySlug)
{
    return view('ads.showAdsBySubCategories', compact('categorySlug','subCategorySlug'));
}


}
