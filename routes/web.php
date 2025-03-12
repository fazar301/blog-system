<?php

use App\Models\Blog;
use App\Models\Categorie;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $blogs = Blog::take(4)->orderBy('created_at','desc')->get();
    return view('home',['pageTitle' => "Home", 'blogs' => $blogs]);
});
Route::get('/about', function () {
    return view('about',['pageTitle' => "About", 'nama' => 'Fazar']);
});
Route::get('/blog', function () { 
    $blogs = Blog::orderBy('created_at','desc')->get();
    return view('blog',['pageTitle' => "Blog", 'blogs' => $blogs]);
});
Route::get('/blog/{blog:slug}', function (Blog $blog){
    return view('blog-detail',['pageTitle' => $blog['title'], 'blog' => $blog]);
});
Route::get('/author/{author:username}', function (User $author){
    // lazy eager loading
    // $author->blogs->load('categorie','author');

    return view('author-blogs',['pageTitle' => $author->name, 'author' => $author, 'totalBlogs' => count($author->blogs)]);
});
Route::get('/categorie/{categorie:slug}', function (Categorie $categorie){
    // lazy eager loading
    // $categorie->blogs->load('categorie','author');

    return view('categorie-blogs',['pageTitle' => $categorie->name, 'categorie' => $categorie]);
});
Route::get('/contact', function () {
    return view('contact',['pageTitle' => "Contact"]);
});
