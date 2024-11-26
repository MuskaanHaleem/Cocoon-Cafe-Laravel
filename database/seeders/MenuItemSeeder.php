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
        'image' => 'https://www.culinaryhill.com/wp-content/uploads/2014/08/Turkey-Avocado-BLT-Croissant-Sandwich-Culinary-Hill-square.jpg',
    ]);

    MenuItem::create([
        'name' => 'Eggs and Veges',
        'description' => 'Healthy breakfast with eggs and veggies.',
        'price' => 850,
        'category' => 'breakfast',
        'image' => 'https://i.pinimg.com/736x/a6/52/ff/a652ff71c6252df6786a32d94ce7d854.jpg',
    ]);

    MenuItem::create([
        'name' => 'Pancakes',
        'description' => 'Fluffy pancakes with syrup and berries.',
        'price' => 1150,
        'category' => 'breakfast',
        'image' => 'https://th.bing.com/th/id/OIP.76-mOBgKSjhS-43zpUqF-wHaHa?w=2560&h=2560&rs=1&pid=ImgDetMain',
    ]);

    MenuItem::create([
        'name' => 'French Toast',
        'description' => 'Sweet and crispy French toast.',
        'price' => 1120,
        'category' => 'breakfast',
        'image' => 'https://th.bing.com/th/id/OIP.KZ5Wh5vYVKrdj5uecWmocwHaHa?w=720&h=720&rs=1&pid=ImgDetMain',
    ]);

    MenuItem::create([
        'name' => 'Cheese Omelette',
        'description' => 'Creamy omelette filled with cheese.',
        'price' => 950,
        'category' => 'breakfast',
        'image' => 'https://th.bing.com/th/id/OIP.ECy--_0x5s8aMz30TjnVqgHaHa?w=1000&h=1000&rs=1&pid=ImgDetMain',
    ]);

    MenuItem::create([
        'name' => 'Yogurt Fruit Bowl',
        'description' => 'Refreshing yogurt bowl with fresh fruits.',
        'price' => 1050,
        'category' => 'breakfast',
        'image' => 'https://th.bing.com/th/id/OIP.bqMa4L2z70AwzroXe315ygHaHa?w=568&h=568&rs=1&pid=ImgDetMain',
    ]);

    // Appetizers
    MenuItem::create([
        'name' => 'Cesar Salad',
        'description' => 'Classic Cesar salad with fresh lettuce and croutons.',
        'price' => 1100,
        'category' => 'appetizers',
        'image' => 'https://th.bing.com/th/id/OIP.6aOPN05LoJngZJcGtfPGKgHaHa?w=520&h=520&rs=1&pid=ImgDetMain',
    ]);

    MenuItem::create([
        'name' => 'Penne Pasta',
        'description' => 'Rich and creamy Penne pasta.',
        'price' => 1250,
        'category' => 'appetizers',
        'image' => 'https://th.bing.com/th/id/OIP.ckPJ5VaCuioGqp36Ucg1nAHaHa?w=500&h=500&rs=1&pid=ImgDetMain',
    ]);

    MenuItem::create([
        'name' => 'Grilled Sandwich',
        'description' => 'Toasted sandwich with fresh vegetables.',
        'price' => 1320,
        'category' => 'appetizers',
        'image' => 'https://th.bing.com/th/id/OIP.RVaebJXtOtO1nwJitqc8oAHaHa?w=600&h=600&rs=1&pid=ImgDetMain',
    ]);

    MenuItem::create([
        'name' => 'Mozzarella Sticks',
        'description' => 'Crispy and cheesy Mozzarella sticks.',
        'price' => 980,
        'category' => 'appetizers',
        'image' => 'https://th.bing.com/th/id/OIP.iHv2eUJTD0QFkJwmfNsdYgHaHa?w=500&h=500&rs=1&pid=ImgDetMain',
    ]);

    MenuItem::create([
        'name' => 'Loaded Nachos',
        'description' => 'Nachos loaded with cheese, jalapenos, and salsa.',
        'price' => 1050,
        'category' => 'appetizers',
        'image' => 'https://hips.hearstapps.com/ghk.h-cdn.co/assets/17/08/1487797315-ghk070116ykbreakfastchilaquiles.jpg?crop=1.00xw:0.667xh;0,0.189xh&resize=640:*',
    ]);

    MenuItem::create([
        'name' => 'Veg Tacos',
        'description' => 'Delicious vegetable-filled tacos.',
        'price' => 1150,
        'category' => 'appetizers',
        'image' => 'https://latinfixins.com/wp-content/uploads/2022/04/9TLC0849.jpg',
    ]);

    // Main Course
    MenuItem::create([
        'name' => 'Smoky Beef Burger',
        'description' => 'Juicy beef burger with smoky flavors.',
        'price' => 1750,
        'category' => 'main course',
        'image' => 'https://s3-media0.fl.yelpcdn.com/bphoto/VVq6bF79w7O1phM8j3C_BA/l.jpg',
    ]);

    MenuItem::create([
        'name' => 'Alfredo Pasta',
        'description' => 'Rich Alfredo pasta with creamy sauce.',
        'price' => 1550,
        'category' => 'main course',
        'image' => 'https://th.bing.com/th/id/OIP.-DS44jfNn4Eip5869gtgIwHaHa?w=1200&h=1200&rs=1&pid=ImgDetMain',
    ]);

    MenuItem::create([
        'name' => 'Margarita Pizza',
        'description' => 'Classic Margarita pizza with fresh basil.',
        'price' => 1900,
        'category' => 'main course',
        'image' => 'https://th.bing.com/th/id/OIP.vZgzb2AKDWFk55GTC8l5xAHaHa?w=600&h=600&rs=1&pid=ImgDetMain',
    ]);

    MenuItem::create([
        'name' => 'Rice Bowl',
        'description' => 'Rice bowl with fresh vegetables and grilled protein.',
        'price' => 1300,
        'category' => 'main course',
        'image' => 'https://minimalistbaker.com/wp-content/uploads/2023/01/Salmon-Sushi-Bowls-8-600x600.jpg',
    ]);

    MenuItem::create([
        'name' => 'Moroccan Steak',
        'description' => 'Grilled steak with Moroccan spices.',
        'price' => 1850,
        'category' => 'main course',
        'image' => 'https://hips.hearstapps.com/redonline/main/gallery/4856/1-1379665769-spiced-lamb-with-persian-cous-cous.jpg?resize=480:*',
    ]);

    MenuItem::create([
        'name' => 'Spaghetti Bolognese',
        'description' => 'Classic Italian Spaghetti Bolognese.',
        'price' => 1750,
        'category' => 'main course',
        'image' => 'https://th.bing.com/th/id/OIP.AkngZxMqrMurWICrrwa4mQAAAA?rs=1&pid=ImgDetMain',
    ]);

    // Desserts
    MenuItem::create([
        'name' => 'Chocolate Cake',
        'description' => 'Rich and moist chocolate cake.',
        'price' => 600,
        'category' => 'desserts',
        'image' => 'https://th.bing.com/th/id/OIP.gDN7J8eEYJq2q-73JuCqUgHaHa?w=1080&h=1080&rs=1&pid=ImgDetMain',
    ]);

    MenuItem::create([
        'name' => 'Lotus Truffle',
        'description' => 'Decadent Lotus-flavored truffle.',
        'price' => 750,
        'category' => 'desserts',
        'image' => 'https://th.bing.com/th/id/OIP.FR1QDIq-EORgPnbkq7-_fgAAAA?w=300&h=300&rs=1&pid=ImgDetMain',
    ]);
    MenuItem::create([
        'name' => 'Strawberry Cheesecake',
        'description' => 'Creamy cheesecake with fresh strawberries.',
        'price' => 650,
        'category' => 'desserts',
        'image' => 'https://bakerbynature.com/wp-content/uploads/2019/04/New-York-Cheesecake-17-500x500.jpg',
    ]);

    // Drinks
    MenuItem::create([
        'name' => 'Iced Frappe',
        'description' => 'Chilled frappe with a rich coffee flavor.',
        'price' => 800,
        'category' => 'drinks',
        'image' => 'https://img.freepik.com/premium-photo/coffee-cup-with-fredo-ice-latte-caramel-coffee-tonic-white-background-generative-ai_721117-302.jpg',
    ]);

    MenuItem::create([
        'name' => 'Dalgona Coffee',
        'description' => 'Whipped coffee over iced milk.',
        'price' => 650,
        'category' => 'drinks',
        'image' => 'https://th.bing.com/th/id/OIP.bGwS5mrlpPYnmSuALxuT7wHaHa?w=1200&h=1200&rs=1&pid=ImgDetMain',
    ]);

    MenuItem::create([
        'name' => 'Iced Caramel Latte',
        'description' => 'Refreshing iced latte with caramel.',
        'price' => 750,
        'category' => 'drinks',
        'image' => 'https://img.freepik.com/premium-photo/cup-iced-coffee-with-lid-open_745528-31687.jpg',
    ]);
}

    }
