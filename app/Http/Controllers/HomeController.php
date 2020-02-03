<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Auth;
use DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Post $post, Category $category)
    {
        $category = Auth::user()->categoryes;
        $cat = Auth::user()->categoryes()->get();
        $qwe = Auth::user()->posts();
        $users = Auth::user()->name;
        $info = Auth::user()->info;
        return view('home', compact('category', 'cat', 'qwe', 'users', 'info'));
    }
    
    public function update()
    {
        $info = request('info');
        $id = Auth::user()->id;
        DB::update('update users set info = ?  where id = ?', [$info,$id]);
        return redirect()->route('home');
    }
}
