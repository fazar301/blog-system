<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::orderBy('created_at','desc');
        return view('blog',['pageTitle' => "Blog", 'blogs' => $blogs->filter()->get()]);
    }
    
    public function list(){
        $blogs = Blog::take(4)->orderBy('created_at','desc')->get();
        return view('home',['pageTitle' => "Home", 'blogs' => $blogs]);
    }

    public function show(Blog $blog){
        return view('blog-detail',['pageTitle' => $blog['title'], 'blog' => $blog]);
    }
}
