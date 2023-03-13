<?php

namespace App\Http\Controllers\user;

use App\Models\user\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{


    public function index(){

        $posts = Post::all();
        return view('user.home', compact('posts'));
    }
}
