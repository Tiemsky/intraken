<?php

namespace App\Http\Livewire\Ads;

use App\Models\Advertisement;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class MyAds extends Component
{
    use WithPagination;
    public $deleteId;
    protected function query($id){
        return Advertisement::findOrFail($id);
}

    //1=>isPublished, 2=>expired, 3=>sold

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }
  
    public function delete()
    {
        $this->query($this->deleteId)->delete();
    }


    public function soldAd($id){
        $this->query($id)->update(['isPublished'=>3]);
    }

    public function reactivate($id){
        $this->query($id)->update(['isPublished'=>1]);
    }

    public function adStatus($adId){
        $status = $this->query($adId);
        return $status->isPublished;
    }
   
         
    public function render()
    {
        $user =Auth::user();
        $ads = Advertisement::with('image','category')->where('user_id','=',$user->id)->paginate(10);
        return view('livewire.ads.my-ads',
                    ['ads' => $ads]
                );
    }
}
