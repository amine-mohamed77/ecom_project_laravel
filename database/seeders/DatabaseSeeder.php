<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB;
use App\Models\product;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('categories')->insertOrIgnore([
            [
                'id' => 1,
                'name' => 'Camera',
                'descrption' => 'High-quality cameras to capture your best moments.',
                'url_image' => 'assets/img/products/camera.jpg',
            ],
            [
                  'id' => 2,
                'name' => 'Food',
                'descrption' => 'Fresh and delicious food products for all tastes.',
                'url_image' => 'assets/img/products/food.webp',
            ],
            [
                  'id' => 3,
                'name' => 'Makeup',
                'descrption' => 'A wide range of makeup products for all skin types.',
                'url_image' => 'assets/img/products/makeup-cosmetics.webp',
            ],
            [
                  'id' => 4,
                'name' => 'Electronics',
                'descrption' => 'Latest electronic devices including phones and laptops.',
                'url_image' => 'assets/img/products/electronics.jpg',
            ],
            [
                  'id' => 5,
                'name' => 'Watches',
                'descrption	' => 'Elegant and modern watches for men and women.',
                'url_image' => 'assets/img/products/watch.jpg',
            ],
            [
                  'id' => 6,
                'name' => 'Bags',
                'descrption	' => 'Stylish and practical bags for daily use.',
                'url_image' => 'assets/img/products/bage.jpg',
            ],
        ]);



  product::create([
            [
                'name' => 'Canon EOS 90D',
                'description' => 'High-resolution DSLR camera',
                'price' => 899.99,
                'url_image' => 'assets/img/products/Canon_EOS_90D.jpg',
                'quantity' => 15,

            ],
            [
                'name' => 'Margherita Pizza',
                'description' => 'Classic pizza with fresh tomatoes and mozzarella',
                'price' => 8.50,
                'url_image' => 'assets/img/products/Margherita-Pizza.webp',
                'quantity' => 50,

            ],
            [
                'name' => 'Lipstick Set',
                'description' => 'Matte lipstick set with multiple colors',
                'price' => 25.00,
                'url_image' => 'assets/img/products/makeup_product.webp',
                'quantity' => 30,

            ],
            [
                'name' => 'iPhone 14',
                'description' => 'Latest Apple smartphone with powerful features',
                'price' => 999.99,
                'url_image' => 'assets/img/products/iphone14.jpg',
                'quantity' => 20,

            ],
            [
                'name' => 'Rolex Watch',
                'description' => 'Luxury watch for special occasions',
                'price' => 1250.00,
                'url_image' => 'assets/img/products/watch_rolex.jpg',
                'quantity' => 5,

            ],
            [
                'name' => 'Leather Backpack',
                'description' => 'Durable and stylish leather backpack',
                'price' => 70.00,
                'url_image' => 'assets/img/products/Leather_Backpack_photo.webp',
                'quantity' => 10,
            ],
        ]);







    }
}
