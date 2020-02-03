<?php

         
         
namespace App\Http\Controllers;

use Carbon\Carbon;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use App\MyClasses\SearchHashTag;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    
    public function index()
    {
        $users = Auth::user()->name;
        $posts = Post::with('hashtags')->get();
        
        return view('blog.post.index', compact('users', 'posts'));
    }

    public function create()
    {
        return view('home');
    }


    public function store(Request $request)
    {
        $model = new Post;
        $helper = new  SearchHashTag;
      
        
        $model->user_id = request('user_id');
        $model->category_id = request('category_id');
        $model->fill($request->all());
        $model->save();
        
        $text = request('text') ;
        $my_tags = $helper->searchHashTags($text) ;
        $post_id = $model->id;
        $helper->createHashModels($my_tags, $post_id);

              
        return redirect('home');
    }


    public function show(Post $post)
    {
        $post = $post;
        $users = Auth::user()->name;
        $info = Auth::user()->info;
   
        return view('blog.post.show', compact('post', 'users', 'info'));
    }

    
    
    public function update(Request $request)
    {
        //add rate of hashtags
        $id = $request->get('tag');
        DB::update('update hashtags set hash_rate = hash_rate+1 where id = ?', [$id]);
        
        
        
        //update rate of hasthags on interval (1 week)
        $carbon = new Carbon() ;
        $carbon_end = (new Carbon('today'))->addWeeks(1);
                                        
        if ($carbon == $carbon_end) {
            DB::update('update hashtags set hash_rate = 0 where id = ?', [$id]);
            DB::update('update hashtags set created_at = $realDate where id = ?', [$id]);
        }
          
        $carbon = $carbon_end;

        return redirect(route('hashtag.posts', ['tag' => $id]));
    }
}
