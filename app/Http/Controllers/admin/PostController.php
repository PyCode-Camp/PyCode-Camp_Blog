<?php

namespace App\Http\Controllers\admin;


use App\Models\user\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
       return view('admin.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.post.post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        
         $this->validate($request, [
            
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'slug' => 'required',
            'body' => 'required',
        ]);
       

        $post = new Post;

        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->save();
        
        return redirect(route('post.index'));
      
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {

        return view('admin.post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post): RedirectResponse
    {

        $validated = $request->validate([
            
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'slug' => 'required',
            'body' => 'required',

        ]);

        $post->update($validated);

       

        return redirect(route('post.index'));
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post): RedirectResponse
    {
        
        $post::where('id', $post->id)->delete();
        return redirect( route('post.index'));
    }
}
