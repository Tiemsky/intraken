<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'sender_id' => 'required',
            'receiver_id' => 'required',
            'ad_id' => 'required',
            'message' => 'required',
        ]);
        
        Message::create([
            'sender_id' => $request->sender_id,
            'receiver_id' => $request->receiver_id,
            'ad_id' => $request->ad_id,
            'message' => $request->message,
        ]);
    }

    public function chatWithUser()
    {
        $conversations = Message::latest()->with(['sender','receiver'])
            ->where('sender_id', Auth::user()->id)
            ->orWhere('receiver_id', Auth::user()->id)
            ->get();
           
        $users  = $conversations->map(function ($conversation) {
            if ($conversation->receiver_id === Auth::user()->id) {
                return $conversation->sender;
            }
            return $conversation->receiver;
        })->unique();
        return $users;
    }

    public function showUserMessages($lang, $id)
    {
        $messages = Message::with(['user','ad.image'])
                ->where('receiver_id', Auth::user()->id)
                ->where('sender_id', $id)
                ->orWhere('sender_id', Auth::user()->id)
                ->where('receiver_id', $id)
                ->get();
        return $messages;
    }

    public function getLocale($lang){
        return $lang;
    }

    public function getUrl(Request $request){
        $lang = $request->lang;
        $slug = $request->slug;
        return route('ad.show',[$lang, $slug]);
    }

    public function startConversation(Request $request)
    {
        
        $message = Message::create([
            'sender_id'=> Auth::user()->id,
            'receiver_id'=>$request->receiverId,
            'message'=>$request->message
        ]);
        return $message->load('user');
    }
    
}
