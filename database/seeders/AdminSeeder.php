<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'name' => '南翔太',
                'email' => 'test1@test.com',
                'password' => Hash::make('test1234'),
            ],
            [
                'name' => '谷拓哉',
                'email' => 'test2@test.com',
                'password' => Hash::make('test1234'),
            ],
            [
                'name' => '清水香奈芽',
                'email' => 'test3@test.com',
                'password' => Hash::make('test1234'),
            ],
        ]);
    }
}
