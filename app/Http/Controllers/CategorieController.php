<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index(Categorie $categorie){
        // lazy eager loading
        // $categorie->blogs->load('categorie','author');

        return view('categorie-blogs',['pageTitle' => $categorie->name, 'categorie' => $categorie]);
    }
}
