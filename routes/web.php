<?php

use App\Models\Blog;
use App\Models\Categorie;
use App\Models\User;
use Illuminate\Support\Facades\Route;


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
Route::get('/author/{author:username}', function (User $author){
    return view('author-blogs',['pageTitle' => $author->name, 'author' => $author, 'totalBlogs' => count($author->blogs)]);
});
Route::get('/categorie/{categorie:slug}', function (Categorie $categorie){
    return view('categorie-blogs',['pageTitle' => $categorie->name, 'categorie' => $categorie]);
});
// Route::get('/blog/{slug}', function($slug){
//     $blog = Blog::where('slug',$slug)->first();    
//     return view('blog-detail',['pageTitle' => $blog['title'], 'blog' => $blog]);
// });
Route::get('/contact', function () {
    return view('contact',['pageTitle' => "Contact"]);
});
