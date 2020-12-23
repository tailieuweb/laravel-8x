<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Database\Seeders\BaseSeeder;

class UserSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'country_id' => rand(1,3),
                'name' => "user{$i}",
                'username' => "username{$i}",
                'email' => "user{$i}@gmail.com",
                'password' => Hash::make('123456789'),
                'avatar' => "avatar{$i}",
                'status' => 1,
            ]);
        }
        
    }
}
