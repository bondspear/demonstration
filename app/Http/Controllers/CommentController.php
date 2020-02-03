<?php

namespace App\Http\Controllers;

use App\Comment;
use Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Comment $comment)
    {
        return view('blog.comment.index');
    }
    
    public function store(Request $request)
    {
        $model = new Comment;
        $model->user_id = request('user_id');
        $model->post_id = request('post_id');
        $model->fill($request->all());
        $model->save();        
        return redirect(route('post.show', $model->post_id));
    }
}
