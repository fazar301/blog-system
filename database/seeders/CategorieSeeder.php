<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorie::create(['name' => 'News', 'slug' => 'news']);
        Categorie::create(['name' => 'Blog', 'slug' => 'blog']);
        Categorie::create(['name' => 'Tutorial', 'slug' => 'tutorial']);
    }
}
