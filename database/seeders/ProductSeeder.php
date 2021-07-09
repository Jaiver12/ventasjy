<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'laravel y livewire',
            'barcode' => '12345675',
            'cost' => 200,
            'price' => 350,
            'stock' => 1000,
            'alerts' => 5,
            'image' => 'https://dummyimage.com/200x150/5c5756/fff',
            'cateory_id' => 1
        ]);

        Product::create([
            'name' => 'Camiseta dama',
            'barcode' => '12345675',
            'cost' => 220,
            'price' => 350,
            'stock' => 1000,
            'alerts' => 5,
            'image' => 'https://dummyimage.com/200x150/5c5756/fff',
            'cateory_id' => 2
        ]);

        Product::create([
            'name' => 'Pantalon dama',
            'barcode' => '12345675',
            'cost' => 200,
            'price' => 350,
            'stock' => 1000,
            'alerts' => 5,
            'image' => 'https://dummyimage.com/200x150/5c5756/fff',
            'cateory_id' => 3
        ]);
    }
}
