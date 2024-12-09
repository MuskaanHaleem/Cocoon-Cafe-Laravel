<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Add all categories
        $categories = [
            [
                'name' => 'Breakfast',
                'description' => 'Morning meals and drinks',
            ],
            [
                'name' => 'Appetizers',
                'description' => 'Starters and snacks to begin your meal',
            ],
            [
                'name' => 'Main Course',
                'description' => 'Hearty and fulfilling main dishes',
            ],
            [
                'name' => 'Desserts',
                'description' => 'Sweet treats to end your meal',
            ],
            [
                'name' => 'Drinks',
                'description' => 'Refreshing beverages to complement your meal',
            ],
        ];

        // Insert each category
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}

