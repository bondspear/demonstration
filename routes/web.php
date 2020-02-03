<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'LayoutController@show');




//Features folder
    Route::get('{featuresFolder}', function ($featuresFolder) {
        return view('features.'.$featuresFolder);
   })->where(['featuresFolder' => 'animations|components|icon-variations|icons|index-alt2|index-alt3|index|table|typography'])->name('featuresFolder');
   
//Pages folder
   Route::get('{pagesFolder}', function ($pagesFolder) {
       return view('pages.'.$pagesFolder);
   })->where(['pagesFolder' => '404|about|pricingbox|testimonials'])->name('pagesFolder');

//Portfolio folder
   Route::get('{portfolioFolder}', function ($portfolioFolder) {
       return view('portfolio.'.$portfolioFolder);
   })->where(['portfolioFolder' => 'portfolio-2col|portfolio-3cols|portfolio-4cols|portfolio-detail'])->name('portfolioFolder');


  
  Route::resource('/category','CategoryController');
  Route::resource('/post','PostController');
  
  
  Route::get('/hash_tag','HashtagController@posts')->name('hashtag.posts');
  Route::post('/hash_tag/{hash_tag}','HashtagController@update')->name('hashtag.update');
  
  
  
  
  
  
  
  
  
  Route::resource('/comment','CommentController');
  Route::resource('/answer','AnswerController');

  
  
  
  
  
  
  
  
  
  
  
  
  Route::get('/result','SearchController@index')->name('searching');
  
  
  
  
  
  
  
  
  
  
//Contact folder
Route::get('contact','MailController@index');
Route::match(['get','post'],'sender','MailController@sender')->name('sender');
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
Auth::routes();

Route::post('/user_update', 'HomeController@update')->name('user_update');
Route::get('/home', 'HomeController@index')->name('home');
