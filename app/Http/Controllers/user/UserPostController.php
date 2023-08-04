<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class UserPostController extends Controller
{
    
    public function post(Post $post){

        $next = Post::query()
            ->where('status' , 1)
            ->whereDate('created_at', '<=' , Carbon::now())
            ->whereDate('created_at', '<', $post->created_at)
            ->orderBy('created_at', 'desc')
            ->limit(value: 1)
            ->first();

        $prev = Post::query()
            ->where('status' , 1)
            ->whereDate('created_at', '<=' , Carbon::now())
            ->whereDate('created_at', '>', $post->created_at)
            ->orderBy('created_at', 'asc')
            ->limit(value: 1)
            ->first();
        
        return view('user.main-post',compact('post', 'next' , 'prev'));
    }
}
