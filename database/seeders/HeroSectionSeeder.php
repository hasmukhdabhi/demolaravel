<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('hero_sections')->insert([
            'title' => 'Better Solutions For Your Business',
            'description' => 'We are a team of talented designers making websites with Bootstrap',
            'button_text' => 'Get Started',
            'button_link' => '#about',
            'video_link' => 'https://www.youtube.com/watch?v=Y7f98aduVJ8',
            'image' => 'assets/img/hero-img.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
    }
}
