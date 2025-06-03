<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        About::create([
            'lang' => 'tr',
            'name' => 'Şirket Adı',
            'content' => 'Şirketimiz, 2010 yılından bu yana teknoloji sektöründe hizmet vermektedir. Müşterilerimize en iyi çözümleri sunmak için sürekli kendimizi geliştiriyoruz.',
            'vision' => 'Teknoloji dünyasında öncü ve yenilikçi çözümlerle global bir marka olmak.',
            'mission' => 'Müşterilerimizin dijital dönüşüm süreçlerinde en iyi çözümleri sunarak, teknolojik gelişmelere öncülük etmek.',
            'image' => 'img/about3.jpg'
        ]);

        About::create([
            'lang' => 'en',
            'name' => 'Company Name',
            'content' => 'Our company has been serving in the technology sector since 2010. We continuously improve ourselves to provide the best solutions to our customers.',
            'vision' => 'To become a global brand with pioneering and innovative solutions in the technology world.',
            'mission' => 'To lead technological developments by providing the best solutions in our customers digital transformation processes.',
            'image' => 'img/about3.jpg'
        ]);
    }
}