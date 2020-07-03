<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('vi_VN');
        for($i = 0; $i < 10; $i++) {
        DB::table('articles')->insert([
            'title' => $faker->name(),
            'description' => $faker->name(),
            'content' => $faker->paragraph($nbSentences = 3),
        ]);
        }
    }
}
