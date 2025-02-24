<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Blog {
    public static function all(){
        return [
            [
                'id' => 1,
                'slug' => 'admin-panel-how-to-get-started-tutorial-create-easy-customizable-applications',
                'title' => 'Admin Panel - How To Get Started Tutorial. Create easy customizable applications',
                'author' => 'David Morgan',
                'body' => 'We’ve been focused on making the from v4 to v5 but we have also not been afraid to step away been focused on from v4 to v5 speaker approachable making focused a but from a step away afraid to step away been focused Writing a blog post is a little like driving; you can study the highway code (or read articles telling you how to write a blog post) for months, but nothing can prepare you for the real thing like getting behind the wheel',
                'created_at' => 'Apr 27 2021',
                'thumb' => 'Arcane.S01E04.Happy.Progress.Day28.44.png',
                'categories' => 'TUTORIAL',
                'author_pic' => '300-1.jpg'
            ],
            [
                'id' => 2,
                'slug' => 'bootstrap-admin-theme-how-to-get-started-tutorial-create-customizable-applications',
                'title' => 'Bootstrap Admin Theme - How To Get Started Tutorial. Create customizable applications',
                'author' => 'Jane Miller',
                'body' => 'We’ve been focused on making the from v4 to v5 a but we’ve also not been afraid to step away been focused on from v4 to v5 speaker approachable making focused',
                'created_at' => 'Apr 27 2021',
                'thumb' => 'none.jpg',
                'categories' => 'BLOG',
                'author_pic' => '300-2.jpg'
            ],
            [
                'id' => 3,
                'slug' => 'angular-admin-theme-how-to-get-started-tutorial',
                'title' => 'Angular Admin Theme - How To Get Started Tutorial.',
                'author' => 'David Morgan',
                'body' => 'We’ve been focused on making the from v4 to v5 a but we’ve also not been afraid to step away',
                'created_at' => 'Mar 14 2021',
                'thumb' => 'none.jpg',
                'categories' => 'tutorial',
                'author_pic' => '300-1.jpg'
            ],
            [
                'id' => 4,
                'slug' => 'react-admin-theme-how-to-get-started-tutorial-create-best-applications',
                'title' => 'React Admin Theme - How To Get Started Tutorial. Create best applications',
                'author' => 'Justin Miller',
                'body' => 'We’ve been focused on making the from v4 to v5 but we’ve also not been afraid to step away been focused',
                'created_at' => 'Mar 14 2021',
                'thumb' => 'none.jpg',
                'categories' => 'news',
                'author_pic' => '300-5.jpg'
            ]
        ];
    }

    public static function find($slug): array{
        $blog = Arr::first(static::all(), fn($blog) => $blog['slug'] == $slug );
        if(!$blog){
            abort(404);
        }
        return $blog;
    }
}