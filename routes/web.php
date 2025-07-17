<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CollectionController;
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

    Route::view('/orders', 'admin.orders')->name('admin.orders');

    Route::prefix('/products')->group(function () {
        // Admin view of all products
        Route::get('/', [ProductController::class, 'index'])->name('admin.products');

        // Admins can create products
        Route::get('/create', [ProductController::class, 'create'])->name('admin.products.create');
        Route::post('/create', [ProductController::class, 'store'])->name('admin.products.create');

        // Admins can edit or delete products
        Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
        Route::patch('/{product}/edit', [ProductController::class, 'update'])->name('admin.products.edit');
        Route::delete('/{product}/edit', [ProductController::class, 'delete'])->name('admin.products.edit');
    });

    Route::prefix('/collections')->group(function () {
        // Admin view all collections
        Route::get('/', [CollectionController::class, 'index'])->name('admin.collections');

        // Admin can create collections
        Route::get('/create', [CollectionController::class, 'create'])->name('admin.collections.create');
        Route::post('/create', [CollectionController::class, 'store'])->name('admin.collections.create');

        // Admins can edit or delete products
        Route::get('/{collection}/edit', [CollectionController::class, 'edit'])->name('admin.collections.edit');
        Route::patch('/{collection}/edit', [CollectionController::class, 'update'])->name('admin.collections.edit');
        Route::delete('/{collection}/edit', [CollectionController::class, 'delete'])->name('admin.collections.edit');
    });
    
});