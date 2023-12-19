<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'sku' => '00002345',
                'name' => 'test',
                'category_id' => 1,
                'description' => 'this example product',
                'weight' => 5,
                'size' => 5,
                'cost_of_goods' => 5000000,
                'consumer_price' => 6000000,
                'status' => 'test',
            ]
        ]);
    }
}
