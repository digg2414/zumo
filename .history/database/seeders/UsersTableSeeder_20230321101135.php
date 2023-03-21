<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "James Harold II",
            "email" => "JHarold1241@outlook.com",
            "password" => bcrypt("magisTrate$417*862")
        ]);
    }
}
