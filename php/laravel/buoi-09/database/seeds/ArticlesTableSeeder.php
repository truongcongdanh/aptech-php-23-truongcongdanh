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
        DB::table('articles')->insert([
            'title' => 'bai viet dau tien',
            'description' => 'day la bai viet dau tien',
            'content' => 'noi dung chua co',
        ]);
    }
}
