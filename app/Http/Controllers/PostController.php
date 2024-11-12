<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Media;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'content' => 'required|string',
            'file' => 'nullable|mimes:jpeg,jpg,png,mp4|max:10240', // Only images and videos allowed
        ]);

        try {
            // Create the post object
            $post = new Post();
            $post->content = $request->content;
            $post->user_id = auth()->user()->id; // assuming post is made by the logged-in user
            $post->save();

            // If file exists, handle file upload
            if ($request->hasFile('file')) {
                $file = $request->file('file');

                // Save the file in the 'public/posts' folder
                $fileName = time() . '.' . $file->getClientOriginalExtension();  // Unique file name
                $file->move(public_path('posts'), $fileName); // Move the file to the 'public/posts' folder

                // Create media entry and associate it with the post
                $media = new Media();
                $media->post_id = $post->id;  // Associate with the current post
                $media->media_url = 'posts/' . $fileName;  // Store the path of the media
                $media->media_type = $file->getClientMimeType(); // Store file type (image, video)
                $media->save();
            }

            // Flash success message
            return redirect()->back()->with('success', 'Post created successfully!');
        } catch (\Exception $e) {
            // Flash error message
            return redirect()->back()->with('error', 'Failed to create post. Please try again.');
        }
    }


}
