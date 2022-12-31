<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universities')->insert([
            [
                'name' => '東京大学',
                'domain' => 'ecc.u-tokyo.ac.jp',
            ],
            [
                'name' => '早稲田大学',
                'domain' => 'waseda.jp',
            ],
            [
                'name' => '慶應大学',
                'domain' => 'keio.jp',
            ],
            [
                'name' => '上智大学',
                'domain' => 'sophia.ac.jp',
            ],
            [
                'name' => '明治大学',
                'domain' => 'meiji.ac.jp',
            ],
            [
                'name' => '青山学院大学',
                'domain' => 'aoyama.jp',
            ],
            [
                'name' => '立教大学',
                'domain' => 'rikkyo.ac.jp',
            ],
            [
                'name' => '中央大学',
                'domain' => 'chuo-u.ac.jp',
            ],
            [
                'name' => '法政大学',
                'domain' => 'hosei.ac.jp',
            ],
            // ---------- ---------- ---------- ---------- ---------- //
            // [
            //     'name' => '北海道大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '北海道教育大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '帯広畜産大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '小樽商科大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '室蘭工業大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '旭川医科大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '北見工業大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '釧路公立大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '公立はこだて未来大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '名寄市立大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '札幌市立大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '札幌大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '旭川大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '函館大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '道都大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '北海道文教大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '北海道情報大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '北海道科学大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '北海道東海大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '北翔大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '北星学園大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '稚内北星学園大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '北海学園大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '北海学園商科大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '札幌学院大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '札幌国際大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '札幌大谷大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '札幌医科大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '千歳科学技術大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '苫小牧駒澤大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '星槎大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '日本赤十字北海道看護大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '藤女子大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '天使大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '酪農学園大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '札幌保健医療大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '日本医療大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '北海道千歳リハビリテーション大学',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '',
            //     'domain' => '.ac.jp',
            // ],
            // [
            //     'name' => '',
            //     'domain' => '.ac.jp',
            // ],
            
        ]);
    }
}
