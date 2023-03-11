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
        return view('admin/tag');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/tag');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
