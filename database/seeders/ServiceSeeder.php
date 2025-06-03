<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'lang' => 'tr',
                'category_id' => 1,
                'name' => 'Erkek Amerikan Kesimi',
                'slug' => 'erkek-amerikan-kesimi',
                'content' => 'Erkek amerikan kesimi için hizmet',
                'price' => 100,
                'image' => 'img/services/2.jpg',
                'is_featured' => 1,
                'status' => 1,
                'title' => 'Erkek Amerikan Kesimi',
                'keywords' => 'Erkek Amerikan Kesimi, Erkek Amerikan Kesimi Hizmeti, Erkek Amerikan Kesimi Fiyatı',
                'description' => 'Erkek amerikan kesimi için hizmet',
            ],
            [
                'lang' => 'tr',
                'category_id' => 1,
                'name' => 'Erkek Asker Saç Kesimi',
                'slug' => 'erkek-asker-saç-kesimi',
                'content' => 'Erkek asker saç kesimi için hizmet',
                'price' => 100,
                'image' => 'img/services/3.jpg',
                'is_featured' => 0,
                'status' => 1,
                'title' => 'Erkek Asker Saç Kesimi',
                'keywords' => 'Erkek Asker Saç Kesimi, Erkek Asker Saç Kesimi Hizmeti, Erkek Asker Saç Kesimi Fiyatı',
                'description' => 'Erkek asker saç kesimi için hizmet',
            ],
            [
                'lang' => 'tr',
                'category_id' => 2,
                'name' => 'Çocuk Amerikan Kesimi',
                'slug' => 'cocuk-amerikan-kesimi',
                'content' => 'Çocuk amerikan kesimi için hizmet',
                'price' => 100,
                'image' => 'img/services/3.jpg',
                'is_featured' => 1,
                'status' => 1,
                'title' => 'Çocuk Amerikan Kesimi',
                'keywords' => 'Çocuk Amerikan Kesimi, Çocuk Amerikan Kesimi Hizmeti, Çocuk Amerikan Kesimi Fiyatı',
                'description' => 'Çocuk amerikan kesimi için hizmet',
            ],
            [
                'lang' => 'tr',
                'category_id' => 2,
                'name' => 'Çocuk Asker Saç Kesimi',
                'slug' => 'cocuk-asker-saç-kesimi',
                'content' => 'Çocuk asker saç kesimi için hizmet',
                'price' => 100,
                'image' => 'img/services/1.jpg',
                'is_featured' => 0,
                'status' => 1,
                'title' => 'Çocuk Asker Saç Kesimi',
                'keywords' => 'Çocuk Asker Saç Kesimi, Çocuk Asker Saç Kesimi Hizmeti, Çocuk Asker Saç Kesimi Fiyatı',
                'description' => 'Çocuk asker saç kesimi için hizmet',
            ],

            [
                'lang' => 'tr',
                'category_id' => 3,
                'name' => 'Erkek Saç Yıkama',
                'slug' => 'erkek-saç-yikama',
                'content' => 'Erkek saç yıkama için hizmet',
                'price' => 100,
                'image' => 'img/services/3.jpg',
                'is_featured' => 1,
                'status' => 1,
                'title' => 'Erkek Saç Yıkama',
                'keywords' => 'Erkek Saç Yıkama, Erkek Saç Yıkama Hizmeti, Erkek Saç Yıkama Fiyatı',
                'description' => 'Erkek saç yıkama için hizmet',
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }


    }
}
