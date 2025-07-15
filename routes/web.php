<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

use App\Models\Product;
use App\Models\Collection;

Route::get('/', function () {
    $products = Product::with('collection')->get();
    $collections = Collection::all();
    return view('home', ['products' => $products, 'collections' => $collections]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Customer home page route
Route::get('/customer', function () {
    return view('customer');
})->middleware(['auth'])->name('customer.home');


Route::middleware('auth')->group(function () {
    Route::get('/customer/test', function () {
        return view('test');
    })->name('customer.test');
});



require __DIR__.'/auth.php';


// Admin Pages
Route::prefix('admin')->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('admin.dashboard');
    Route::view('/customers', 'admin.customers')->name('admin.customers');
  Route::get('/products', [ProductController::class, 'index'])->name('admin.products');
    Route::view('/orders', 'admin.orders')->name('admin.orders');
});