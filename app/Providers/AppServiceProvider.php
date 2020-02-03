<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;


use App\Hashtag;
use App\Category;
use App\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        
        View::composer(['blog.post.index','blog.post.show','blog.categoryes.show','blog.hash_tag.show','search.index'], function ($view) {
            $view->with('category_all', Category::all())
                 ->with('posts_limit', Post::orderby('id', 'desc')->take(3)->get())
                 ->with('popular_hashtags', Hashtag::where('hash_rate', '>', '50')->orderby('id', 'desc')->take(10)->get());
        });
    }
}
