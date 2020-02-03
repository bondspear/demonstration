<?php

namespace App\Http\Controllers;

use App\Category;
use Auth;
use App\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
    }

    public function store(Request $request)
    {
        $model = new Category;
        $model->fill($request->all());
        $model->save();
        
        return redirect('home');
    }

    public function show(Category $category)
    {
        $category = $category;
        $posts = Post::where('category_id', '=', $category->id)
                              ->paginate(5) ;
        $users = Auth::user()->name;

        return view('blog.categoryes.show', compact('category', 'posts', 'users'));
    }
}
