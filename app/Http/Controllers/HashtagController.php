<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
use Illuminate\Http\Request;

class HashtagController extends Controller
{
    public function posts(Request $request)
    {
        $posts = Post::query()->whereHas('hashtags', function ($q) use ($request) {
            $q->where('hashtag_id', $request->get('tag'));
        })->paginate();
        
        $users = Auth::User()->name;
       
        return view('blog.hash_tag.show', compact('posts', 'users'));
    }
}
