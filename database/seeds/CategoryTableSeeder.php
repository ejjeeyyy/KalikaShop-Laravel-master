<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'T-shirts',
            'slug' => 'ecoshirt'
        ]);
        Category::create([
            'name' => 'Shoes',
            'slug' => 'shoes'
        ]);
        Category::create([
            'name' => 'Modern T-shirts',
            'slug' => 'ecoshirt2'
        ]);
        Category::create([
            'name' => 'Modern Shoes',
            'slug' => 'shoes2'
        ]);
        Category::create([
            'name' => 'Utensils',
            'slug' => 'utensil'
        ]);
        Category::create([
            'name' => 'Flip-flops',
            'slug' => 'flops'
        ]);

    }
}
