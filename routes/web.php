<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/books', [BookController::class, 'index'])->name('books.index');

Route::middleware('auth')->group(function() {
    Route::middleware('role:admin')->group(function(){
        Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');
        Route::delete('/reviews/{id}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
    });

    Route::middleware('role:admin,writer')->group(function(){
        Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
        Route::post('/books', [BookController::class, 'store'])->name('books.store');
        Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
        Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update'); 
    });

    Route::middleware('role:admin,user,writer')->group(function(){
        Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
        Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
    });
});

Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');


Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/signup', [AuthController::class, 'signupStore'])->name('auth.signupStore');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'showLoginForm'])->name('auth.loginStore');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
