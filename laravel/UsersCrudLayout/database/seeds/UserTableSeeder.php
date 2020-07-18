<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $danh = Faker\Factory::create();
        for($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $danh->name,
                'email' => $danh->safeEmail,
                'password' => bcrypt('1234')
            ]);
        }
    }
}
