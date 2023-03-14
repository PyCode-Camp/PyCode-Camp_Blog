<?php

namespace App\Http\Controllers\user;

use App\Models\user\category;
use App\Models\user\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{


    public function index(){

        $posts = Post::where('status', 1)->get()->sortByDesc('created_at');
        
        $trendingCategory = category::where('slug', 'trending')->get()->first();

        $trendCategories =  $trendingCategory->posts->where('status', 1)->sortByDesc('created_at');
        
        

        return view('user.home', compact('posts', 'trendCategories'));
    }
}
