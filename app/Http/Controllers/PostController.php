<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function store(StorePostRequest $request) {
        $validated = $request->validated();

        $post = new Post();
        $post->user_id = auth()->id();
        $post->content = $validated['content'];
        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $post->image = $imagePath;
        }
        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('videos', 'public');
            $post->video = $videoPath;
        }
        $post->save();

        return redirect()->back()->with('success', 'Post created successfully!');
    }
}
