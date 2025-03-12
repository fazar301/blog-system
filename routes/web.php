<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategorieController;
use App\Models\Blog;
use App\Models\Categorie;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', [BlogController::class,'list']);

Route::get('/blog', [BlogController::class,'index']);

Route::get('/blog/{blog:slug}', [BlogController::class,'show']);

Route::get('/author/{author:username}', [AuthorController::class,'index']);

Route::get('/categorie/{categorie:slug}', [CategorieController::class,'index']);

Route::get('/about', function () {
    return view('about',['pageTitle' => "About", 'nama' => 'Fazar']);
});

Route::get('/contact', function () {
    return view('contact',['pageTitle' => "Contact"]);
});
