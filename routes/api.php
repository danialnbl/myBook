<?php

use App\Http\Controllers\Api\reviewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('review', reviewController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::put("/{review}",[reviewController::class,'update'])->name('review.update');
Route::delete("/{review}",[reviewController::class,'destroy'])->name('review.destroy');

// Route::put('/review/{review}',reviewController::class,'update');




