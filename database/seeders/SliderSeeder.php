<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'lang' => 'tr',
            'name' => 'Slider 1',
            'content' => 'Content 1',
            'button_text' => 'Button Text',
            'button_link' => '#',
            'image' => 'img/slider/1.jpg',
            'status' => 1,
        ]);

        Slider::create([
            'lang' => 'en',
            'name' => 'Slider 1',
            'content' => 'Content 1',
            'button_text' => 'Button Text',
            'button_link' => '#',
            'image' => 'img/slider/2.jpg',
            'status' => 1,
        ]);
    }
}
