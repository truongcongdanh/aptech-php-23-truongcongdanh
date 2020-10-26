<?php

use Illuminate\Database\Seeder;
use App\Data;

class DoAnTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'Áo vàng','price' => '150000','image' => 'product-1.jpg'],
            ['name' => 'Áo xám','price' => '80000','image' => 'product-2.jpg'],
            ['name' => 'Áo xanh','price' => '100000','image' => 'product-3.jpg'],
            ['name' => 'Khăn quàng cổ','price' => '40000','image' => 'product-4.jpg'],
            ['name' => 'Mũ vàng','price' => '60000','image' => 'product-5.jpg'],
            ['name' => 'Áo xám nâu','price' => '140000','image' => 'product-6.jpg'],
            ['name' => 'Cặp vàng','price' => '240000','image' => 'product-7.jpg'],
            ['name' => 'Áo gió nâu','price' => '170000','image' => 'product-8.jpg'],
            ['name' => 'Giày vàng','price' => '270000','image' => 'product-9.jpg']
        ]);
    }
}
