<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/books', [App\Http\Controllers\BookController::class, 'index'])->name('books.index');
Route::get('/reviews', [App\Http\Controllers\ReviewController::class, 'index'])->name('reviews.index');
