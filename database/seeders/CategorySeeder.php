<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::query()->insert([
            [
                "name" => "Beauty"
            ],

            [
                "name" => "Technology"
            ],

            [
                "name" => "Food and Beverages"
            ],

            [
                "name" => "Book"
            ],

            [
                "name" => "Sport"
            ],

            [
                "name" => "Furniture"
            ],

            [
                "name" => "Gaming"
            ],

            [
                "name" => "Health Care"
            ]
        ]);
    }
}
