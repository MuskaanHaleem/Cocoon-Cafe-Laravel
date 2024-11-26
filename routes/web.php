<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MenuItemController;
use Illuminate\Support\Facades\Route;

// Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Authenticated Routes
Route::middleware('auth')->group(function () {
    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Public Routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/menu', [PageController::class, 'menu'])->name('menu');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Order Route (Handled by MenuItemController)
Route::get('/order', [MenuItemController::class, 'showOrderPage'])->name('order');

// MenuItem CRUD Routes (Admin Panel)
Route::prefix('menu-items')->group(function () {
    Route::get('/', [MenuItemController::class, 'index'])->name('menu-items.index');
    Route::get('/create', [MenuItemController::class, 'create'])->name('menu-items.create');
    Route::post('/', [MenuItemController::class, 'store'])->name('menu-items.store');
    Route::get('/{id}/edit', [MenuItemController::class, 'edit'])->name('menu-items.edit');
    Route::patch('/{id}', [MenuItemController::class, 'update'])->name('menu-items.update');
    Route::delete('/{id}', [MenuItemController::class, 'destroy'])->name('menu-items.destroy');
});

// Authentication Routes
require __DIR__.'/auth.php';
