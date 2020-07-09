<?php

use Illuminate\Database\Seeder;

use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $danh = Faker\Factory::create('vi_VN');
        for($i = 0; $i < 10; $i++) {
        // DB::table('users')->insert([
        //     'name' => $danh->name(),
        //     'email' => $danh->companyEmail,
        //     'password' => bcrypt('123456'),
        // ]);

        // Model
        User::create([
            'name' => $danh->name(),
            'email' => $danh->companyEmail,
            'password' => bcrypt('123456'),
        ]);       
        }
      
    }
}
