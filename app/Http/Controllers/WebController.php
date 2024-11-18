<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\FriendRequest;
use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function welcome()
    {
        $userId = Auth::user()->id;
        $user = User::find($userId);
        $all_users = User::orderBy('created_at', 'desc')->get();

        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('welcome', compact('all_users', 'posts', 'user'));
    }

    public function profile()
    {
        // Get the logged-in user's ID
        $userId = Auth::user()->id;

        // Fetch the user along with their posts and associated media
        $user = User::find($userId);

        // Get all posts made by the user with media (if available)
        $posts = Post::where('user_id', $userId)->get();

        // Pass the user and posts (with media) to the view
        return view('profile', compact('user', 'posts'));
    }
    public function user_profile($id)
    {
        $user = User::find($id);

        // Get all posts made by the user with media (if available)
        $posts = Post::where('user_id', $id)->get();

        // Pass the user and posts (with media) to the view
        return view('user-profile', compact('user', 'posts'));
    }

    public function find_people(Request $request)
    {
        $search = $request->input('s');

        $all_users = User::orderBy('created_at', 'desc')->get();

        $search_users = User::when($search, function ($query, $search) {
            return $query->where('first_name', 'LIKE', "%{$search}%")
                ->orWhere('last_name', 'LIKE', "%{$search}%");
        })->orderBy('created_at', 'desc')->get();

        return view('find-people', compact('all_users', 'search_users'));
    }

    public function about()
    {
        return view('about');
    }

    public function faq()
    {
        return view('faq');
    }

    public function contact()
    {
        return view('contact');
    }

    public function user_friends()
    {


        return view('user-friends');
    }

    public function your_friends()
    {

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

    public function uploadProfilePicture(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Save the uploaded file in 'public/user_profiles' folder
        $file = $request->file('profile_picture');
        $filename = time() . '_' . $file->getClientOriginalName(); // Unique filename
        $destinationPath = public_path('user_profiles'); // Direct path to 'public/user_profiles'

        // Ensure the directory exists
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true); // Create directory if not exists
        }

        // Move file to the destination
        $file->move($destinationPath, $filename);

        // Retrieve the authenticated user
        $userId = auth()->id(); // Get the logged-in user ID
        $user = User::find($userId); // Retrieve the user by ID

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not found.'], 404);
        }

        // Get old profile picture path
        $oldProfilePicture = $user->profile_picture;

        // Save new profile picture path in database
        $user->profile_picture = 'user_profiles/' . $filename;
        $user->save();

        // Optionally delete the old profile picture
        if ($oldProfilePicture && file_exists(public_path($oldProfilePicture))) {
            unlink(public_path($oldProfilePicture));
        }

        // Return the new profile picture URL
        return response()->json([
            'success' => true,
            'new_profile_picture_url' => asset('user_profiles/' . $filename),
        ]);
    }


    // FRIENDS
    public function sendFriendRequest(Request $request)
    {
        $receiverId = $request->receiver_id;

        // Check if already friends or pending request exists
        $exists = FriendRequest::where('sender_id', auth()->id())
            ->where('receiver_id', $receiverId)
            ->whereIn('status', ['pending', 'accepted'])
            ->exists();

        if ($exists) {
            return response()->json(['message' => 'Request already sent or already friends.']);
        }

        FriendRequest::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $receiverId,
            'status' => 'pending',
        ]);

        return response()->json(['message' => 'Friend request sent!']);
    }



    public function acceptFriendRequest($requestId)
    {
        $friendRequest = FriendRequest::find($requestId);

        if ($friendRequest && $friendRequest->receiver_id == auth()->id()) {
            $friendRequest->update(['status' => 'accepted']);

            return response()->json(['message' => 'Friend request accepted!']);
        }

        return response()->json(['message' => 'Invalid request.']);
    }



    public function declineFriendRequest($requestId)
    {
        $friendRequest = FriendRequest::find($requestId);

        if ($friendRequest && $friendRequest->receiver_id == auth()->id()) {
            $friendRequest->update(['status' => 'declined']);

            return response()->json(['message' => 'Friend request declined.']);
        }

        return response()->json(['message' => 'Invalid request.']);
    }


    public function sendRequest($receiverId)
    {
        $exists = FriendRequest::where('sender_id', auth()->id())
            ->where('receiver_id', $receiverId)
            ->exists();

        if ($exists) {
            return redirect()->back()->with('message', 'Request already sent.');
        }

        FriendRequest::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $receiverId,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('message', 'Friend request sent!');
    }




}
