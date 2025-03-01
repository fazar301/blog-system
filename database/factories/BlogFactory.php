<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();
        $categories = ['news','tutorial','blog'];
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'author_id' => User::factory(),
            'body' => fake()->text(200),
            'thumb' => 'Arcane.S01E04.Happy.Progress.Day28.44.png',
            'categories' => $categories[rand(0,2)],
            'author_pic' => '300-' . strval(rand(1,12)) . '.jpg'
        ];
    }
}
