<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['id','name'];

    // One-to-Many relationship: A Category has many MenuItems
    public function menuItems()
    {
        return $this->hasMany(MenuItem::class);
    }
}
