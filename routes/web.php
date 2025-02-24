<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;


Route::get('/', function () {
    return view('home',['pageTitle' => "Home"]);
});
Route::get('/about', function () {
    return view('about',['pageTitle' => "About", 'nama' => 'Fazar']);
});
Route::get('/blog', function () {
    return view('blog',['pageTitle' => "Blog", 'blogs' => Blog::all()]);
});
Route::get('/blog/{slug}', function($slug){
    $blogs = Blog::all();
    $blog = Arr::first($blogs, function($blog) use($slug){
        return $blog['slug'] == $slug;
    });
    
    return view('blog-detail',['pageTitle' => $blog['title'], 'blog' => $blog]);
});
Route::get('/contact', function () {
    return view('contact',['pageTitle' => "Contact"]);
});
