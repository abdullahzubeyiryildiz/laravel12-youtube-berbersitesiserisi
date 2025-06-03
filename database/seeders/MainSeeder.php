<?php

namespace Database\Seeders;

use App\Models\MainSetting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'key' => 'logo',
                'value' => 'logo.png',
                'type' => 'file',
            ],
            [
                'key' => 'phone',
                'value' => '855-100-4444',
                'type' => 'text',
            ],
            [
                'key' => 'email',
                'value' => 'info@berber.com',
                'type' => 'text',
            ],
            [
                'key' => 'favicon',
                'value' => 'favicon.png',
                'type' => 'file',
            ],
            [
                'key' => 'facebook',
                'value' => '#',
                'type' => 'text',
            ],
            [
                'key' => 'twitter',
                'value' => '#',
                'type' => 'text',
            ],
            [
                'key' => 'instagram',
                'value' => '#',
                'type' => 'text',
            ],

            [
                'key' => 'home_hero_title_1',
                'value' => 'Saç Kesimi',
                'type' => 'text',
            ],
            [
                'key' => 'home_hero_description_1',
                'value' => 'Profesyonel saç kesimi hizmeti',
                'type' => 'text',
            ],
            [
                'key' => 'home_hero_image_1',
                'value' => 'icon icon icon-icon-1-6',
                'type' => 'text',
            ],

            [
                'key' => 'home_hero_title_2',
                'value' => 'Yüz Traşı',
                'type' => 'text',
            ],
            [
                'key' => 'home_hero_description_2',
                'value' => 'Profesyonel yüz traşı hizmeti',
                'type' => 'text',
            ],
            [
                'key' => 'home_hero_image_2',
                'value' => 'icon icon-icon-1-3',
                'type' => 'text',
            ],

            [
                'key' => 'home_hero_title_3',
                'value' => 'Tıraş',
                'type' => 'text',
            ],
            [
                'key' => 'home_hero_description_3',
                'value' => 'Profesyonel tıraş hizmeti',
                'type' => 'text',
            ],
            [
                'key' => 'home_hero_image_3',
                'value' => 'icon icon-icon-1-1',
                'type' => 'text',
            ],
            [
                'key' => 'address',
                'value' => 'Eskişehir, Türkiye',
                'type' => 'text',
            ],
            [
                'key' => 'map',
                'value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m..',
                'type' => 'text',
            ],
            [
                'key' => 'video_url',
                'value' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'type' => 'text',
            ],
            [
                'key' => 'copyright',
                'value' => 'Tüm Hakları Saklıdır.',
                'type' => 'text',
            ],
        ];

        foreach ($settings as $setting) {
            MainSetting::create($setting);
        }
    }
}
