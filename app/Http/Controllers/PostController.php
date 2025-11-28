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

        $image_name = null;
        $video_name = null;
        
        if ($request->hasFile('image')) {
            $image_name = time().'.'.$request->image->extension();$request->image->move(public_path('images'), $image_name);
            $post->image = $image_name;
        }
        if ($request->hasFile('video')) {
           $video_name = time().'.'.$request->video->extension();$request->video->move(public_path('videos'), $video_name);
           $post->video = $video_name;
        }
        $post->save();

        return redirect()->back()->with('success', 'Post created successfully!');
    }

    public function edit($id) {
        $post = Post::findOrFail($id);

        if ($post->user_id !== auth()->id()) {
            return redirect()->back()->with('error', 'You are not authorized to edit this post.');
        }

        return view('user.posts.edit', compact('post'));
    }

    public function update(Request $request, $id) {
        $post = Post::findOrFail($id);

        if ($post->user_id !== auth()->id()) {
            return redirect()->back()->with('error', 'You are not authorized to update this post.');
        }

        $request->validate([
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'video' => 'nullable|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:10240',
        ]);

        $post->content = $request->input('content');

        if ($request->has('remove_image')) {
            $post->image = null;
        } elseif ($request->hasFile('image')) {
            $image_name = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $image_name);
            $post->image = $image_name;
        }

        if ($request->has('remove_video')) {
            $post->video = null;
        } elseif ($request->hasFile('video')) {
            $video_name = time().'.'.$request->video->extension();
            $request->video->move(public_path('videos'), $video_name);
            $post->video = $video_name;
        }

        $post->save();

        return redirect()->route('user.index')->with('success', 'Post updated successfully!');
    }

    public function destroy($id) {
        $post = Post::findOrFail($id);

        if ($post->user_id !== auth()->id()) {
            return redirect()->back()->with('error', 'You are not authorized to delete this post.');
        }

        $post->delete();

        return redirect()->back()->with('success', 'Post deleted successfully!');
    }
}
