<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|min:10',
            'is_featured' => 'integer',
            'photo' => 'required|image|mimes:png,jpg,webp,jpeg',
        ]);
        $request['is_featured'] = $request->is_featured ?? 0;
        $new = $request->all();
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
            $new['photo'] = $photoPath;
        }
        Post::create($new);



        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // return $post;
        return view('posts.show', ['posts' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        // return $request;
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|min:10',
            'is_featured' => 'integer',
            'photo' => 'required|image|mimes:png,jpg,webp,jpeg',
        ]);
        $request['is_featured'] = $request->is_featured ?? 0;
        $new = $request->all();
        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete($post->photo);
            $photoPath = $request->file('photo')->store('photos', 'public');
            $new['photo'] = $photoPath;
        }
        // dd($new);
        $post->update($new);
        return redirect()->route('posts.index')->with('message', "post created success");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // return $post;
        $post->delete();
        return redirect()->route('posts.index');
    }
}
