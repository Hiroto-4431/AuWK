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
                'university_id' => 1,
                'name' => '文学部',
            ],
            [
                'university_id' => 1,
                'name' => '経済学部',
            ],
            [
                'university_id' => 1,
                'name' => '経営学部',
            ],
            [
                'university_id' => 1,
                'name' => '総合文化政策学部',
            ],
            [
                'university_id' => 1,
                'name' => '教育人間科学部',
            ],
            [
                'university_id' => 1,
                'name' => '法学部',
            ],
            [
                'university_id' => 1,
                'name' => '国際政治経済学部',
            ],
            [
                'university_id' => 1,
                'name' => '理工学部',
            ],
            [
                'university_id' => 1,
                'name' => '地球社会共生学部',
            ],
            [
                'university_id' => 1,
                'name' => '社会情報学部',
            ],
            [
                'university_id' => 1,
                'name' => 'コミュニティ人間学部',
            ],
        ]);
    }
}
