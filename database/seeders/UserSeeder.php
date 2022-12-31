<?php

namespace Database\Seeders;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => '川俣岳',
                'university_id' => 6,
                'email' => 'test11@test.com',
                'birthday' => '1990-12-03',
                'gender' => 1,
                'password' => Hash::make('test1234'),
            ],
            [
                'name' => '髙比良くるま',
                'university_id' => 3,
                'email' => 'test12@test.com',
                'birthday' => '1994-09-03',
                'gender' => 1,
                'password' => Hash::make('test1234'),
            ],
            [
                'name' => '西村真二',
                'university_id' => 3,
                'email' => 'test13@test.com',
                'birthday' => '1984-06-30',
                'gender' => 1,
                'password' => Hash::make('test1234'),
            ],
        ]);
    }
}
