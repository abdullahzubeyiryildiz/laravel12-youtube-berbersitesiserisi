<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::create([
            'lang' => 'tr',
            'name' => 'Ahmet Yılmaz',
            'slug' => 'ahmet-yilmaz',
            'image' => 'img/team/b1.jpg',
            'content' => 'Ahmet Yılmaz berber ustası',
            'short_content' => 'Ahmet Yılmaz berber ustası',
            'facebook' => '#',
            'twitter' => '#',
            'instagram' => '#',
            'linkedin' => '#',
        ]);


        Team::create([
            'lang' => 'tr',
            'name' => 'Kadir Yılmaz',
            'slug' => 'kadir-yilmaz',
            'image' => 'img/team/b2.jpg',
            'content' => 'Kadir Yılmaz berber ustası',
            'short_content' => 'Kadir Yılmaz berber ustası',
            'facebook' => '#',
            'twitter' => '#',
            'instagram' => '#',
            'linkedin' => '#',
        ]);

        Team::create([
            'lang' => 'tr',
            'name' => 'Mehmet Yılmaz',
            'slug' => 'mehmet-yilmaz',
            'image' => 'img/team/b3.jpg',
            'content' => 'Mehmet Yılmaz berber ustası',
            'short_content' => 'Mehmet Yılmaz berber ustası',
            'facebook' => '#',
            'twitter' => '#',
            'instagram' => '#',
            'linkedin' => '#',
        ]);
    }
}
