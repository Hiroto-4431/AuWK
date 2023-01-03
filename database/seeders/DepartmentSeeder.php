<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            [
                'name' => '文学部',
            ],
            [
                'name' => '教育学部',
            ],
            [
                'name' => '社会学部',
            ],
            [
                'name' => '人間科学部',
            ],
            [
                'name' => '心理学部',
            ],
            [
                'name' => '外国語学部',
            ],
            [
                'name' => '国際学部',
            ],
            [
                'name' => '法学部',
            ],
            [
                'name' => '経済学部',
            ],
            [
                'name' => '経営学部',
            ],
            [
                'name' => '商学部',
            ],
            [
                'name' => '理学部',
            ],
            [
                'name' => '工学部',
            ],
            [
                'name' => '情報学部',
            ],
            [
                'name' => '医学部',
            ],
            [
                'name' => '薬学部',
            ],[
                'name' => '歯学部',
            ],
            [
                'name' => '看護学部',
            ],
            [
                'name' => '保健学部',
            ],
            [
                'name' => '福祉学部',
            ],
            [
                'name' => '獣医学部',
            ],
            [
                'name' => '生物学部',
            ],
            [
                'name' => '農学部',
            ],
            [
                'name' => '栄養学部',
            ],
            [
                'name' => '家政学部',
            ],
            [
                'name' => '美術学部',
            ],
            [
                'name' => '体育学部',
            ],
            [
                'name' => '音楽学部',
            ],
        ]);
    }
}
