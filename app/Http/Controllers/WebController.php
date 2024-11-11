<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function welcome(){

        $all_users = User::orderBy('created_at', 'desc')->get();

        return view('welcome', compact('all_users'));
    }

    public function profile(){

        $userId = Auth::user()->id;
        $user = User::find($userId);

        return view('profile', compact('user'));
    }

    public function find_people(){
        return view('find-people');
    }

    public function about(){
        return view('about');
    }

    public function faq(){
        return view('faq');
    }

    public function contact(){
        return view('contact');
    }

    public function user_friends(){
        return view('user-friends');
    }

    public function your_friends(){
        return view('your-friends');
    }


}
