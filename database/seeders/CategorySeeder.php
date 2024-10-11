<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Dev',
            'slug'=> 'web-dev',
            'color'=>'red'
        ]);

        Category::create([
            'name' => 'Mobile Dev',
            'slug'=> 'mobile-dev',
            'color'=>'blue'
        ]);

        Category::create([
            'name' => 'Game Dev',
            'slug'=> 'game-dev',
            'color'=>'green'
        ]);

        Category::create([
            'name' => 'Desktop Dev',
            'slug'=> 'desktop-dev',
            'color'=>'yellow'
        ]);
    }
}
