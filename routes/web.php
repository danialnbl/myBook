<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// User Route
Route::middleware(['auth','userMiddleware'])->group(function(){
    Route::get('dashboard', [UserController::class,'index'])->name('dashboard');
});

// Admin Route
Route::middleware(['auth','adminMiddleware'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class,'index'])->name('admin.dashboard');
    Route::get('/admin/addbook', [BookController::class,'index'])->name('bookIndex');
});
    
    // Route::get('/admin/addbook', [BookController::class,'create'])->name('books.create');
    Route::post('/admin/addbook', [BookController::class,'store'])->name('books.store');