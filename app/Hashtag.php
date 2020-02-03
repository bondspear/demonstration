<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hashtag extends Model
{
    protected $fillable= ['hash_name'];
    
    public function posts()
    {
        return $this->belongsToMany('App\Post', 'hashtag_post');
    }
}
