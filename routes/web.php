<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;

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
    // Route::get('/admin/dashboard', [AdminController::class,'showBook'])->name('admin.showBook');
    Route::get('/admin/addbook', [BookController::class,'index'])->name('bookIndex');
});
    //admin with book CRUD
    Route::post('/admin/addbook', [BookController::class,'store'])->name('books.store');
    Route::get('/admin/book/{books}/edit', [BookController::class, 'edit'])->name('books.edit');
    Route::put('/admin/book/{books}/update', [BookController::class, 'update'])->name('books.update');
    Route::delete('/admin/book/{books}/destroy', [BookController::class, 'destroy'])->name('books.destroy');

    //user
    Route::get('/admin/book/{books}/show', [BookController::class, 'show'])->name('books.show');
    Route::get('addreview/{books}', [ReviewController::class,'index'])->name('review.index');
    Route::post('addreview', [ReviewController::class,'store'])->name('review.store');

    Route::get('review',[ReviewController::class,'view'])->name('review.view');
    // Route::get('editreview/{review}', [ReviewController::class, 'edit'])->name('review.edit');
    Route::get('/editreview/{review}', [ReviewController::class, 'edit'])->name('review.edit');
    
    