<?php

namespace App\Http\Controllers\admin;

use App\Models\user\tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = tag::all();
        return view('admin.tag.show', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.tag.tag');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $this->validate($request, [
           
            'name' => 'required',
            'slug' => 'required',
        ]);

        $tag = new tag;

        $tag->name = $request->name;
        $tag->slug = $request->slug;

        $tag->save();

        return redirect( route('tag.index') );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tag = tag::where('id', $id)->first();
        return view('admin.tag.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $this->validate($request, [
           
           'name' => 'required',
           'slug' => 'required',
       ]);

       $tag = tag::where('id',$id)->first();

       $tag->name = $request->name;
       $tag->slug = $request->slug;

       $tag->save();

       return redirect(route('tag.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        tag::where('id', $id)->delete();
        return redirect()->back();
    }
}
