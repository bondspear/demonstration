<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $users = Auth::user()->name;
        $search =  $request->query('text');
        $posts =  Post::where('header', 'LIKE', '%' . $search . '%')
        ->orWhere('text', 'LIKE', '%' . $search . '%')
        ->orderby('id', 'desc')->get();
        return view('search.index', compact('posts', 'users'));
    }
}
