<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(User $author){
        // lazy eager loading
        // $author->blogs->load('categorie','author');
        return view('author-blogs',['pageTitle' => $author->name, 'author' => $author, 'totalBlogs' => count($author->blogs)]);
    }
}
