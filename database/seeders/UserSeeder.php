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
                'display_name' => 'ガク',
                'authentication' => 0,
                'icon' => null,
                'university_id' => 6,
                // 'department_id' => null,
                'email' => 'test11@test.com',
                'university_email' => null, //'a0000000@aoyama.jp'
                'birthday' => null, //'1990-12-03'
                'gender' => null,
                'password' => Hash::make('test1234'),
            ],
            [
                'name' => '川北茂澄',
                'display_name' => '川北',
                'authentication' => 0,
                'icon' => null,
                'university_id' => 3,
                // 'department_id' => null,
                'email' => 'test12@test.com',
                'university_email' => null, //k0000001@keio.jp
                'birthday' => null,
                'gender' => null,
                'password' => Hash::make('test1234'),
            ],
            [
                'name' => '髙比良くるま',
                'display_name' => 'くるま',
                'authentication' => 0,
                'icon' => null,
                'university_id' => 3,
                // 'department_id' => null,
                'email' => 'test13@test.com',
                'university_email' => null, //'k0000002@keio.jp'
                'birthday' => null, //'1994-09-03'
                'gender' => null,
                'password' => Hash::make('test1234'),
            ],
            [
                'name' => '松井ケムリ',
                'display_name' => 'ケムリ',
                'authentication' => 0,
                'icon' => null,
                'university_id' => 3,
                // 'department_id' => null,
                'email' => 'test14@test.com',
                'university_email' => null, //'k0000003@keio.jp'
                'birthday' => null, //'1993-05-29'
                'gender' => null,
                'password' => Hash::make('test1234'),
            ],
            [
                'name' => '岡部大',
                'display_name' => '岡部',
                'authentication' => 0,
                'icon' => null,
                'university_id' => 2,
                // 'department_id' => null,
                'email' => 'test15@test.com',
                'university_email' => null, //'w0000000@keio.jp'
                'birthday' => null, //'1989-05-30'
                'gender' => null,
                'password' => Hash::make('test1234'),
            ],
            // [
            //     'name' => '西村真二',
            //     'university_id' => 3,
            //     'authentication' => 1,
            //     'email' => 'test15@test.com',
            //     'university_email' => 'k0000004@keio.jp',
            //     'birthday' => '1984-06-30',
            //     'gender' => 1,
            //     'password' => Hash::make('test1234'),
            // ],
            // [
            //     'name' => '門倉早彩',
            //     'university_id' => 4,
            //     'authentication' => 0,
            //     'email' => 'test16@test.com',
            //     'university_email' => 's0000000@sophia.ac.jp',
            //     'birthday' => '1995-12-13',
            //     'gender' => 2,
            //     'password' => Hash::make('test1234'),
            // ],
            // [
            //     'name' => '西田亘輝',
            //     'university_id' => 4,
            //     'authentication' => 0,
            //     'email' => 'test17@test.com',
            //     'university_email' => 's0000001@sophia.ac.jp',
            //     'birthday' => '1994-07-24',
            //     'gender' => 1,
            //     'password' => Hash::make('test1234'),
            // ],
        ]);
    }
}
