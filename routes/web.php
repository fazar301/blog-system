<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;


Route::get('/', function () {
    return view('home',['pageTitle' => "Home"]);
});
Route::get('/about', function () {
    return view('about',['pageTitle' => "About", 'nama' => 'Fazar']);
});
Route::get('/blog', function () {
    return view('blog',['pageTitle' => "Blog", 'blogs' => Blog::skip(0)->take(4)->orderBy('created_at','desc')->get()]);
});
Route::get('/blog/{blog:slug}', function (Blog $blog){
    return view('blog-detail',['pageTitle' => $blog['title'], 'blog' => $blog]);
});
// Route::get('/blog/{slug}', function($slug){
//     $blog = Blog::where('slug',$slug)->first();    
//     return view('blog-detail',['pageTitle' => $blog['title'], 'blog' => $blog]);
// });
Route::get('/contact', function () {
    return view('contact',['pageTitle' => "Contact"]);
});
