<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\ProductController as PublicProductController;
use App\Http\Controllers\Admin\CollectionController as AdminCollectionController;
use App\Http\Controllers\CollectionController as PublicCollectionController;
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
Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
    Route::view('/customers', 'admin.customers')->name('customers');

    Route::view('/orders', 'admin.orders')->name('orders');

    Route::prefix('/products')->name('products.')->group(function () {
        // Admin view of all products
        Route::get('/', [AdminProductController::class, 'index'])->name('index');

        // Admins can create products
        Route::get('/create', [AdminProductController::class, 'create'])->name('create');
        Route::post('/create', [AdminProductController::class, 'store'])->name('create');

        // Admins can edit or delete products
        Route::get('/{product}/edit', [AdminProductController::class, 'edit'])->name('edit');
        Route::patch('/{product}/edit', [AdminProductController::class, 'update'])->name('edit');
        Route::delete('/{product}/edit', [AdminProductController::class, 'delete'])->name('edit');
    });

    Route::prefix('/collections')->name('collections.')->group(function () {
        // Admin view all collections
        Route::get('/', [AdminCollectionController::class, 'index'])->name('index');

        // Admin can create collections
        Route::get('/create', [AdminCollectionController::class, 'create'])->name('create');
        Route::post('/create', [AdminCollectionController::class, 'store'])->name('create');

        // Admins can edit or delete products
        Route::get('/{collection}/edit', [AdminCollectionController::class, 'edit'])->name('edit');
        Route::patch('/{collection}/edit', [AdminCollectionController::class, 'update'])->name('edit');
        Route::delete('/{collection}/edit', [AdminCollectionController::class, 'delete'])->name('edit');
    });
    
});