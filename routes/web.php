<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
//     // return 123;
// });

Route::view('/','home')->name('home');

// Route::get('/contact',function(){
//   return view('contact');
// });

Route::view('/contact', 'contact')->name('contact');

// Route::get('blog-post/{id}',function($id){
//   $pages=[
//     1=> ['title'=>"Page 1", 'content'=>'<h1>Content of Page 1</h1>'],
//     2=> ['title'=>"Page 2", 'content'=>'<h1>Content of Page 2</h1>'],
//     3=> ['title'=>"Page 3", 'content'=>'<h1>Content of Page 3</h1>'],
//   ];
//   return view('blog-post',['data'=>$pages[$id]]);
// });

Route::get('blog-post/{id}/{welcome?}',function($id,$welcome=1){
  $pages=[
    1=> ['title'=>"Page 1", 'content'=>' from Page 1'],
    2=> ['title'=>"Page 2", 'content'=>' from Page 2'],
    3=> ['title'=>"Page 3", 'content'=>' from Page 3'],
  ];
  $welcomes=[1=>'<strong>Hello</strong>',2=>'<strong>Welcome</strong >'];
  return view('blog-post',[
    'data'=>$pages[$id],'welcome'=>$welcomes[$welcome]
  ]);
})->name('blog-post');

/**
 * BEGIN: Injected from .gp/snippets/laravel/routes/web/allow-mixed-web.snippet
 */

$url = config('app.url');
resolve(\Illuminate\Routing\UrlGenerator::class)->forceRootUrl($url);
resolve(\Illuminate\Routing\UrlGenerator::class)->forceScheme('https');

 /**
 * END: Injected from .gp/snippets/laravel/routes/web/allow-mixed-web.snippet
 */