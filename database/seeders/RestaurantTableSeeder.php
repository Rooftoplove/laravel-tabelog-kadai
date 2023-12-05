<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restaurant::create([
            "store_name" => "鳥貴族",
            "telephone" => "012011111111",
            "address" => "東京都千代田区",
            "open_time" => "10:00",
            "close_time" => "23:00",
            "regular_holiday" => "火,日",
            "max_price" => 2000,
            "lower_price" => 1000,
            "category_id" => 1
        ]);
    }
}
