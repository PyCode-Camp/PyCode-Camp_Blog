<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\category;
use App\Models\user\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function search(Request $request)
    {

        $keyword = $request->input('keyword');

        $posts = Post::where('title', 'like', "%$keyword%")
            ->orWhere('body', 'like', "%$keyword%")
            ->where('status', '1')
            ->orderByDesc('created_at')
            ->get();

        $trendingCategory = Category::where('slug', 'trending')->first();
        $trendCategories =  $trendingCategory->posts()
            ->where('title', 'like', "%$keyword%")
            ->orWhere('body', 'like', "%$keyword%")
            ->where('status', 1)
            ->orderByDesc('created_at')
            ->get();

        $featuredCategory = Category::where('slug', 'featured')->first();
        $featuredPosts = $featuredCategory->posts()
            ->where('title', 'like', "%$keyword%")
            ->orWhere('body', 'like', "%$keyword%")
            ->where('status', 1)
            ->orderByDesc('created_at')
            ->get();

        return view('user.home', compact('posts', 'keyword', 'trendCategories', 'featuredPosts'));


        
    }
}
