<?php

use Illuminate\Database\Seeder;
use App\User;


class MonansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('monans')->insert([
            [
                'id' => '1',
                'name' => 'mikarasua',
                'price' => '15000'
            ],
            [
                'id' => '2',
                'name' => 'minhon',
                'price' => '24000'
            ],
            [
                'id' => '3',
                'name' => 'krixi',
                'price' => '40000'
            ]
            ]);
    }
}
