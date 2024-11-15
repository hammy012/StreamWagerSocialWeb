<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function welcome(){
        $userId = Auth::user()->id;
        $user = User::find($userId);
        $all_users = User::orderBy('created_at', 'desc')->get();

        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('welcome', compact('all_users', 'posts', 'user'));
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

        // Get the logged-in user's ID
        $userId = Auth::user()->id;

        // Fetch the user along with their posts and associated media
        $user = User::find($userId);

        // Get all posts made by the user with media (if available)
        $posts = Post::where('user_id', $userId)->get();

        return view('your-friends', compact('user', 'posts'));
    }

    public function storeComment(Request $request, $postId)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        $comment = Comment::create([
            'post_id' => $postId,
            'user_id' => $request->user_id,
            'content' => $request->content,
        ]);

        return response()->json(['success' => true, 'comment' => $comment]);
    }

    public function likePost($postId)
    {
        $userId = Auth::user()->id;

        // Check if the user has already liked the post
        $like = Like::where('post_id', $postId)->where('user_id', $userId)->first();

        if ($like) {
            // If the user already liked, remove like
            $like->delete();
            return response()->json(['liked' => false]);
        } else {
            // If the user has not liked, add a like
            Like::create([
                'post_id' => $postId,
                'user_id' => $userId
            ]);
            return response()->json(['liked' => true]);
        }
    }


}
