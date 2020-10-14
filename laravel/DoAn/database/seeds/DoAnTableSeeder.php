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
            'name' => 'Tôm Tít Hấp Hành',
            'gia' => '150.000đ',
            'img' => 'http://localhost:8000/img/tomTitHap.jpg'
        ]);
    }
}
