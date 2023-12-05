<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CaregoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_names = [
            '和食', '洋食', '中華'
        ];

        $japanese_food_categories = [
            '寿司', 'てんぷら', 'うどん', 'そば', '定食', 'ラーメン', 'たこ焼き', 'お好み焼き'
        ];

        $western_food_categories = [
            'グラタン', 'コロッケ', 'ハンバーグ'
        ];

        $chinese_food_categories = [
            '麻婆豆腐', 'エビチリ', 'かに玉',
        ];

        foreach ($category_names as $category_name) {
            if ($category_name == '和食') {
                foreach ($japanese_food_categories as $japanese_food_category) {
                    Category::create([
                        'name' => $japanese_food_category,
                        'description' => $japanese_food_category,
                        'category_name' => $category_name
                    ]);
                }
            }
        }

        foreach ($category_names as $category_name) {
            if ($category_name == '洋食') {
                foreach ($western_food_categories as $western_food_category) {
                    Category::create([
                        'name' => $western_food_category,
                        'description' => $western_food_category,
                        'category_name' => $category_name
                    ]);
                }
            }
        }

        foreach ($category_names as $category_name) {
            if ($category_name == '中華') {
                foreach ($chinese_food_categories as $chinese_food_category) {
                    Category::create([
                        'name' => $chinese_food_category,
                        'description' => $chinese_food_category,
                        'category_name' => $category_name
                    ]);
                }
            }
        }
    }
}
