<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index(Answer $answer)
    {
        return view('blog.comment.index');
    }

    public function store(Request $request)
    {
        $model = new Answer;
        $model->user_id = request('user_id');
        $model->comment_id = request('comment_id');
        $model->fill($request->all());
        $model->save();
        
        return redirect(route('post.show', $model->comment->post->id));
    }
}
