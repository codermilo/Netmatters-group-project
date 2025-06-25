<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
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


