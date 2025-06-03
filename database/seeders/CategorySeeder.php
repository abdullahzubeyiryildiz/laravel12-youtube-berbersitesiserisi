<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Erkek Saç Kesimi',
                'slug' => 'erkek-saç-kesimi',
                'content' => 'Erkek saç kesimi kategorisi',
                'image' => 'img/barber.jpg',
                'status' => 1,
                'childrens' => [
                    [
                        'name' => 'Erkek Sakal Kesimi',
                        'slug' => 'erkek-sakal-kesimi',
                        'content' => 'Erkek sakal kesimi kategorisi',
                        'image' => 'erkek-sakal-kesimi.jpg',
                        'status' => 1,
                    ],
                ]
            ],
            [
                'name' => 'Çocuk Saç Kesimi',
                'slug' => 'cocuk-saç-kesimi',
                'content' => 'Çocuk saç kesimi kategorisi',
                'image' => 'img/kids.jpg',
                'status' => 1,
                'childrens' => []
            ],
            [
                'name' => 'Erkek Bakım',
                'slug' => 'erkek-bakim',
                'content' => 'Erkek bakım kategorisi',
                'image' => 'img/team/b3.jpg',
                'status' => 1,
                'childrens' => []
            ],
        ];

        foreach ($categories as $key => $category) {
            unset($category['childrens']);
            $category = Category::create($category);
            if (!empty($categories[$key]['childrens'])) {
                foreach ($categories[$key]['childrens'] as $children) {
                    $children = Category::create($children);
                    $children->parent_id = $category->id;
                    $children->save();
                }
            }
        }
    }
}
