
<?php 
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class helper extends Component{
    public static $didGetLike;
    public static function likeChecker($user_id, $ad_id){
        $counter = DB::table('advertisement_like')
                ->where('user_id', $user_id)
                ->where('advertisement_id', $ad_id)
                ->get();
        if(count($counter)>0){
           return helper::$didGetLike=true;
        }else{
            return helper::$didGetLike=false;
        }
       
     }
     
    
}
 
?>