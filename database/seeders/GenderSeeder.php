<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert([
            [
                'code' => 0,
                'name' => '回答しない',
            ],
            [
                'code' => 1,
                'name' => '男性',
            ],
            [
                'code' => 2,
                'name' => '女性',
            ],
            [
                'code' => 9,
                'name' => 'その他',
            ],
        ]);
    }
}
