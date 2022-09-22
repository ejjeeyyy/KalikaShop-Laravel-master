<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'EcoShirt' . $i,
                'slug' => 'ecoshirt-' . $i,
                'details' => 'Made with sustainable materials',
                'price' => rand(100, 300),
                'category_id' => 1,
                'image' => 'products/dummy/image0.jpg',
                'images' => '["products/dummy/image0.jpg", "products/dummy/image0.jpg", "products/dummy/image0.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'EcoShoes' . $i,
                'slug' => 'shoes-' . $i,
                'details' => 'Sustainable and fashionable shoes',
                'price' => rand(1000, 2000),
                'category_id' => 2,
                'image' => 'products/dummy/image1.jpg',
                'images' => '["products/dummy/image1.jpg", "products/dummy/image1.jpg", "products/dummy/image1.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'Sustainable Shirt' . $i,
                'slug' => 'ecoshirt2-' . $i,
                'details' => 'Shirt made with sustainable materials',
                'price' => rand(100, 300),
                'category_id' => 3,
                'image' => 'products/dummy/image2.jpg',
                'images' => '["products/dummy/image2.jpg", "products/dummy/image2.jpg", "products/dummy/image2.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'Eco Shoes 2.0' . $i,
                'slug' => 'shoes2-' . $i,
                'details' => 'Fashionable shoes made with sustainable materials',
                'price' => rand(1000, 3000),
                'category_id' => 4,
                'image' => 'products/dummy/image3.jpg',
                'images' => '["products/dummy/image3.jpg", "products/dummy/image3.jpg", "products/dummy/image3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'Bamboo Straw' . $i,
                'slug' => 'utensil-' . $i,
                'details' => 'Eco-friendly straws made with bamboo',
                'price' => rand(20, 40),
                'category_id' => 5,
                'image' => 'products/dummy/image4.jpg',
                'images' => '["products/dummy/image4.jpg", "products/dummy/image4.jpg", "products/dummy/image4.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'Eco Flip flops' . $i,
                'slug' => 'flops-' . $i,
                'details' => 'Eco-friendly flip flops',
                'price' => rand(100, 200),
                'category_id' => 6,
                'image' => 'products/dummy/image5.jpg',
                'images' => '["products/dummy/image5.jpg", "products/dummy/image5.jpg", "products/dummy/image5.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        $products = Product::all();
        foreach ($products as $product) {
            if($product->id % 3 == 0) {
                $product->featured = true;
                $product->save();
            }
        }
    }
}
