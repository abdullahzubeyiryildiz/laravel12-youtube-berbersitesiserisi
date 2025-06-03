<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'name' => 'Blog 1',
            'content' => 'Blog 1 content',
            'image' => 'img/slider/8.jpg',
            'status' => 'active',
            'title' => 'Blog 1 title',
            'description' => 'Blog 1 description',
            'keywords' => 'Blog 1 keywords',
            'slug' => 'blog-1',
            'lang' => 'tr',
        ]);
    }
}
