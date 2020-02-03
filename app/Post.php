<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['header','text','image','cite','video','image2','image3','created_at','user_id','category_id','hashtag_from_text'];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
        
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    
    public function answers()
    {
        return $this->hasManyThrough('App\Answer', 'App\Comment');
    }
    
    public function hashtags()
    {
        return $this->belongsToMany('App\Hashtag', 'hashtag_post');
    }
}
