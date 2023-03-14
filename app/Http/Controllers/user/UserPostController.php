<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\Post;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    
    public function post(Post $post){

        
        return view('user.main-post',compact('post'));
    }
}
