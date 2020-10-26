<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('image')->insert([
            ['name' => 'Tôm Tít Hấp','price' => '150000','image' => 'tomTitHap.jpg'],
            ['name' => 'Canh chua','price' => '80000','image' => '20201021150543.jpg'],
            ['name' => 'Canh tôm cải','price' => '100000','image' => '20201021152709.jpg'],
            ['name' => 'minhon','price' => '40000','image' => '20201021153252.jpg'],
            ['name' => 'hot girl','price' => '60000','image' => '20201022015701.jpg'],
            ['name' => 'xinh','price' => '140000','image' => '20201022015813.jpg'],
            ['name' => 'meto','price' => '240000','image' => '20201022020015.jpg'],
            ['name' => 'ba chỉ heo rim','price' => '170000','image' => '20201023113749.jpg'],
            ['name' => 'ba chỉ heo rim','price' => '270000','image' => '20201023113824.jpg']
        ]);
    }
}
