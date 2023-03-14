<?php

namespace App\Http\Controllers\admin;


use App\Models\user\category;
use App\Models\user\Post;
use App\Models\user\tag;
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
        $posts = Post::all()->sortByDesc('created_at');
       return view('admin.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = tag::all();
        $categories = category::all();
        return view('admin.post.post', compact('tags','categories'));
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
        $post->status = $request->status;
       
        $post->save();

        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        
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
        $post->with('tags','categories');
        $tags = tag::all();
        $categories = category::all();
        return view('admin.post.edit',compact('post', 'tags', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        

        $validated = $request->validate([
            
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'slug' => 'required',
            'body' => 'required',
            'image' => 'required',
            
        ]);

        if( $request->hasFile('image')){
            $imageName = $request->image->store('public');
        }
        

        //
        $post->update($validated);
        
        //
        $post->status = $request->status;
        $post->image = $imageName;
        $post->save();

        //
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        

       

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
