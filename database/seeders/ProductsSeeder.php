<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++)
        DB::table('products')->insert([
            'title' => 'Flower ' . Str::random(10),
            'price' => rand(30, 200),
            'description' => Str::random(1000),
            'in_stock' => rand(1, 0),
            'type' => rand(1, 10),
            'height' => rand(1, 10),
            'color' => rand(1, 10),
            'manufacturer' => rand(1, 10),
            'created_at' => '2021-01-30 15:25:53',
            'updated_at' => '2021-01-30 15:25:53'
        ]);
    }
}
