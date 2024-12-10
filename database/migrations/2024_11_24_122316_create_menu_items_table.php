<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Menu item name
            $table->decimal('price', 8, 2); // Item price
            $table->string('category'); // Item category
            $table->string('image'); // Image 
            $table->timestamps(); // Created and updated timestamps
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_items');
    }
};
