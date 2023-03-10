<?php

namespace App\Http\Controllers\admin;

use App\Models\user\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $categories = category::all();
        return view ('admin.category.show', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.category.category');
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

        $category = new category;

        $category->name = $request->name;
        $category->slug = $request->slug;

        $category->save();

        return redirect( route('category.index'));
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
        $category = category::where('id', $id)->first();
        return view('admin.category.edit',compact('category'));
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

        $validate = $request->validate([
            
            'name' => 'required',
            'slug' => 'required',  
        ]);

        $category = category::where('id', $id)->first();

        $category->update($validate);

        return redirect(route('category.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        category::where('id', $id)->delete();
        return redirect()->back();
    }
}
