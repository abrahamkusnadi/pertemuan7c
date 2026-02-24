<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('books.create');
});

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::post('/books/delete/{id}', [BookController::class, 'destroy'])->name('books.delete');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::post('/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.delete');
