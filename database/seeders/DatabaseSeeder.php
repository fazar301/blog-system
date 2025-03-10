<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Categorie;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        
        // menjalankan user factory dan menimpa value name dan email dengan test user / test@example.com
        // jika tidak ingin menimpa value apapun maka cukup buat ->create() saja

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com'
        // ])


        $this->call(CategorieSeeder::class);
        Blog::factory(100)->recycle([
            User::factory(5)->create(),
            Categorie::all()
        ])->create();
    }
}
