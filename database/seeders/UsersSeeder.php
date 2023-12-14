<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                'name' => 'warehouse',
                'email' => 'warehouse@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'seller',
                'email' => 'seller@gmail.com',
                'password' => Hash::make('password'),
            ],
        ]);
    }
}
