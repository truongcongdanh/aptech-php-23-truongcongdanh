<?php

use Illuminate\Database\Seeder;

class DoAnTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DoAn::create([
            'ten' => 'Tôm Tít Hấp Hành',
            'gia' => '150.000đ',
            'image' => 'tomTitHap.jpg'
        ]);
    }
}
