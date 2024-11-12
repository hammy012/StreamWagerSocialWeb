<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
        // Get the logged-in user's ID
        $userId = Auth::user()->id;

        // Fetch the user along with their posts and associated media
        $user = User::find($userId);

        // Get all posts made by the user with media (if available)
        $posts = Post::where('user_id', $userId)->get();

        // Pass the user and posts (with media) to the view
        return view('profile', compact('user', 'posts'));
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
