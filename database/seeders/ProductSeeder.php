<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
                'name_product' => 'Hoodie Black kids wrap',
                'price_product' => 299000,
                'description_product' => 'Comfortable black hoodie for kids.',
                'stock_product' => 10,
                'image_product' => 'assets/img/1a.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Hoodie black with gold image',
                'price_product' => 239000,
                'description_product' => 'Stylish black hoodie with gold image.',
                'stock_product' => 8,
                'image_product' => 'assets/img/1b.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Striped black and white t-shirt',
                'price_product' => 129000,
                'description_product' => 'Casual striped black and white t-shirt.',
                'stock_product' => 15,
                'image_product' => 'assets/img/1d.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // Tambahkan data produk lainnya di sini
            [
                'name_product' => 'Vans Classic Slip-On',
                'price_product' => 499000,
                'description_product' => 'Classic slip-on shoes from Vans.',
                'stock_product' => 20,
                'image_product' => 'assets/img/2a.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Polo T-Shirts',
                'price_product' => 199000,
                'description_product' => 'Set of comfortable polo t-shirts.',
                'stock_product' => 25,
                'image_product' => 'assets/img/3.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Casual Pants',
                'price_product' => 299000,
                'description_product' => 'Variety of casual pants for everyday wear.',
                'stock_product' => 30,
                'image_product' => 'assets/img/5.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Camouflage Pants',
                'price_product' => 349000,
                'description_product' => 'Camouflage pants for outdoor activities.',
                'stock_product' => 18,
                'image_product' => 'assets/img/6.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Jacket Black with white stripes',
                'price_product' => 399000,
                'description_product' => 'Black jacket with white stripes, perfect for cold weather.',
                'stock_product' => 12,
                'image_product' => 'assets/img/SOLD (9).jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Classic Black Shoes',
                'price_product' => 459000,
                'description_product' => 'Elegant black shoes for formal occasions.',
                'stock_product' => 15,
                'image_product' => 'assets/img/2a.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Red Polo Shirts',
                'price_product' => 159000,
                'description_product' => 'Comfortable red polo shirts for casual wear.',
                'stock_product' => 20,
                'image_product' => 'assets/img/4.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Green Polo Shirts',
                'price_product' => 159000,
                'description_product' => 'Comfortable green polo shirts for casual wear.',
                'stock_product' => 20,
                'image_product' => 'assets/img/4.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Camouflage Jacket',
                'price_product' => 499000,
                'description_product' => 'Stylish camouflage jacket for outdoor wear.',
                'stock_product' => 10,
                'image_product' => 'assets/img/1b.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Black Hoodie with Print',
                'price_product' => 259000,
                'description_product' => 'Black hoodie with a trendy print.',
                'stock_product' => 10,
                'image_product' => 'assets/img/7.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Striped T-Shirts',
                'price_product' => 99000,
                'description_product' => 'Comfortable striped t-shirts for everyday wear.',
                'stock_product' => 30,
                'image_product' => 'assets/img/9.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Sold Out Product',
                'price_product' => 0,
                'description_product' => 'This product is sold out.',
                'stock_product' => 0,
                'image_product' => 'assets/img/sold_out.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
