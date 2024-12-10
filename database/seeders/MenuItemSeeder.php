<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuItem; // Import the MenuItem model

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    // Breakfast Items
    MenuItem::create([
        'name' => 'Croissant Sandwich',
        'description' => 'Delicious croissant sandwich with fresh veggies.',
        'price' => 1000,
        'category' => 'breakfast',
        'image' => 'images/1.jpg',
    ]);

    MenuItem::create([
        'name' => 'Eggs and Veges',
        'description' => 'Healthy breakfast with eggs and veggies.',
        'price' => 850,
        'category' => 'breakfast',
        'image' => 'images/2.jpg',
    ]);

    MenuItem::create([
        'name' => 'Pancakes',
        'description' => 'Fluffy pancakes with syrup and berries.',
        'price' => 1150,
        'category' => 'breakfast',
        'image' => 'images/3.jpg',
    ]);

    MenuItem::create([
        'name' => 'French Toast',
        'description' => 'Sweet and crispy French toast.',
        'price' => 1120,
        'category' => 'breakfast',
        'image' => 'images/4.jpg',
    ]);

    MenuItem::create([
        'name' => 'Cheese Omelette',
        'description' => 'Creamy omelette filled with cheese.',
        'price' => 950,
        'category' => 'breakfast',
        'image' => 'images/5.jpg',
    ]);

    MenuItem::create([
        'name' => 'Yogurt Fruit Bowl',
        'description' => 'Refreshing yogurt bowl with fresh fruits.',
        'price' => 1050,
        'category' => 'breakfast',
        'image' => 'images/6.jpg',
    ]);

    // Appetizers
    MenuItem::create([
        'name' => 'Cesar Salad',
        'description' => 'Classic Cesar salad with fresh lettuce and croutons.',
        'price' => 1100,
        'category' => 'appetizers',
        'image' => 'images/7.jpg',
    ]);

    MenuItem::create([
        'name' => 'Penne Pasta',
        'description' => 'Rich and creamy Penne pasta.',
        'price' => 1250,
        'category' => 'appetizers',
        'image' => 'images/8.jpg',
    ]);

    MenuItem::create([
        'name' => 'Grilled Sandwich',
        'description' => 'Toasted sandwich with fresh vegetables.',
        'price' => 1320,
        'category' => 'appetizers',
        'image' => 'images/9.jpg',
    ]);

    MenuItem::create([
        'name' => 'Mozzarella Sticks',
        'description' => 'Crispy and cheesy Mozzarella sticks.',
        'price' => 980,
        'category' => 'appetizers',
        'image' => 'images/10.jpg',
    ]);

    MenuItem::create([
        'name' => 'Loaded Nachos',
        'description' => 'Nachos loaded with cheese, jalapenos, and salsa.',
        'price' => 1050,
        'category' => 'appetizers',
        'image' => 'images/11.jpg',
    ]);

    MenuItem::create([
        'name' => 'Veg Tacos',
        'description' => 'Delicious vegetable-filled tacos.',
        'price' => 1150,
        'category' => 'appetizers',
        'image' => 'images/12.jpg',
    ]);

    // Main Course
    MenuItem::create([
        'name' => 'Smoky Beef Burger',
        'description' => 'Juicy beef burger with smoky flavors.',
        'price' => 1750,
        'category' => 'main course',
        'image' => 'images/13.jpg',
    ]);

    MenuItem::create([
        'name' => 'Alfredo Pasta',
        'description' => 'Rich Alfredo pasta with creamy sauce.',
        'price' => 1550,
        'category' => 'main course',
        'image' => 'images/14.jpg',
    ]);

    MenuItem::create([
        'name' => 'Margarita Pizza',
        'description' => 'Classic Margarita pizza with fresh basil.',
        'price' => 1900,
        'category' => 'main course',
        'image' => 'images/15.jpg',
    ]);

    MenuItem::create([
        'name' => 'Rice Bowl',
        'description' => 'Rice bowl with fresh vegetables and grilled protein.',
        'price' => 1300,
        'category' => 'main course',
        'image' => 'images/16.jpg',
    ]);

    MenuItem::create([
        'name' => 'Moroccan Steak',
        'description' => 'Grilled steak with Moroccan spices.',
        'price' => 1850,
        'category' => 'main course',
        'image' => 'images/17.jpg',
    ]);

    MenuItem::create([
        'name' => 'Spaghetti Bolognese',
        'description' => 'Classic Italian Spaghetti Bolognese.',
        'price' => 1750,
        'category' => 'main course',
        'image' => 'images/18.jpg',
    ]);

    // Desserts
    MenuItem::create([
        'name' => 'Chocolate Cake',
        'description' => 'Rich and moist chocolate cake.',
        'price' => 600,
        'category' => 'desserts',
        'image' => 'images/19.jpg',
    ]);

    MenuItem::create([
        'name' => 'Lotus Truffle',
        'description' => 'Decadent Lotus-flavored truffle.',
        'price' => 750,
        'category' => 'desserts',
        'image' => 'images/20.jpg',
    ]);
    MenuItem::create([
        'name' => 'Strawberry Cheesecake',
        'description' => 'Creamy cheesecake with fresh strawberries.',
        'price' => 650,
        'category' => 'desserts',
        'image' => 'images/21.jpg',
    ]);

    // Drinks
    MenuItem::create([
        'name' => 'Iced Frappe',
        'description' => 'Chilled frappe with a rich coffee flavor.',
        'price' => 800,
        'category' => 'drinks',
        'image' => 'images/22.jpg',
    ]);

    MenuItem::create([
        'name' => 'Dalgona Coffee',
        'description' => 'Whipped coffee over iced milk.',
        'price' => 650,
        'category' => 'drinks',
        'image' => 'images/23.jpg',
    ]);

    MenuItem::create([
        'name' => 'Iced Caramel Latte',
        'description' => 'Refreshing iced latte with caramel.',
        'price' => 750,
        'category' => 'drinks',
        'image' => 'images/24.jpg',
    ]);
}

    }
